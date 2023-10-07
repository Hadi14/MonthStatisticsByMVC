<? class AdminModel
{

    /*********************************************************************/
    static  function getAllMenu()
    {
        $db = Db::getInstance();
        $sql = "select * from menus ";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getAllAllocations()
    {
        $db = Db::getInstance();
        $sql = "select * from accesses ";
        $record = $db->query($sql);
        return $record;
    }
    /*****************************************************************/
    static  function getMenuGoal($code)
    {
        $db = Db::getInstance();
        $sql = "select * from menus where M_code='$code'";
        $g = $db->query($sql);
        return $g;
    }
    /*****************************************************************/
    static  function getAccessGoal($u)
    {
        $db = Db::getInstance();
        $sql = "select * from accesses where A_user='$u'";
        $g = $db->query($sql);
        return $g;
    }
    /*****************************************************************/
    static  function getPreviousAllocation($field)
    {
        $db = Db::getInstance();
        $sql = "select * from accesses where A_aloMaskan=1 and A_user in(select user from users where level=2)";
        $g = $db->query($sql);
        return $g;
    }
    /********************************************************************** */
    static function EditMenu($name, $code)
    {
        $db = Db::getInstance();
        $sql = "update menus set M_name='$name' where M_code=$code";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function EditAccess($u, $aloHemayat, $aloPopulation, $aloMoney, $aloDowry, $aloInsure, $aloSandogh, $aloFarhangi, $aloMaskan, $aloJob, $aloMosharekat, $aloIncome, $aloEkram, $aloEmployee)
    {
        $db = Db::getInstance();
        $sql = "update accesses set A_aloHemayat=$aloHemayat,A_aloPopulation=$aloPopulation ,A_aloMoney=$aloMoney, A_aloDowry=$aloDowry, A_aloInsure=$aloInsure, A_aloSandogh=$aloSandogh, A_aloFarhangi=$aloFarhangi, A_aloMaskan=$aloMaskan, A_aloJob=$aloJob, A_aloMosharekat=$aloMosharekat, A_aloIncome=$aloIncome, A_aloEkram=$aloEkram, A_aloEmployee=$aloEmployee where A_user='$u'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /*********************************************************************/
    static  function inserMenus($mname, $mcode)
    {
        $db = Db::getInstance();
        $db->insert("insert into menus (M_name, M_code) values('$mname', $mcode)");
    }
    /*********************************************************************/
    static  function inserAllocations($user, $aloHemayat, $aloPopulation, $aloMoney, $aloDowry, $aloInsure, $aloSandogh, $aloFarhangi, $aloMaskan, $aloJob, $aloMosharekat, $aloIncome, $aloEkram, $aloEmployee)
    {
        $db = Db::getInstance();
        $db->insert("insert into accesses (A_user,A_aloHemayat, A_aloPopulation, A_aloMoney, A_aloDowry, A_aloInsure, A_aloSandogh, A_aloFarhangi, A_aloMaskan, A_aloJob, A_aloMosharekat, A_aloIncome, A_aloEkram, A_aloEmployee) values('$user',$aloHemayat, $aloPopulation,$aloMoney, $aloDowry, $aloInsure, $aloSandogh, $aloFarhangi, $aloMaskan, $aloJob, $aloMosharekat, $aloIncome, $aloEkram, $aloEmployee)");
    }
    /********************************************************************** */
    static function RemoveDowry($year, $month)
    {
        $db = Db::getInstance();
        $sql = "delete FROM dowry WHERE D_Year='$year' and D_Month='$month'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
