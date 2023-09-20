<? class EmployeeController
{
    /****************************************************************************************** */
    public  function insertEmpl($param)
    {
        $official = $_POST['E_official'];
        $company = $_POST['E_company'];
        $sum = $_POST['E_sum'];
        $year = $param[0];
        $month = $param[1];
        $un = $_SESSION['suname'];
        EmployeeModel::insertEmployee($official, $company, $sum, $year, $month, $un);
        header("Location:" . getBaseUrl() . "page/employee");
    }
    /**************************************************** */
    public  function getrecentEmplMonth()
    {
        $recentMonth = EmployeeModel::recentEmployeeMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getallEmpl()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = EmployeeModel::getallEmployee($year, $u);
        echo json_encode($recs);
    }
    /************************************************ */
    public  function getEmplGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = EmployeeModel::getEmployeeGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /******************************************************** */
    public  function updateEkram($param)
    {
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
