<div class="alert bg-light">BÌNH LUẬN</div> <br>
    <div>
      <!-- <?php
      foreach ($binh_luan_list as $bl) {
        extract($bl);
        echo "<div class='d-flex justify-content-between mb-3'>";
        echo "<div class='mr-auto'>".$noi_dung."</div>";
        echo "<div>".$ma_kh.",</div>";
        echo "<div>".$ngay_bl."</div>";
        echo "</div>";
      }
      ?> -->
    </div> <br>
    <?php 
if (isset($_SESSION['user'])) {
  ?>
    <form action="" method="post">
    <div class="alert bg-light">
        <div class="form-group">
          <textarea class="form-control" name="noi_dung" id="" rows="3"></textarea>
        </div> <br>
        <button class="btn btn-dark" type="submit" name="btn_bl">Gửi</button>
    </div>
</form>
<?php
} else {
  echo "<div class='alert bg-light'>
  <h5>Đăng nhập để bình luận</h5>
</div>";
}
?>