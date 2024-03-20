    <style>
        .quantity-container {
            display: flex;
            align-items: center;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
        }

        .quantity-btn {
            cursor: pointer;
            margin: 0 5px;
        }
        .size-container {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .size-option {
            width: 50px;
            height: 50px;
            border: 1px solid #ccc;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
        }

        .size-option.selected {
            background-color: #343a40 !important; /* Màu dark */
            color: #fff !important; /* Màu chữ trắng */
        }
        .dark-button {
            background-color: #343a40;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .dark-button:hover {
            background-color: #fff;
            color: #343a40;
            text-decoration: none;
        }

    </style>
        <div class="row">
            <div class="col-lg-8">
                <!-- <div class="w3-content" style="max-width:1200px">
                    <img class="mySlides" src="../public//image/<?=$chitiet['hinh_anh']?>" style="display:none" class="w-50">
                    <img class="mySlides" src="../public//image/<?=$chitiet['hinh_anh']?>" class="w-50">
                    <img class="mySlides" src="../public//image/<?=$chitiet['hinh_anh']?>" style="display:none" class="w-50">

                    <div class="w3-row-padding w3-section">
                        <div class="w3-col s4"> -->
                            <img class="demo w3-opacity w3-hover-opacity-off" src="./public//image/<?=$chitiet['hinh_anh']?>" style="width:50%;cursor:pointer" onclick="currentDiv(1)">
                        <!-- </div>
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="../public//image/<?=$chitiet['hinh_anh']?>" style="width:50%;cursor:pointer" onclick="currentDiv(2)">
                        </div>
                        <div class="w3-col s4">
                            <img class="demo w3-opacity w3-hover-opacity-off" src="../public//image/<?=$chitiet['hinh_anh']?>" style="width:50%;cursor:pointer" onclick="currentDiv(3)">
                        </div>
                    </div>
                </div> -->
            </div>  
            <aside class="col-lg-4">
                <h1><?=$chitiet['ten_sanpham']?></h1>
                <div class="price">
                    <p><b><h2 style="color: red;"><?=number_format($chitiet['gia'],2)?>đ</h2></b></p>
                </div>
                <form action="<?=$ROOT_URL?>?cart&id_sanpham=<?=$chitiet['id_sanpham']?>" method="post">
                    <!-- <div class="form-group">
                        <label>Chọn size:</label>
                        <div class="size-container">
                            <div class="size-option" data-size="36" name="">36</div>
                            <div class="size-option" data-size="37">37</div>
                            <div class="size-option" data-size="38">38</div>
                            <div class="size-option" data-size="39">39</div>
                            <div class="size-option" data-size="40">40</div>
                            <div class="size-option" data-size="41">41</div>
                            <div class="size-option" data-size="42">42</div>
                            <div class="size-option" data-size="43">43</div>
                            
                        </div>
                        <input type="hidden" id="selectedSize" name="selectedSize">
                    </div> -->
                    <div class="form-group">
                        <label for="quantity">Chọn số lượng:</label>
                        <div class="quantity-container">
                            <button type="button" class="btn btn-dark quantity-btn" id="decrease">-</button>
                            <input type="text" id="quantity" name="soluong" class="form-control quantity-input" value="1">
                            <button type="button" class="btn btn-dark quantity-btn" id="increase">+</button>
                        </div>
                    </div> <br>
                    <button type="submit" name="add_back" id="" class="btn btn-dark btn-lg btn-block">Thêm vào giỏ hàng</button>
                    <button type="submit" name="add_cart" id="" class="btn btn-dark btn-lg btn-block">Mua ngay</button>
                </form>
                <iframe id="hidden-frame" name="hidden-form" style="display: none;"></iframe>
            
            </aside>
        </div>
        <main>
            <div class="d-flex justify-content-center">
            <h1>Mô tả sản phẩm</h1>
            </div>
            <div>
                <h4>Tên sản phẩm: <?=$chitiet['ten_sanpham']?></h4>
                <h4>Giá: <?=$chitiet['gia']?></h4>
                <h5>Kích cỡ: <?=$chitiet['kich_co']?></h5>
                <h5>Màu sắc: <?=$chitiet['mau_sac']?></h5>
                <h5>Thương hiệu: <?=$chitiet['ten_danhmuc']?></h5>
                <h5><?=$chitiet['mo_ta']?></h5>
                
            </div>
            <?php require "./binh-luan/binhluan.php" ?>
        </main>
    <script>
        function currentDiv(n) {
        showDivs(slideIndex = n);
        }

        function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
        }
        document.addEventListener("DOMContentLoaded", function() {
            const decreaseBtn = document.getElementById("decrease");
            const increaseBtn = document.getElementById("increase");
            const quantityInput = document.getElementById("quantity");

            decreaseBtn.addEventListener("click", function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            increaseBtn.addEventListener("click", function() {
                let currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            const sizeOptions = document.querySelectorAll(".size-option");

            sizeOptions.forEach(function(option) {
                option.addEventListener("click", function() {
                    sizeOptions.forEach(function(opt) {
                        opt.classList.remove("selected");
                    });
                    this.classList.add("selected");
                    document.getElementById("selectedSize").value = this.dataset.size;
                });
            });
        });
    </script>
