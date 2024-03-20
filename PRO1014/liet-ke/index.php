<?php 
require_once "./public/global.php";
require_once "./public/pdo.php";
require_once "./public/dao/sanpham.php";
  
if (exist_param("btn_search")) {
    $keyword=$_POST['search'];
    $san_pham=sanpham_select_by_name($keyword);
} else if (exist_param("danh_muc")) {
    $id_danhmuc=$_GET['id_danhmuc'];
    $san_pham=sanpham_select_by_loai($id_danhmuc);
    $SLIDE="";
} else {
    $san_pham=sanpham_select_all();  
}
require "./liet-ke/lietke.php";