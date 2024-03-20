<div class="row d-flex justify-content-center">
    <form action="" method="post" class="col-lg-6">
        <div class="form-group">
          <label for="">Tên đăng nhập</label>
          <input type="text" class="form-control" name="ten_dangnhap" id="" aria-describedby="helpId" placeholder="" value="<?=$ten_dangnhap?>">
        </div>
        <div class="form-group">
          <label for="">Mật khẩu</label>
          <input type="password" class="form-control" name="mat_khau" id="" aria-describedby="helpId" placeholder="" value="<?=$mat_khau?>">
        </div>
        <div class="form-group">
          <label for="">Nhập lại mật khẩu</label>
          <input type="password" class="form-control" name="re_mat_khau" id="" aria-describedby="helpId" placeholder="">
          <?php echo "<span style='color:red;'>$errors</span>"; ?>
        </div>
        <div class="form-group">
          <label for="">Họ tên</label>
          <input type="text"
            class="form-control" name="ho_ten" id="" aria-describedby="helpId" placeholder="" value="<?=$ho_ten?>">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="<?=$email?>">
        </div>
        <div class="form-group">
          <label for="">Số điện thoại</label>
          <input type="text" class="form-control" name="sdt" id="" aria-describedby="helpId" placeholder="" value="<?=$so_dien_thoai?>">
        </div>
        <div class="form-group">
          <label for="">Địa chỉ</label>
          <input type="text" class="form-control" name="dia_chi" id="" aria-describedby="helpId" placeholder="" value="<?=$dia_chi?>">
        </div> <br>
        <button type="submit" name="create" id="" class="btn btn-dark" btn-lg btn-block">Đăng ký</button>
    </form>
</div>