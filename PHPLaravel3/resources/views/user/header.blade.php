
<section class="sign-in">
    <div class="container-login">
        <div class="signin-content-login">
            <div class="signin-image-login">
                <figure>
                    <img src="../../public/image/sign-in.jpg" alt="sing up image" />
                </figure>
                <a routerLink="../register" class="signup-image-link-login">Tạo một tào khoản</a>
            </div>
            <div class="signin-form-login">
                <h2 class="form-title-login">Đăng nhập</h2>
                <form [formGroup]="loginForm" class="register-form-login" id="login-form">
                    <nz-tabset>
                        <nz-tab>
                            <nz-form-item>
                                <nz-form-control nzErrorTip="Vui lòng nhập tài khoản">
                                    <nz-input-group nzSize="large" nzPrefixIcon="user">
                                        <input nz-input formControlName="displayNameOrEmailAddress" placeholder="Tài khoản" id="emailll-login" />
                                    </nz-input-group>
                                </nz-form-control>
                            </nz-form-item>
                            <nz-form-item>
                                <nz-form-control nzErrorTip="Vui lòng nhập mật khẩu">
                                    <nz-input-group nzSize="large" nzPrefixIcon="lock">
                                        <input nz-input type="password" formControlName="password" placeholder="Mật khẩu" id="password" />
                                    </nz-input-group>
                                </nz-form-control>
                            </nz-form-item>
                        </nz-tab>
                    </nz-tabset>
                    <div class="form-group-login">
                        <div class="login-row-login login-form-dow-login">
                            <div class="login-col-login login-router-1-login">
                                <label class="login-check-login login-check-login-focus-login">
                                    <input type="checkbox" /> Ghi nhớ đăng nhập<span></span>
                                </label>
                            </div>
                            <div class="login-col-login login-router-2-login">
                                <a routerLink="../forgot" class="signup-image-link-login">Quên mật khẩu</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-login form-button-login">
                        <input type="submit" name="signin" id="signin" class="form-submit-login" value="Đăng nhập" (click)="submit()"/>
                    </div>
                </form>
                <div class="social-login-login">
                    <span class="social-label-login">Chuyển đến trang chủ</span>
                    <img style="width: 35px;" routerLink="/f-share/subject" src="../../../../favicon.ico" />
                </div>

            </div>
        </div>
    </div>
</section>
