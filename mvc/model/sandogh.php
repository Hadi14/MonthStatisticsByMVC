<? class SandoghModel
{
    static  function insertSandogh($mrgnum, $mrgmonry, $snum, $smny, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into sandogh (S_mrgNum,S_mrgMoney,S_numLeon,S_moneyLeon,S_Year,S_Month,S_user) values  ($mrgnum, $mrgmonry,$snum,$smny,'$year','$month','$user')");
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
        $sql = "select * from sandogh where S_Year='$year' and S_user='$un' order by S_Year desc, S_Month desc";
        $record = $db->query($sql);
        return $record;
    }

    /*****************************************************************/
    static  function getSandoghGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from sandogh where S_Year='$year' and S_Month='$month' and S_user='$un'";
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function updateSandogh($Goal, $goalf, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        if ($Goal == 0) {
            $retVal = 'S_numLeon';
        } else {
            $retVal = 'S_moneyLeon';
        }
        $sql = "update sandogh set $retVal=$goalf where S_Year= '$y' and S_Month= '$m' and S_user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
