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
}
