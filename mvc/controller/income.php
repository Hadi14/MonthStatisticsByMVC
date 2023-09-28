<? class IncomeController
{
    /****************************************************************************************** */
    public  function insertIncomes($param)
    {
        $charity = $_POST['i_charity'];
        $Supports = $_POST['i_Supports'];
        $zakat = $_POST['i_zakat'];
        $bsNeed = $_POST['i_bsNeed'];
        $allIncome = $_POST['i_allIncome'];
        $Nikookari = $_POST['i_Nikookari'];
        $year = $param[0];
        $month = $param[1];
        $un = $_SESSION['suname'];
        IncomeModel::insertIncomes($charity, $Supports, $zakat, $bsNeed, $allIncome, $Nikookari, $year, $month, $un);
        header("Location:" . getBaseUrl() . "page/income");
    }
    /**************************************************** */
    public  function getrecentincomemonth()
    {
        $recentMonth = IncomeModel::recentIncomeMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getallIncms()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = IncomeModel::getallIncomes($year, $u);
        echo json_encode($recs);
    }
    /************************************************ */
    public  function getIncmGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = IncomeModel::getIncomeGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /******************************************************** */
    public  function updateIncome($param)
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $goalf = $_POST['goalf'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = IncomeModel::updateIncome($param[0], $goalf, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
}
