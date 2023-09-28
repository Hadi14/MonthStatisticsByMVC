<? class EkramController
{
    /****************************************************************************************** */
    public  function insertEkrm($param)
    {
        $orphan = $_POST['E_orphan'];
        $supports = $_POST['E_supports'];
        $year = $param[0];
        $month = $param[1];
        $un = $_SESSION['suname'];
        EkramModel::insertEkram($orphan, $supports, $year, $month, $un);
        header("Location:" . getBaseUrl() . "page/ekram");
    }
    /**************************************************** */
    public  function getrecentEkrmMonth()
    {
        $recentMonth = EkramModel::recentEkramMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getallEkrm()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = EkramModel::getallEkram($year, $u);
        echo json_encode($recs);
    }
    /************************************************ */
    public  function getEkrmGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = EkramModel::getEkramGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /******************************************************** */
    public  function updateEkram($param)
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $goalf = $_POST['goalf'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = EkramModel::updateEkram($param[0], $goalf, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
}
