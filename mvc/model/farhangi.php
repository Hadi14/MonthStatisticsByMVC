<? class FarhangiModel
{

    static  function insertFarhangi($stu, $year, $month, $user)
    {
        $db = Db::getInstance();
        $date = date("Y-m-d H:i:s");
        $db->insert("insert into farhangi (F_numStu,F_Year,F_Month,F_user,datetime) values  ($stu,'$year','$month','$user','$date')");
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
        $sql = "select * from farhangi where F_Year='$year' order by F_Year desc, F_Month desc"; //این خط برای اینه که کاربر هم حوزه ای بتونه اطلاعاتی که همکار خودش ثبت کرده رو ببینه
        $record = $db->query($sql);
        return $record;
    }

    /*****************************************************************/
    static  function getFarhangiGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select * from farhangi where F_Year='$year' and F_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select * from farhangi where F_Year='$year' and F_Month='$month' and F_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function updateFarhangi($stu, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update farhangi set F_numStu=$stu where F_Year= '$y' and F_Month= '$m' ";
        else
            $sql = "update farhangi set F_numStu=$stu where F_Year= '$y' and F_Month= '$m' and F_user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
