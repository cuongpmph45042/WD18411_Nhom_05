<div class="d-flex justify-content-center">
    <!-- <h1>GIẢM GIÁ</h1> -->
</div>
<div class="row">
    <?php foreach($san_pham as $sp) {?>
    <section class="col-lg-3 col-md-4 col-xs-12 box-sp">
        <a name="" id="" class="btn d-flex text-align-center" href="<?=$ROOT_URL?>?chi-tiet&id_sanpham=<?=$sp['id_sanpham']?>" role="button">
            <img src="./public/image/<?=$sp['hinh_anh']?>" class="w-100" alt="">
        </a>
        <a href="<?=$ROOT_URL?>?chi-tiet&id_sanpham=<?=$sp['id_sanpham']?>" style="text-decoration: none;">
            <div class="box_name d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <div style="color: #000000;"><?=$sp['ten_sanpham']?></div>
                    <div><b style="color: #b64a37;"><?=number_format($sp['gia'],2)?><u>đ</u></b></div>
                </div>
            </div>
        </a>
    </section>
    <?php } ?>
</div>