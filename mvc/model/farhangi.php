<? class FarhangiModel
{
    static  function insertFarhangi($stu, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into farhangi (F_numStu,F_Year,F_Month,F_user) 
        values  ($stu,'$year','$month','$user')");
    }
    /*********************************************************************/
    static  function recentFarhangiMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from farhangi order by F_Year desc, F_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*********************************************************************/
    static  function getAllFarhangi($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from farhangi where F_Year='$year' and F_user='$un' order by F_Year desc, F_Month desc";
        $sql = "select * from farhangi where F_Year='$year' order by F_Year desc, F_Month desc";
        $record = $db->query($sql);
        return $record;
    }

    /*****************************************************************/
    static  function getFarhangiGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from farhangi where F_Year='$year' and F_Month='$month' and F_user='$un'";
        $sql = "select * from farhangi where F_Year='$year' and F_Month='$month' ";
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function updateFarhangi($stu, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];

        $sql = "update farhangi set F_numStu=$stu where F_Year= '$y' and F_Month= '$m' and F_user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
