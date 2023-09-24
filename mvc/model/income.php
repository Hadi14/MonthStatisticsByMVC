<? class IncomeModel
{
    /*********************************************************************/
    static  function insertIncomes($charity, $Supports, $zakat, $bsNeed, $allIncome, $Nikookari, $year, $month, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $db->insert("insert into incomes (In_charity, In_Supports, In_zakat, In_bsNeed, In_allIncome, In_Nikookari, In_Year, In_Month, In_user) values($charity, $Supports,$zakat,$bsNeed,$allIncome,$Nikookari,'$year','$month','$un')");
    }
    /*****************************************************************/
    static  function recentIncomeMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from incomes order by In_Year desc, In_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*********************************************************************/
    static  function getallIncomes($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from incomes where In_Year='$year' and In_user='$un' order by In_Year desc, In_Month desc";
        $sql = "select * from incomes where In_Year='$year' order by In_Year desc, In_Month desc";
        $record = $db->query($sql);
        return $record;
    }
    /*****************************************************************/
    static  function getIncomeGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from incomes where In_Year='$year' and In_Month='$month' and In_user='$un'";
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function updateIncome($Goal, $value, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        if ($Goal == 0) {
            $retVal = 'In_charity';
        } else  if ($Goal == 1) {
            $retVal = 'In_Supports';
        } else  if ($Goal == 2) {
            $retVal = 'In_zakat';
        } else  if ($Goal == 3) {
            $retVal = 'In_bsNeed';
        } else  if ($Goal == 4) {
            $retVal = 'In_allIncome';
        } else  if ($Goal == 5) {
            $retVal = 'In_Nikookari';
        }
        $sql = "update incomes set $retVal=$value where In_Year= '$y' and In_Month= '$m' and In_user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
