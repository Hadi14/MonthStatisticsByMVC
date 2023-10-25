<? class JobController
{
    public  function insertjob($param)
    {
        $row = StatisticsModel::getinsertstatus();
        if ($row['status'] == '0') {
            echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/job';</script>";
        } else {
            try {
                $jds = $_POST['i_jds'];
                $jdl = $_POST['i_jdl'];
                $jdsum = $_POST['i_jdsum'];
                $nj = $_POST['i_nj'];
                $jsum = $_POST['i_jsum'];
                $jmoney = $_POST['i_jmoney'];
                $flearn = $_POST['i_flearn'];
                $supervi = $_POST['i_supervi'];
                $year = $param[0];
                $month = $param[1];
                $user = $_SESSION['suname'];
                JobModel::insertJob($jds, $jdl, $jdsum, $nj, $jsum, $jmoney, $flearn, $supervi, $year, $month, $user);
                header("Location:" . getBaseUrl() . "page/job");
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/job';</script>";
                } else {
                    throw $e; // in case it's any other error
                }
            }
        }
    }
    /****************************************************************************************** */
    public  function getrecentJobmonth()
    {
        $recentMonth = JobModel::recentJobMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getalljob()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = JobModel::getAllJob($year, $u);
        echo json_encode($recs);
    }
    /************************************************ */
    public  function getJobGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = JobModel::getJOBGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /****************************************************************************************** */
    public  function updatejob()
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $djsrch = $_POST['DNjob1'];
            $djleon = $_POST['DNjob2'];
            $djsum = $_POST['DNjob3'];
            $ndj = $_POST['DNjob4'];
            $sum = $_POST['DNjob5'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = JobModel::updateJob($djsrch, $djleon, $djsum, $ndj,  $sum, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
    /******************************************************** */
    public  function updateotherfielJob()
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $gfield = $_POST['gfield'];
            $value = $_POST['value'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = JobModel::updateOtherFeildJob($gfield, $value, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
}
