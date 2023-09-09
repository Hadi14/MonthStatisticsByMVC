<? class UserController
{
    /************************  Login  ******************************* */
    function login()
    {
        if (isset($_POST['uname'])) {

            $this->LoginCheck();
        } else {
            $this->LoginForm();
        }
    }
    /*-----------------------------*/
    private function LoginCheck()
    {

        $u = $_POST['uname'];
        $p = $_POST['pass'];


        //    $record = UserModel::getFirst($u, $p);
        $record = array();

        if ($record == null) {

            $msg = "<h4>نام کاربری یا رمز اشتباه وارد شده است.</h4> <br> <span>برای ورود مجدد <a href='" . getBaseUrl() . "user/login'> اینجا </a>کلیک کنید</span>";
            showmsg("fail", $msg, true);
        } else {
            $msg = "<h4>تبریک شما به سیستم وارد شدید.</h4> <br> <span>برای ورود به صفحه اصلی<a href=" . getBaseUrl() . "page/home> اینجا </a>کلیک کنید</span>";

            showmsg("success", $msg, false);
            $_SESSION['uname'] = $u;
        }
    }
    /*-----------------------------*/
    private function LoginForm()
    {
        // echo "Login Form";
        // $content = "HelloWord";
        //    echo "Loginform";
        $ar['abc'] = "Loginform-Parameter";
        Render::render('/user/login.php', $ar);
    }
}
