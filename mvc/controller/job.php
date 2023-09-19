<? class JobController
{
    public  function insertjob($param)
    {
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
    }
    /****************************************************************************************** */
    public  function getrecentJobmonth()
    {
        $recentMonth = JobModel::recentJobMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
}
