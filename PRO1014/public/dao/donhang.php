<?php
    function don_hang_insert($ngay_dat_hang, $payments, $tong_tien, $ghi_chu, $id_khachhang) {
        $sql = "INSERT INTO don_hang (ngay_dat_hang, thong_tin_thanh_toan, tong_tien, ghi_chu, id_khachhang) VALUES (?. ?, ?, ?, ?)";
        pdo_execute($sql, $ngay_dat_hang, $payments, $tong_tien, $ghi_chu, $id_khachhang);
    }
?>