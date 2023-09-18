<? class MaskanController
{
    public  function insertMskn($param)
    {
        $fix = $_POST['fix'];
        $wc = $_POST['wc'];
        $buyc = $_POST['buyc'];
        $buyr = $_POST['buyr'];
        $crtc = $_POST['crtc'];
        $crtr = $_POST['crtr'];
        $tbm = $_POST['tbm'];
        $tsep = $_POST['tsep'];
        $sum =  $_POST['sum'];
        $year = $param[0];
        $month = $param[1];
        $user = $_SESSION['suname'];
        MaskanModel::insertMaskan($fix, $wc, $buyc, $buyr, $crtc, $crtr, $tbm, $tsep, $sum, $year, $month, $user);
        header("Location:" . getBaseUrl() . "page/maskan");
    }
    /****************************************************************************************** */
    public  function getrecentmonth()
    {
        $recentMonth = MaskanModel::recentmsknMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getAllmskn()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = MaskanModel::getAllMaskan($year, $u);
        echo json_encode($recs);
    }
}
