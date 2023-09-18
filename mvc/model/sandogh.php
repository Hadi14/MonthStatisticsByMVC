<? class SandoghModel
{
    static  function insertSandogh($snum, $smny, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into sandogh (,Year,Month,user) 
        values  ($snum,$smny'$year','$month','$user')");
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
}
