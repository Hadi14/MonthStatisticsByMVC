<? class StatisticsController
{
    public  function insertsandogh($param)
    {
        $snum = $_POST['snum'];
        $smoney = $_POST['smny'];
        $year = $param[0];
        $month = $param[1];
        $user = $_SESSION['suname'];
        SandoghModel::insertSandogh($snum,$smoney, $year, $month, $user);
        header("Location:" . getBaseUrl() . "page/sandogh");
    }
    /****************************************************************************************** */
}
