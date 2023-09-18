<? class SandoghController
{
    public  function insertsandogh($param)
    {
        $snum = $_POST['snum'];
        $smoney = $_POST['smny'];
        $year = $param[0];
        $month = $param[1];
        $user = $_SESSION['suname'];
        SandoghModel::insertSandogh($snum, $smoney, $year, $month, $user);
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
}
