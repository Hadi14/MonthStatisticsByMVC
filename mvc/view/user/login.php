<?
if (isset($_SESSION['suname'])) {
    header("Location:" . getBaseUrl() . 'page/home/');
}
?>
<main class="page-center">
    <article class="sign-up">
        <!-- <h5 style="font-size: 15px;" class="sign-up__title">سامانه آماری کمیته امداد امام خمینی(ره) استان چهارمحال و بختیاری</h5> -->
        <h1 class="sign-up__title">خوش آمدید</h1>
        <p class="sign-up__subtitle">برای ورود نام کاربری و رمز عبور را وارد کن</p>
        <form class="sign-up-form form" action="<?= getBaseUrl() ?>user/login" method="post">
            <div id="faillogin"><?= $abc ?></div>
            <label class="form-label-wrapper">
                <p class="form-label">نام کاربری</p>
                <input name="uname" class="form-input" type="text" placeholder="نام کاربری" required>
            </label>
            <label class="form-label-wrapper">
                <p class="form-label">رمز عبور</p>
                <input name="pass" class="form-input" type="password" placeholder="رمز عبور" required>
            </label>
            <a class="link-info forget-link" href="##" data-bs-toggle="modal" data-bs-target="#forgetmodal">رمز را فراموش کرده اید؟</a>
            <label class="form-checkbox-wrapper">
                <input name="remember-me" class="form-checkbox" type="checkbox">
                <span class="form-checkbox-label mx-1">مرا به خاطر بسپار</span>
            </label>
            <button name="submit" class="form-btn primary-default-btn transparent-btn" type="submit">ورود</button>
        </form>
    </article>
</main>
<div class="modal fade" tabindex="-1" id="forgetmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">فراموشی رمز عبور</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>جهت دریافت رمز عبور با واحد آمار تماس حاصل فرمائید.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>