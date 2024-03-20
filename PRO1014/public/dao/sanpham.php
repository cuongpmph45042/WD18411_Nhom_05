<?php
function sanpham_select_all() {
    $sql="SELECT * FROM san_pham";
    return pdo_query($sql);
}
function sanpham_select_by_name($keyword) {
    $sql="SELECT * FROM san_pham WHERE ten_sanpham LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%');
}
function sanpham_select_by_loai($id_danhmuc) {
    $sql="SELECT * FROM san_pham WHERE id_danhmuc=?";
    return pdo_query($sql, $id_danhmuc);
}
function sanpham_select_by_id($id_sanpham) {
    $sql="SELECT san_pham.*, dm.ten_danhmuc FROM san_pham JOIN danh_muc_sp dm ON dm.id_danhmuc = san_pham.id_danhmuc WHERE id_sanpham=?";
    return pdo_query_one($sql, $id_sanpham);
}
