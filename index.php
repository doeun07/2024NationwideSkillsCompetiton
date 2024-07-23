<?php
include './config/DBConnection.php';

$request = $_SERVER["REQUEST_URI"];
$path = explode('?', $request);
$path[1] = isset($path[1]) ? $path[1] : null;
$resource = explode("/", $path[0]);

$page = "";
switch ($resource[1]) {
    case '':
        $page = './pages/index.php';
        break;
    case 'sub1':
        $page = "./pages/sub1.php";
        break;
    case 'sub2':
        $page = "./pages/sub2.php";
        break;
    default:
    echo '잘못된 접근입니다.';
    return 0;
}

include $page;

?>