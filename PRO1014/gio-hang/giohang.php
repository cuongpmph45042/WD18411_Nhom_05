<?php 
    if(isset($_GET['id_sanpham'])) {
        $id_sanpham=$_GET['id_sanpham'];
        $chitiet=sanpham_select_by_id($id_sanpham);
    }
    if (!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];    
    if (isset($_GET['delid'])&&($_GET['delid']>=0)) {
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    if (isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    if (isset($_POST['add_cart'])) {
        $hinh = $chitiet['hinh_anh'];
        $tensp=$chitiet['ten_sanpham'];
        $gia = $chitiet['gia'];
        $so_luong=$_POST['soluong'];

        $fl=0;

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            if($_SESSION['giohang'][$i][1] == $tensp) {
                $fl=1;
                $so_luongnew=$so_luong + $_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$so_luongnew;
                break;
            }
        }
        if($fl==0) {
            $sp=[$hinh,$tensp, $gia, $so_luong];
            $_SESSION['giohang'][] = $sp;
        }

    }
    if (isset($_POST['add_back'])) {
        $hinh = $chitiet['hinh_anh'];
        $tensp=$chitiet['ten_sanpham'];
        $gia = $chitiet['gia'];
        $so_luong=$_POST['soluong'];

        $fl=0;

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            if($_SESSION['giohang'][$i][1] == $tensp) {
                $fl=1;
                $so_luongnew=$so_luong + $_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$so_luongnew;
                break;
            }
        }
        if($fl==0) {
            $sp=[$hinh,$tensp, $gia, $so_luong];
            $_SESSION['giohang'][] = $sp;
        }
        header("location: $ROOT_URL?chi-tiet&id_sanpham=$id_sanpham");
    }

    function showgiohang() {
        if (isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))) {
            $tong=0;
            $ROOT_URL = "/PRO1014/";
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong+=$tt;
                echo '<tr>
                <td><img src="./public/image/'.$_SESSION['giohang'][$i][0].'" class="img-thumbnail w-25" alt=""></td>
                <td>'.$_SESSION['giohang'][$i][1].'</td>
                <td>'.$_SESSION['giohang'][$i][2].'</td>
                <td>'.$_SESSION['giohang'][$i][3].'</td>
                <td>'.number_format($tt, 2).'</td>
                <td>
                    <a name="" id="" class="btn" href="'.$ROOT_URL.'?cart&delid='.$i.'" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </a>
                </td>
            </tr>';
            }
            echo '<tr>
            <th colspan="4">TỔNG TIỀN</th>
            <th colspan="2" style="color: red;">'.number_format($tong,2).'<?=?></th>
        </tr>';
        }
    }
    
?>
<div class="d-flex justify-content-center">
    <h1>GIỎ HÀNG</h1>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th>ẢNH</th>
                <th>SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>SỐ LƯỢNG</th>
                <th>THÀNH TIỀN</th>
                <th>XÓA</th>
            </tr>
        </thead>
        <tbody>
            <?php showgiohang() ?>
            
        </tbody>
    </table>
    <div class="d-flex justify-content-between">
    </div>
    <a name="" id="" class="btn btn-dark btn-lg" href="<?=$ROOT_URL?>" role="button">TIẾP TỤC MUA HÀNG</a>
    <a name="" id="" class="btn btn-dark btn-lg" href="<?=$ROOT_URL?>?cart&delcart=1" role="button">XÓA GIỎ HÀNG</a>
</div>
<div>
    <h1 class="text-center">THÔNG TIN MUA HÀNG</h1>
    <form action="<?= $ROOT_URL?>?<?php if (isset($_SESSION['user']) && isset($_SESSION['giohang'])) { echo "order"; } else { echo "login"; } ?>" class="row" method="post">
        <div class="form-group col-lg-6">
            <!-- <?php if (isset($_SESSION['user'])) { echo $_SESSION['user']['ho_ten']; } ?> -->
            <label for="">Họ tên</label>
          <input type="text" class="form-control" name="ho_ten" id="" aria-describedby="helpId"  value="<?php if (isset($_SESSION['user'])) { echo $_SESSION['user']['ho_ten']; } ?>"> <br>
          <label for="">Địa chỉ</label>
          <input type="text" class="form-control" name="dia_chi" id="" aria-describedby="helpId" value="<?php if (isset($_SESSION['user'])) { echo $_SESSION['user']['dia_chi']; } ?>"> <br>
          <label for="">Email</label>
          <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" value="<?php if (isset($_SESSION['user'])) { echo $_SESSION['user']['email']; } ?>"> <br>
          <label for="">Số điện thoại</label>
          <input type="text" class="form-control" name="so_dien_thoai" id="" aria-describedby="helpId" value="<?php if (isset($_SESSION['user'])) { echo $_SESSION['user']['so_dien_thoai']; } ?>"> <br>
          <label for="">Ghi chú</label>
            <textarea class="form-control" name="ghi_chu" id="" rows="3"></textarea> <br>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="payments" value="COD" checked>
            <label class="form-check-label" for="radio1">Thanh toán khi nhận hàng</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="payments" value="Momo">
            <label class="form-check-label" for="radio2">Momo</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="payments" value="ATM">
            <label class="form-check-label">Thẻ tín dụng hoặc ghi nợ</label> <br>
        </div>
        <div class="mt-5">
            <button type="submit" name="buy" id="" class="btn lg btn-danger" btn-lg btn-block">ĐẶT HÀNG</button>
            <!-- <a name="" id="" class="btn btn-danger btn-lg" href="<?=$ROOT_URL?>?order" role="button">ĐẶT HÀNG</a> -->
        </div>
    </form>
</div>