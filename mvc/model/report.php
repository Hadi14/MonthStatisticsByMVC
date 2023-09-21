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
}
