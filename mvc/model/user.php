<? class UserModel
{
    static function getFirst($u, $p)
    {
        $db = Db::getInstance();
        $p = md5($p);
        $sql = "select * from users where user='$u' and password='$p'";
        $records = $db->first($sql);
        return $records;
    }
    /*********************************************************************/
    static  function getAllUsers()
    {
        $db = Db::getInstance();
        $sql = "select * from users ";
        $record = $db->query($sql);
        return $record;
    }
    /*****************************************************************/
    static  function getUserGoal($user)
    {
        $db = Db::getInstance();
        $sql = "select * from users where user='$user'";
        $g = $db->query($sql);
        return $g;
    }
    /*****************************************************************/
    static  function getUserLevel($user)
    {
        $db = Db::getInstance();
        $sql = "select level from users where user='$user'";
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function EditUser($name, $family, $un, $pass, $level, $scope)
    {
        $db = Db::getInstance();
        $pass = md5($pass);
        $sql = "update users set password='$pass',level='$level',name='$name',family='$family',scope='$scope'  where user='$un'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /*********************************************************************/
    static  function inserUser($user, $password, $level, $name, $family, $scope)
    {
        $db = Db::getInstance();
        $password = md5($password);
        $db->insert("insert into users (user, password, level, name, family, scope) values('$user', '$password','$level','$name','$family','$scope')");
    }

    /*********************************************************************/
    static  function changepass($now, $new)
    {
        $db = Db::getInstance();
        $user = $_SESSION['suname'];
        $sql =   $sql = "select password from users where user='$user'";
        $g = $db->query($sql);
        if ($g[0]['password'] != $now) {
            return "NoCorrectNowPassword";
        } else if ($g[0]['password'] == $now) {
            $sql = "update users set password='$new' where user='$user'";
            $db->modify($sql);
            return "PasswordChanged";
        }
    }
}
