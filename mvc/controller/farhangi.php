<? class FarhangiController
{
    public  function insertFrng($param)
    {
        $row = StatisticsModel::getinsertstatus();
        if ($row['status'] == '0') {
            echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/farhangi';</script>";
        } else {
            try {
                $stu = $_POST['stu'];
                $year = $param[0];
                $month = $param[1];
                $user = $_SESSION['suname'];
                FarhangiModel::insertFarhangi($stu, $year, $month, $user);
                header("Location:" . getBaseUrl() . "page/farhangi");
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
    public  function getrecentfarhangimonth()
    {
        $recentMonth = FarhangiModel::recentFarhangiMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getAllFrng()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = FarhangiModel::getAllFarhangi($year, $u);
        echo json_encode($recs);
    }
    /************************************************ */
    public  function getFrngGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = FarhangiModel::getFarhangiGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /******************************************************** */
    public  function updateFrng()
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $stu = $_POST['stu'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = FarhangiModel::updateFarhangi($stu, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
}
