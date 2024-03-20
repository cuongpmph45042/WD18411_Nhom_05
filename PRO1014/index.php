<?php 
session_start();
require "./public/global.php";
require "./public/pdo.php";
require "./public/dao/sanpham.php";
require "./public/dao/donhang.php";
require "./public/dao/khachhang.php";
extract($_REQUEST);
if (exist_param("chi-tiet")) {
    $id_sanpham=$_GET['id_sanpham'];
    $chitiet=sanpham_select_by_id($id_sanpham);
    $BLOCK = "./chi-tiet/chitiet.php";
    $SLIDE=false;
} elseif (exist_param("cart")) {
    $BLOCK = "./gio-hang/giohang.php";
    $SLIDE=false;

} elseif (exist_param("danh_muc")) {
    $SLIDE=false;
    $VIEW_NAME="./liet-ke/index.php";
    $BLOCK = "./view/noidung_home.php";
} elseif (exist_param("btn_search")) {
    $SLIDE=false;
    $VIEW_NAME="./liet-ke/index.php";
    $BLOCK = "./view/noidung_home.php";
} elseif (exist_param("login")) {
    $SLIDE=false;
    $BLOCK="./user/dangnhap.php";
    $errors = [];
    if (exist_param("log")) {
        $tai_khoan = $_POST['tai_khoan'];
        $mat_khau=$_POST['mat_khau'];
        $user=khach_hang_select_by_taikhoan($tai_khoan);
        
        if (!$user) {
            $errors['taikhoan']="Tên đăng nhập hoặc email không chính xác!";
        } else {
            if (($tai_khoan == $user['ten_dangnhap']) && $mat_khau == $user['mat_khau']) {
                $_SESSION['user'] = $user;
                header("location: $ROOT_URL");
            } elseif ($tai_khoan != $user['ten_dangnhap']) {
                $errors['taikhoan']="Tên đăng nhập hoặc email không chính xác!";
                // $BLOCK="./user/dangnhap.php";
            } elseif ($mat_khau != $user['mat_khau']) {
                $errors['matkhau']="Mật khẩu không chính xác!";
                // $BLOCK="./user/dangnhap.php";
            }
        }

    }
}  elseif (exist_param("create_user")) {
    $BLOCK="./user/dangky.php";
    $SLIDE=false;
    $errors="";
    $ten_dangnhap="";
        $mat_khau="";
        $re_mat_khau="";
        $ho_ten="";
        $email="";
        $dia_chi="";
        $so_dien_thoai="";
    if(exist_param("create")) {
        $ten_dangnhap=$_POST['ten_dangnhap'];
        $mat_khau=$_POST['mat_khau'];
        $re_mat_khau=$_POST['re_mat_khau'];
        $ho_ten=$_POST['ho_ten'];
        $email=$_POST['email'];
        $dia_chi=$_POST['dia_chi'];
        $so_dien_thoai=$_POST['sdt'];

        if ($mat_khau != $re_mat_khau) {
            $errors="Mật khẩu không chính xác, vui lòng nhập lại!";
        }
        if ($mat_khau == $re_mat_khau) {
            dang_ky($ten_dangnhap, $mat_khau, $ho_ten, $email, $dia_chi, $so_dien_thoai);
            header("location: $ROOT_URL?login");
        } 
    }
} elseif (exist_param("information")) {
    $SLIDE=false;
    $BLOCK="./user/thongtin.php";
    if (exist_param("logout")) {
        unset($_SESSION['user']);
        header("location: $ROOT_URL");
    }
} elseif (exist_param("order")) {
    $SLIDE = false;
    $BLOCK = "./don-hang/donhang.php";
    if (isset($_SESSION['giohang']) && isset($_SESSION['user'])) {
        if (exist_param("buy")) {
            $ho_ten=$_POST['ho_ten'];
            $dia_chi=$_POST['dia_chi'];
            $email=$_POST['email'];
            $so_dien_thoai=$_POST['so_dien_thoai'];
            $ngay_dat_hang = date('Y-m-d');
            $payments=$_POST['payments'];
            $ghi_chu=$_POST['ghi_chu'];
            $tong_tien=0;
            $id_khachhang = $_SESSION['user']['id_khachhang'];
            foreach ($_SESSION['giohang'] as $item) {
                $tong_tien+= $item[2];
            }
            don_hang_insert($ngay_dat_hang, $payments, $tong_tien, $ghi_chu, $id_khachhang);
        }
    } else {
        $SLIDE=false;
        $BLOCK="./user/dangnhap.php";
    }

} else {
    $VIEW_NAME="./liet-ke/index.php";
    $BLOCK = "./view/noidung_home.php";
    $SLIDE = true;
} 

require "./view/layout.php";