<div class="row d-flex justify-content-center">
    <form action="" method="post" class="col-lg-6">
        <h1>Thông tin tài khoản</h1>
        <div class="form-group">
          <label for="">Tên đăng nhập</label>
          <input type="text" class="form-control" name="ten_dangnhap" id="" aria-describedby="helpId" disabled value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['user']['ten_dangnhap']; }?>">
        </div>
        <div class="form-group">
          <label for="">Họ tên</label>
          <input type="text"
            class="form-control" name="ho_ten" id="" aria-describedby="helpId" placeholder="" value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['user']['ho_ten']; }?>">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['user']['email']; }?>">
        </div>
        <div class="form-group">
          <label for="">Số điện thoại</label>
          <input type="text" class="form-control" name="sdt" id="" aria-describedby="helpId" placeholder="" value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['user']['so_dien_thoai']; }?>">
        </div>
        <div class="form-group">
          <label for="">Địa chỉ</label>
          <input type="text" class="form-control" name="dia_chi" id="" aria-describedby="helpId" placeholder="" value="<?php if (isset($_SESSION['user'])){ echo $_SESSION['user']['dia_chi']; }?>">
        </div> <br>
        <button type="submit" name="update" id="" class="btn btn-dark" btn-lg btn-block">Cập nhật</button>
        <button type="submit" name="logout" id="" class="btn btn-dark" btn-lg btn-block">Đăng xuất</button>
    </form>
</div>