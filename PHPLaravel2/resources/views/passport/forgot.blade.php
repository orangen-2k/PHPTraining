
<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}"/>
</header>
<body>
<br/>
<section class="sign-in">
    <div class="container-login">
        <div class="signup-content-login">
            <div class="signup-form-login">
                <h2 class="form-title-login">
                    Đăng ký
                </h2>
                <form method="POST" class="register-form-login" action="" id="register-form-login">
                    <input type="text" name="forgot-user" placeholder="Nhập tài khoản email" />
                    <div class="form-group-login form-button-login">
                        <input type="submit" name="signup" id="signup" class="form-submit-login" (click)="submit(template)" value="Gửi" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure>
                    <img src="../../../../assets/images/sign-up.jpg" alt="sing up image" />
                </figure>
                <a href="/dangnhap" class="signup-image-link-login">Tôi đã là thành viên</a>
            </div>
        </div>
    </div>
</section>


</body>
</html>
