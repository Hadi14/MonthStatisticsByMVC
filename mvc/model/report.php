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
        return $record;
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
}
