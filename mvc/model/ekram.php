<? class EkramModel
{
    /*****************************************************************/
    static  function recentEkramMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from ekram order by E_Year desc, E_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*********************************************************************/
    static  function insertEkram($E_orphan, $E_supports, $year, $month, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $date = date("Y-m-d H:i:s");
        $db->insert("insert into ekram (E_orphan, E_supports, E_Year, E_Month, E_user,datetime) values($E_orphan, $E_supports,'$year','$month','$un','$date')");
    }
    /*********************************************************************/
    static  function getallEkram($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from ekram where E_Year='$year' and E_user='$un' order by E_Year desc, E_Month desc";
        $sql = "select * from ekram where E_Year='$year' order by E_Year desc, E_Month desc";
        $record = $db->query($sql);
        return $record;
    }
    /*****************************************************************/
    static  function getEkramGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select * from ekram where E_Year='$year' and E_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select * from ekram where E_Year='$year' and E_Month='$month' and E_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function updateEkram($Goal, $value, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        if ($Goal == 0) {
            $retVal = 'E_orphan';
        } else  if ($Goal == 1) {
            $retVal = 'E_supports';
        }
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update ekram set $retVal=$value where E_Year= '$y' and E_Month= '$m' ";
        else
            $sql = "update ekram set $retVal=$value where E_Year= '$y' and E_Month= '$m' and E_user='$un'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
