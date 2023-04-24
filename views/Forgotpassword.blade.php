@extends("Template.templates")




@section('quenmatkhau')
<style>
    body {
        margin-top: 50px;
    }
    /* Logo */
    .img {
        text-align: center;
    }
    /* Chỉnh các input */
    .nhap {
    width: 500px;
    height: 50px;
    border-radius: 8px;
    border: 1px solid rgb(202, 202, 202);
    padding-left: 10px;
    }
    /* Chỉnh màu ký tự quenmk */
    .quenmk a {
        text-decoration: none;
        color: #ff0000;
    }
    /* Nút button */
    .button {
        width: 140px;
        height: 37px;
        color: #ffffff;
        background-color: orangered;
        border: none;
        border-radius: 6px;
    }
    .button:hover {
        background-color: rgb(201, 54, 1);
    }
    /* Nút button hủy */
    .button_huy {
        width: 140px;
        height: 37px;
        background-color: #f7f7f7;
        border: 1px solid orangered;
        color: orangered; 
        border-radius: 6px;
    }
    .button_huy:hover {
        background-color: #f7f7f7;
        border: 1px solid rgb(201, 54, 1);
        color:rgb(201, 54, 1);
    }
</style>
<body>
    <div class="container">
        <div class="row">

            <!-- Phần hiển thị đăng nhập -->
            <div class="col-lg-6" style="background-color: #f7f7f7; padding: 50px;">
                <div style="text-align: center;">
                    <p class="img"><img src="./resources/views/Imgs/Logo.jpg" width="30%" height="30%" alt=""></p>
                    <h5 style="font-size: larger; font-weight: 600;">Đặt lại mật khẩu</h5>
                    <!-- Input mật khẩu -->
                    <p><span style="font-size: larger;">Vui lòng nhập email để đặt lại mật khẩu của bạn *</span>
                    <input type="password" class="nhap" name="matkhau"></p>
                    <!-- Nút button đăng nhập -->
                    <p style="text-align: center;"><a href="dangnhap.html"><button type="submit" class="button_huy">Hủy</button></a>
                        <a href="matkhaumoi"><button type="submit" class="button">Tiếp tục</button></a></p>
                </div>
            </div>
            
            <!-- Phần hiển thị background -->
            <div class="col-lg-6">
                <img src="./resources/views/Imgs/Background_quenmatkhau.jpg"  width="100%" height="100%" alt="">
            </div>

        </div>
    </div>
</body>
