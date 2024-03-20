<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?=$ROOT_URL?>"><img src="<?=$ROOT_URL?>/public/image/rounded-in-photoretrica.png" class="w-25" alt=""></a>
        <div class="collapse navbar-collapse" id="mynavbar">
          <form action="" method="post" class="d-flex">
            <input type="text" placeholder="Tìm kiếm" name="search" class="form-control me-2">
            <button type="submit" class="btn btn-light" name="btn_search">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
              </svg>
            </button>
          </form>
        </div>
        <div class="collapse navbar-collapse">
          <a name="" id="" class="btn btn-light rounded-5 ms-4" href="<?=$ROOT_URL?>?<?php if (isset($_SESSION['user'])){ echo "information"; } else { echo "login"; } ?>" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg> <br>
              <span><?php if (isset($_SESSION['user'])){
                echo $_SESSION['user']['ten_dangnhap'];
              } else {
                echo "Đăng nhập";
              } ?></span>
          </a>
          <a name="" id="" class="btn btn-light rounded-5 ms-3" href="<?=$ROOT_URL?>?cart" role="button"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
              <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
            </svg><br>
            <span>Giỏ hàng</span>
          </a>
        </div>
      </div>
    </nav>
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav mr-auto">
            <li class="">
                <a class="nav-link" href="<?=$ROOT_URL?>">TRANG CHỦ</a>
            </li>
            <li class="">
                <a class="nav-link" href="#">BÁN CHẠY</a>
            </li>
            <li class="">
                <a class="nav-link" href="#">GIỚI THIỆU</a>
            </li>
            <li class="">
                <a class="nav-link" href="#">LIÊN HỆ</a>
            </li>
            <li class="">
                <a class="nav-link" href="#">HỎI ĐÁP</a>
            </li>
        </ul>
    </div>
</nav>
