<? class SandoghController
{
    public  function insertsandogh($param)
    {
        try {
            $row = StatisticsModel::getinsertstatus();
            if ($row['status'] == '0') {
                echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/sandogh';</script>";
            } else {
                $snum = $_POST['s_num'];
                $smoney = $_POST['s_mny'];
                $mrgnum = $_POST['s_Mrgnum'];
                $mrgmonry = $_POST['s_MrgMonry'];
                $year = $param[0];
                $month = $param[1];
                $user = $_SESSION['suname'];
                SandoghModel::insertSandogh($mrgnum, $mrgmonry, $snum, $smoney, $year, $month, $user);
                header("Location:" . getBaseUrl() . "page/sandogh");
            }
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/sandogh';</script>";
            } else {
                throw $e; // in case it's any other error
            }
        }
    }
    /****************************************************************************************** */
    public  function getrecentsandoghmonth()
    {
        $recentMonth = SandoghModel::recentSandoghMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getAllSndgh()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = SandoghModel::getAllSandogh($year, $u);
        echo json_encode($recs);
    }

    /************************************************ */
    public  function getSndghGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = SandoghModel::getSandoghGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /******************************************************** */
    public  function updateSndgh($param)
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $goalf = $_POST['goalf'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = SandoghModel::updateSandogh($param[0], $goalf, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
}
