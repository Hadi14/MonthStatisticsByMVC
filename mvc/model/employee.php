<? class EmployeeModel
{
    static  function insertEmployee($Em_official, $Em_company, $Em_sum, $year, $month, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $db->insert("insert into employee (Em_official, Em_company, Em_sum, Em_Year, Em_Month, Em_user) values($Em_official, $Em_company,$Em_sum,'$year','$month','$un')");
    }
    /*****************************************************************/
    static  function recentEmployeeMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from employee order by Em_Year desc, Em_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*********************************************************************/
    static  function getallEmployee($year, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from employee where Em_Year='$year' and Em_user='$un' order by Em_Year desc, Em_Month desc";
        $record = $db->query($sql);
        return $record;
    }
}
