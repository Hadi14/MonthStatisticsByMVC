<? class MaskanModel
{
    static  function insertMaskan($fix, $wc, $buyc, $buyr, $crtc, $crtr, $tbm, $tsep, $tbmaskan, $sum, $year, $month, $user)
    {
        $db = Db::getInstance();
        $date = date("Y-m-d H:i:s");
        $db->insert("insert into maskan (M_fix,M_wcGas,M_Bmc,M_Bmr,M_Cmc,M_Cmr,M_Tbm,M_TSep,M_Tbmskn,M_sum,M_Year,M_Month,M_user,datetime) values  ($fix ,$wc ,$buyc ,$buyr ,$crtc ,$crtr ,$tbm ,$tsep,$tbmaskan ,$sum ,'$year','$month','$user','$date')");
    }
    /*********************************************************************/
    static  function recentmsknMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from maskan order by M_Year desc, M_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*********************************************************************/
    static  function getAllMaskan($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from maskan where M_Year='$year' and M_user='$un' order by M_Year desc, M_Month desc";
        $sql = "select * from maskan where M_Year='$year' order by M_Year desc, M_Month desc";
        $record = $db->query($sql);
        return $record;
    }
    /*****************************************************************/
    static  function getMaskanGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select * from maskan where M_Year='$year' and M_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select * from maskan where M_Year='$year' and M_Month='$month' and M_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
    /*****************************************************************/
    static function updateMaskan($Goal, $goalf, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $ar = array("M_fix", "M_wcGas", "M_Bmc", "M_Bmr", "M_Cmc", "M_Cmr", "M_Tbm", "M_TSep", "M_Tbmskn", "M_sum");
        $level = $db->query("select level from users where user='$un'");
        // echo $Goal;
        // echo "<br>";
        // echo $goalf;
        // echo "<br>";
        // echo $ar[$Goal];
        // echo "<br>";
        // echo $goalf;
        // exit;
        if ($level[0]['level'] == "0")
            $sql = "update maskan set $ar[$Goal]=$goalf where M_Year= '$y' and M_Month= '$m'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        else
            $sql = "update maskan set $ar[$Goal]=$goalf where M_Year= '$y' and M_Month= '$m' and M_user='$un'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
