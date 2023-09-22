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
        if ($record == null) {
            if (isset($_POST['uname'])) {
                $ar['abc'] = "نام کاربری یا رمز عبور اشتباه وارد شده است.";
                Render::renderlogin('/user/login.php', $ar);
            }
        } else {
            $msg = "<h4>تبریک شما به سیستم وارد شدید.</h4> <br> <span>برای ورود به صفحه اصلی<a href=" . getBaseUrl() . "page/home> اینجا </a>کلیک کنید</span>";
            $_SESSION['suname'] = $u;
            header("Location:" . getBaseUrl() . 'page/home/');
        }
    }
    /*-----------------------------*/
    private function LoginForm()
    {
        $ar['abc'] = "";
        Render::renderlogin('/user/login.php', $ar);
    }
    // *****************************************************
    function logoute()
    {
        session_destroy();
        header("Location:" . getBaseUrl() . "user/login/");
    }
    // *****************************************************
    function getAllUsers()
    {

        $recs = UserModel::getAllUsers();
        echo json_encode($recs);
    }
    /************************************************ */
    public  function getUsrGoalField()
    {
        $user = $_POST['ukey'];
        $goal = UserModel::getUserGoal($user);
        echo json_encode($goal);
    }
    /******************************************************** */
    public  function EditUserRecord()
    {
        $name = $_POST['nam'];
        $family = $_POST['fam'];
        $un = $_POST['un'];
        $pass = $_POST['pass'];
        $level = $_POST['level'];
        $scope = $_POST['scope'];
        $rowAffect = UserModel::EditUser($name, $family, $un, $pass, $level, $scope);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
}
