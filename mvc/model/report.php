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
}
