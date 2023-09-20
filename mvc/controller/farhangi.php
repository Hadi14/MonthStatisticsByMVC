<? class FarhangiController
{
    public  function insertFrng($param)
    {
        $stu = $_POST['stu'];

        $year = $param[0];
        $month = $param[1];
        $user = $_SESSION['suname'];
        FarhangiModel::insertFarhangi($stu, $year, $month, $user);
        header("Location:" . getBaseUrl() . "page/farhangi");
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