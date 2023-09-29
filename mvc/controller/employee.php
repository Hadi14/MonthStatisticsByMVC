<? class EmployeeController
{
    /****************************************************************************************** */
    public  function insertEmpl($param)
    {
        $row = StatisticsModel::getinsertstatus();
        if ($row['status'] == '0') {
            echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/employee';</script>";
        } else {
            $official = $_POST['E_official'];
            $company = $_POST['E_company'];
            $sum = $_POST['E_sum'];
            $year = $param[0];
            $month = $param[1];
            $un = $_SESSION['suname'];
            EmployeeModel::insertEmployee($official, $company, $sum, $year, $month, $un);
            header("Location:" . getBaseUrl() . "page/employee");
        }
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
    public  function updateEmply($param)
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $offic = $_POST['em_offic'];
            $comp = $_POST['em_comp'];
            $sum = $_POST['em_sum'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = EmployeeModel::updateEmployee($offic, $comp, $sum, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
}
