<?php
function dang_ky($ten_dangnhap, $mat_khau, $ho_ten, $email, $dia_chi, $so_dien_thoai) {
    $sql="INSERT INTO khach_hang(ten_dangnhap, mat_khau, ho_ten, email, dia_chi, so_dien_thoai) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_dangnhap, $mat_khau, $ho_ten, $email, $dia_chi, $so_dien_thoai);
}
function khach_hang_select_by_taikhoan($tai_khoan) {
    $sql = "SELECT * FROM khach_hang WHERE ten_dangnhap = ?";
    return pdo_query_one($sql, $tai_khoan);
}
