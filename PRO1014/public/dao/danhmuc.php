<?php
function danhmuc_select_all() {
    $sql="SELECT * FROM danh_muc_sp";
    return pdo_query($sql);
}