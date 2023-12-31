<? class SandoghModel
{
    static  function insertSandogh($mrgnum, $mrgmonry, $snum, $smny, $year, $month, $user)
    {
        $db = Db::getInstance();
        $date = date("Y-m-d H:i:s");
        $db->insert("insert into sandogh (S_mrgNum,S_mrgMoney,S_numLeon,S_moneyLeon,S_Year,S_Month,S_user,datetime) values  ($mrgnum, $mrgmonry,$snum,$smny,'$year','$month','$user','$date')");
    }
    /*********************************************************************/
    static  function recentSandoghMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from sandogh order by S_Year desc, S_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*********************************************************************/
    static  function getAllSandogh($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from sandogh where S_Year='$year' and S_user='$un' order by S_Year desc, S_Month desc";
        $sql = "select * from sandogh where S_Year='$year' order by S_Year desc, S_Month desc";
        $record = $db->query($sql);
        return $record;
    }

    /*****************************************************************/
    static  function getSandoghGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select * from sandogh where S_Year='$year' and S_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select * from sandogh where S_Year='$year' and S_Month='$month' and S_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function updateSandogh($Goal, $goalf, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        if ($Goal == 0) {
            $retVal = 'S_mrgNum';
        } else if ($Goal == 1) {
            $retVal = 'S_mrgMoney';
        } else if ($Goal == 2) {
            $retVal = 'S_numLeon';
        } else if ($Goal == 3) {
            $retVal = 'S_moneyLeon';
        }
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update sandogh set $retVal=$goalf where S_Year= '$y' and S_Month= '$m' "; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        else
            $sql = "update sandogh set $retVal=$goalf where S_Year= '$y' and S_Month= '$m' and S_user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
