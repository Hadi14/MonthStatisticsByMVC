<? class ReportModel
{

    /*********************************************************************/
    static  function getSelectedPopReport($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from hemayat where Year='$year' and Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedMoneyReport($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from money where M_Year='$year' and M_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedDowryReport($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from dowry where D_Year='$year' and D_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedSandoghReport($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from sandogh where S_Year='$year' and S_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedStudentRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from farhangi where F_Year='$year' and F_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedMaskanRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from maskan where M_Year='$year' and M_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedJobRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from job where J_Year='$year' and J_Month='$mn'";
        $record = $db->query($sql);
        $un = $record[0]['J_user'];
        $sql = "select * from users where user='$un'";
        $namefamily = $db->query($sql);
        $res[] = $record;
        $res[] = $namefamily[0]['name'] . " " . $namefamily[0]['family'];
        return $res;
    }
    /*********************************************************************/
    static  function getSelectedInsureRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from insure where I_Year='$year' and I_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedIncomeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from incomes where In_Year='$year' and In_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedEkramRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from ekram where E_Year='$year' and E_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getSelectedEmployeeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select * from employee where Em_Year='$year' and Em_Month='$mn'";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getPopDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from hemayat where Year='$year' and Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getMoneyDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from money where M_Year='$year' and M_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getDowryDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from dowry where D_Year='$year' and D_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getSandoghDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from sandogh where S_Year='$year' and S_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getFarhangiDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from farhangi where F_Year='$year' and F_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getMaskanDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from maskan where M_Year='$year' and M_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getJobDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from job where J_Year='$year' and J_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getInsureDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from insure where I_Year='$year' and I_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getIncomeDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from incomes where In_Year='$year' and In_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getEkramDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from ekram where E_Year='$year' and E_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
    /*********************************************************************/
    static  function getEmployeeDateTimeRpt($year, $mn)
    {
        $db = Db::getInstance();
        $sql = "select datetime from employee where Em_Year='$year' and Em_Month='$mn'";
        $record = $db->query($sql);
        $grdate = date("Y-m-d", strtotime($record[0]['datetime']));
        $grtime = date("H:i:s", strtotime($record[0]['datetime']));
        $param = explode('-', $grdate);
        $prdate = gregorian_to_jalali($param[0], $param[1], $param[2], '/');
        $arydate[] = $prdate;
        $arydate[] = $grtime;
        return $arydate;
    }
}
