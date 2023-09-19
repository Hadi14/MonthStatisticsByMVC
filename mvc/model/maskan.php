<? class MaskanModel
{
    static  function insertMaskan($fix, $wc, $buyc, $buyr, $crtc, $crtr, $tbm, $tsep, $sum, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into maskan (M_fix,M_wcGas,M_Bmc,M_Bmr,M_Cmc,M_Cmr,M_Tbm,M_TSep,M_sum,M_Year,M_Month,M_user) values  ($fix ,$wc ,$buyc ,$buyr ,$crtc ,$crtr ,$tbm ,$tsep ,$sum ,'$year','$month','$user')");
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
        $sql = "select * from maskan where M_Year='$year' and M_user='$un' order by M_Year desc, M_Month desc";
        $record = $db->query($sql);
        return $record;
    }
    /*****************************************************************/
    static  function getMaskanGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from maskan where M_Year='$year' and M_Month='$month' and M_user='$un'";
        $g = $db->query($sql);
        return $g;
    }
    /*****************************************************************/
    static function updateMaskan($Goal, $goalf, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $ar = array("M_fix", "M_wcGas", "M_Bmc", "M_Bmr", "M_Cmc", "M_Cmr", "M_Tbm", "M_TSep", "M_sum");
        $sql = "update maskan set $ar[$Goal]=$goalf where M_Year= '$y' and M_Month= '$m' and M_user='$un'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
