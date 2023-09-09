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
           // require('main.php');
           // $db = Db::getInstance();
           $u = $_POST['uname'];
           $p = $_POST['pass'];
   
           // $sql = "select * from users where username='$u' and password='$p'";
           // echo "<hr> $u <br> $p <hr>";
           $record = UserModel::getFirst($u, $p);
           // dump($record);
           // $record = $db->query($sql);
           if ($record == null) {
               // header("Location: fail.php");
               $msg = "<h4>نام کاربری یا رمز اشتباه وارد شده است.</h4> <br> <span>برای ورود مجدد <a href='" . getBaseUrl() . "user/login'> اینجا </a>کلیک کنید</span>";
               showmsg("fail", $msg, true);
           } else {
               $msg = "<h4>تبریک شما به سیستم وارد شدید.</h4> <br> <span>برای ورود به صفحه اصلی<a href=" . getBaseUrl() . "page/home> اینجا </a>کلیک کنید</span>";
               // require_once('success.php');
               showmsg("success", $msg, false);
               $_SESSION['uname'] = $u;
           }
       }
       /*-----------------------------*/
       private function LoginForm()
       {
           // echo "Login Form";
           // $content = "HelloWord";
           echo "Loginform";
           $ar['abc'] = "Loginform-Parameter";
           Render::render('user/login.php', $ar);
       }
}
