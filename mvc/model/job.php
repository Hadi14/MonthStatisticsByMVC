<? class JobModel
{
    static  function insertJob($jds, $jdl, $jdsum, $nj, $jsum, $jmoney, $flearn, $supervi, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into job (J_djSrch, J_djLeon, J_djSum, J_ndj, J_sum, J_leonMny, J_faniLearn, J_Supervision, J_Year, J_Month, J_user) values  ($jds, $jdl, $jdsum, $nj, $jsum, $jmoney, $flearn, $supervi, '$year','$month','$user')");
    }
    /*********************************************************************/
    static  function recentJobMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from job order by J_Year desc, J_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*********************************************************************/
    static  function getAllJob($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from job where J_Year='$year' and J_user='$un' order by J_Year desc, J_Month desc";
        $sql = "select * from job where J_Year='$year' order by J_Year desc, J_Month desc";
        $record = $db->query($sql);
        return $record;
    }
    /*****************************************************************/
    static  function getJOBGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select * from job where J_Year='$year' and J_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select * from job where J_Year='$year' and J_Month='$month' and J_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
    /*********************************************************************/
    static  function updateJob($djsrch, $djleon, $djsum, $ndj,  $sum, $year, $month, $user)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $sql = "update job set J_djSrch=$djsrch , J_djLeon=$djleon , J_djSum=$djsum , J_ndj=$ndj , J_sum=$sum  where J_Year= '$year' and J_Month= '$month' and J_user='$user'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateOtherFeildJob($gfield, $value, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        if ($gfield == 5) {
            $goalF = 'J_leonMny';
        } else if ($gfield == 6) {
            $goalF = 'J_faniLearn';
        } else if ($gfield == 7) {
            $goalF = 'J_Supervision';
        }
        $sql = "update job set $goalF=$value where J_Year= '$y' and J_Month= '$m' and J_user='$un'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
