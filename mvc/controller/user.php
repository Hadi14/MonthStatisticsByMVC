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
        $u = strtolower($_POST['uname']);
        $p = $_POST['pass'];
        $record = UserModel::getFirst($u, $p);
        if ($record == null) {
            if (isset($_POST['uname'])) {
                $ar['abc'] = "نام کاربری یا رمز عبور اشتباه وارد شده است.";
                Render::renderlogin('/user/login.php', $ar);
            }
        } else {
            // $msg = "<h4>تبریک شما به سیستم وارد شدید.</h4> <br> <span>برای ورود به صفحه اصلی<a href=" . getBaseUrl() . "page/home> اینجا </a>کلیک کنید</span>";
            $_SESSION['suname'] = $u;
            // $_SESSION['scope'] = $record['scope'];
            $_SESSION['level'] = $record['level'];
            $_SESSION['name'] = $record['name'];
            $_SESSION['family'] = $record['family'];
            $_SESSION['scope'] = $record['scope'];
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
    /****************************************************************************************** */
    public  function insertUsr()
    {
        try {
            $name = $_POST['usr_name'];
            $family = $_POST['usr_family'];
            $user = $_POST['usr_un'];
            $password = $_POST['usr_pass'];
            $level = $_POST['usr_level'];
            $scope = $_POST['usr_scope'];
            UserModel::inserUser($user, $password, $level, $name, $family, $scope);
            header("Location:" . getBaseUrl() . "page/registeruser");
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/sandogh';</script>";
            } else {
                throw $e; // in case it's any other error
            }
        }
    }
    /****************************************************************************************** */
    public  function changePassword()
    {

        $nowpass = $_POST['nowpass'];
        $newpass = $_POST['newpass'];
        $result = UserModel::changepass($nowpass, $newpass);
        if ($result == "NoCorrectNowPassword") {
            $fail = array('result' => 'fail');
            echo json_encode($fail);
        } elseif ($result == "PasswordChanged") {
            $ok = array('result' => 'ok');
            echo json_encode($ok);
        }
    }
    /****************************************************************************************** */
}
