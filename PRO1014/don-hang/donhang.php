<div class="row d-flex justify-content-center">
    <h1 class="text-center">ĐẶT HÀNG THÀNH CÔNG</h1>
    <div class="col-lg-6">
        <div class="bill-group">
            <?php var_dump($_SESSION['giohang']); ?>
            <p>MÃ ĐƠN HÀNG: <?= $_SESSION['giohang'][0][1]?></p>
        </div>
        <div class="bill-group">
            <p>NGÀY:</p>
        </div>
        <div class="bill-group">
            <p>SỐ ĐIỆN THOẠI:</p>
        </div>
        <div class="bill-group">
            <p>ĐỊA CHỈ NHẬN HÀNG:</p>
        </div>
        <div class="bill-group">
            <p>PHƯƠNG THỨC THANH TOÁN:</p>
        </div>
        <div class="bill-group">
            <p>TỔNG TIỀN:</p>
        </div>
        <div class="bill-group">
            <p>LƯU Ý:</p>
        </div>
        <a name="" id="" class="btn btn-dark" href="<?=$ROOT_URL?>" role="button">TIẾP TỤC MUA SẮM</a>
        <a name="" id="" class="btn btn-dark" href="<?=$ROOT_URL?>?deltail&id_donhang=" role="button">XEM CHI TIẾT ĐƠN HÀNG</a>
    </div>
</div>