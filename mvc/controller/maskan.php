<? class MaskanController
{
    public  function insertMskn($param)
    {
        $row = StatisticsModel::getinsertstatus();
        if ($row['status'] == '0') {
            echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/maskan';</script>";
        } else {
            try {
                $fix = $_POST['fix'];
                $wc = $_POST['wc'];
                $buyc = $_POST['buyc'];
                $buyr = $_POST['buyr'];
                $crtc = $_POST['crtc'];
                $crtr = $_POST['crtr'];
                $tbm = $_POST['tbm'];
                $tsep = $_POST['tsep'];
                $sum =  $_POST['sum'];
                $year = $param[0];
                $month = $param[1];
                $user = $_SESSION['suname'];
                MaskanModel::insertMaskan($fix, $wc, $buyc, $buyr, $crtc, $crtr, $tbm, $tsep, $sum, $year, $month, $user);
                header("Location:" . getBaseUrl() . "page/maskan");
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/sandogh';</script>";
                } else {
                    throw $e; // in case it's any other error
                }
            }
        }
    }
    /****************************************************************************************** */
    public  function getrecentmonth()
    {
        $recentMonth = MaskanModel::recentmsknMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getAllmskn()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = MaskanModel::getAllMaskan($year, $u);
        echo json_encode($recs);
    }
    /************************************************ */
    public  function getmsknGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = MaskanModel::getMaskanGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /******************************************************** */
    public  function updateMskn($param)
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $goalf = $_POST['goalf'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = MaskanModel::updateMaskan($param[0], $goalf, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
}
