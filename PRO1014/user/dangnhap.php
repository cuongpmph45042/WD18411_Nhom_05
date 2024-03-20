<div class="row d-flex justify-content-center">
    <form action="" method="post" class="col-lg-6">
        <div class="form-group">
          <label for="">Tên đăng nhập</label>
          <input type="text" class="form-control" name="tai_khoan" id="" aria-describedby="helpId" placeholder="">
          <span style='color:red;'><?=$errors['taikhoan'] ?? '' ?></span>
        </div>
        <div class="form-group">
          <label for="">Mật khẩu</label>
          <input type="password"
            class="form-control" name="mat_khau" id="" aria-describedby="helpId" placeholder="">
            <span style='color:red;'><?=$errors['matkhau'] ?? ''?></span>
        </div> <br>
        <button type="submit" name="log" id="" class="btn btn-dark" btn-lg btn-block">Đăng nhập</button>
        <a name="" id="" class="btn btn-dark" href="<?=$ROOT_URL?>?create_user" role="button">Đăng ký</a>
    </form>
</div>