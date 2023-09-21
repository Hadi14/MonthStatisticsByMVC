<? class SandoghController
{
    public  function insertsandogh($param)
    {
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
