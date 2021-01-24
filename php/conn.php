<?php
session_start();

function sql($query)
{
    $_db = json_decode(file_get_contents("../db.json"), true);
    $conn = new mysqli($_db['host'],
        $_db['username'], $_db['password'], $_db['database']);
    if ($conn->connect_error) {
        die("Gagal terhubung: " . $conn->connect_error);
    }
    $temp = $conn->query($query);
    // $conn->close();
    echo $conn->error;
    return $temp;
}

function getAll($data)
{
    $tmp = [];
    if ($data->num_rows > 0) {
        while ($r = $data->fetch_assoc()) {
            $tmp[] = $r;
        }
        return $tmp;
    } else {
        return [];
    }
}

function first($data)
{
    $result = getAll($data);
    if (count($result) > 0) {
        return $result[0];
    } else {
        return [];
    }

}

function len($data)
{
    return count(getAll($data));
}

function _goto($arg)
{
    header("Location: $arg");
    die();
}

function _url($str)
{
    return "/rpl/php/$str.php";
}

function _get($str, $param)
{
    return "/rpl/php/$str.php$param";
}

function _page($str)
{
    return "/rpl/html/$str.php";
}

function _view($str, $param)
{
    return "/rpl/html/$str.php$param";
}