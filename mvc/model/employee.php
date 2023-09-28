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
        // $sql = "select * from employee where Em_Year='$year' and Em_user='$un' order by Em_Year desc, Em_Month desc";
        $sql = "select * from employee where Em_Year='$year' order by Em_Year desc, Em_Month desc";
        $record = $db->query($sql);
        return $record;
    }
    /*****************************************************************/
    static  function getEmployeeGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select * from employee where Em_Year='$year' and Em_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select * from employee where Em_Year='$year' and Em_Month='$month' and Em_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function updateEmployee($offic, $comp, $sum, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update employee set Em_official=$offic,Em_company=$comp ,Em_sum=$sum where Em_Year= '$y' and Em_Month= '$m' ";
        else
            $sql = "update employee set Em_official=$offic,Em_company=$comp ,Em_sum=$sum where Em_Year= '$y' and Em_Month= '$m' and Em_user='$un'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
