<div class="panel panel-default ">
    <div class="panel-heading alert bg-light">THƯƠNG HIỆU</div>
    <div class="list-group">
        <?php foreach ($danhmuc as $dm) { ?>
        <div class="list-group">
            <a name="" id="" class="btn " href="<?=$ROOT_URL?>?id_danhmuc=<?=$dm['id_danhmuc']?>&danh_muc" role="button"><?= $dm['ten_danhmuc']?></a>       
        </div>
        <?php }?>
    </div>
</div>
