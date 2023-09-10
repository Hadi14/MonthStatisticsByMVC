<? class UserController
{
    /************************  Login  ******************************* */
    function login()
    {
        if (isset($_POST['uname'])) {
            // echo "+++++" . $_POST['uname'];
            $this->LoginCheck();
        } else {
            $this->LoginForm();
            // echo "vvvvvvv";
        }
    }
    /*-----------------------------*/
    private function LoginCheck()
    {

        $u = $_POST['uname'];
        $p = $_POST['pass'];
        $record = UserModel::getFirst($u, $p);
        // echo "UUUUUUU";
        // dump($record);
        // $record = array();
        if ($record == null) {
            if (isset($_POST['uname'])) {
                $ar['abc'] = "نام کاربری یا رمز عبور اشتباه وارد شده است.";
                Render::renderlogin('/user/login.php', $ar);
            }
        } else {
            $msg = "<h4>تبریک شما به سیستم وارد شدید.</h4> <br> <span>برای ورود به صفحه اصلی<a href=" . getBaseUrl() . "page/home> اینجا </a>کلیک کنید</span>";

            // $ar['abc'] ="";
            Render::render('/statistic/home.php');
        }
    }
    /*-----------------------------*/
    private function LoginForm()
    {
        // echo "Login Form";
        // $content = "HelloWord";
        //    echo "Loginform";
        // $ar['abc'] = "Loginform-Parameter";
        $ar['abc'] = "";
        Render::renderlogin('/user/login.php', $ar);
    }
}
