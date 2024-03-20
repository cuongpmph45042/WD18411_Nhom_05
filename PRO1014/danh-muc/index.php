<?php 
require_once "./public/pdo.php";
require_once "./public/global.php";
require_once "./public/dao/danhmuc.php";

$danhmuc = danhmuc_select_all();
require "./danh-muc/danhmuc.php";
?>