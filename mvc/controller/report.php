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
    /**************************************************** */
    public  function getSelectedInsuRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedInsureRpt($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedIncmRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedIncomeRpt($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedEkrmRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedEkramRpt($year, $mn);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getSelectedEmpRpt()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSelectedEmployeeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getPopDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getPopDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getMoneyDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getMoneyDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getDowryDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getDowryDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getySandoghDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getSandoghDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getFarhangiDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getFarhangiDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getMaskanDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getMaskanDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getJobDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getJobDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getInsureDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getInsureDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getIncomeDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getIncomeDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getEkramDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getEkramDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
    /****************************************************************************************** */
    public  function getEmployeeDateTime()
    {
        $year = $_POST['year'];
        $mn =  $_POST['month'];
        $recs = ReportModel::getEmployeeDateTimeRpt($year, $mn);
        echo json_encode($recs);
    }
}
