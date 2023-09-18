<? class SandoghModel
{
    static  function insertSandogh($snum, $smny, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into sandogh (,Year,Month,user) 
        values  ($snum,$smny'$year','$month','$user')");
    }
    /*********************************************************************/
    static  function recentDowryMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from dowry order by D_Year desc, D_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*********************************************************************/
}
