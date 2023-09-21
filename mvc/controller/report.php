<? class ReportController
{
    /**************************************************** */
    public  function getPopSelectedRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedPopReport($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedMnyRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedMoneyReport($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedDwyRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedDowryReport($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedSndghRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedSandoghReport($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedStuRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedStudentRpt($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedMsknRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedMaskanRpt($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedJBRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedJobRpt($year, $mn);
        echo json_encode($recs);
    }
}
