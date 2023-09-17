<? class SandoghModel
{
    static  function insertSandogh($snum,$smny, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into sandogh (,Year,Month,user) 
        values  ($snum,$smny'$year','$month','$user')");
    }
    /*********************************************************************/
}