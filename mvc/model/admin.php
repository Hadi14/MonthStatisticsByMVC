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
    static  function getNoteGoal($txt)
    {
        $db = Db::getInstance();
        $sql = "select * from notes where text='$txt'";
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
    static  function currentyear($yr)
    {
        $db = Db::getInstance();
        $sql = "update variables set value='$yr' where title='currentYear'";
        $g = $db->modify($sql);
        return $g;
    }
    /*****************************************************************/
    static  function getPreviousAllocation($field)
    {
        $db = Db::getInstance();
        $sql = "select * from accesses where '$field'=1 and A_user in(select user from users where level=2)";
        $g = $db->query($sql);
        return $g;
    }

    /*********************************************************************/
    static  function getAllNotes()
    {
        $db = Db::getInstance();
        $sql = "select * from notes ";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getLastNotes()
    {
        $db = Db::getInstance();
        $sql = "select * from notes where status=1 order by id desc limit 1 ";
        $record = $db->query($sql);
        return $record;
    }
    /*********************************************************************/
    static  function getCurYear()
    {
        $db = Db::getInstance();
        $sql = "select * from variables where title='currentYear'";
        $record = $db->query($sql);
        return $record;
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
    static function EditNote($txt, $status, $grecord)
    {
        $db = Db::getInstance();
        $sql = "update notes set text='$txt',status=$status where id=$grecord";
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
    static  function inserNotes($text, $status)
    {
        $db = Db::getInstance();
        $db->insert("insert into notes(text, status) VALUES ('$text', $status)");
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
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM dowry WHERE D_Year='$year' and D_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemovePopulation($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM hemayat WHERE Year='$year' and Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveMoney($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM money WHERE M_Year='$year' and M_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveInsure($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM insure WHERE I_Year='$year' and I_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveSandogh($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM sandogh WHERE S_Year='$year' and S_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveFarhangi($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM farhangi WHERE F_Year='$year' and F_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveMaskan($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM maskan WHERE M_Year='$year' and M_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveJob($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM job WHERE J_Year='$year' and J_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveIncome($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM incomes WHERE In_Year='$year' and In_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveEkram($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM ekram WHERE E_Year='$year' and E_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveEmployee($year, $month)
    {
        $db = Db::getInstance();
        $un = $_SESSION['sunmae'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] != "2") {
            $sql = "delete FROM employee WHERE Em_Year='$year' and Em_Month='$month'";
            $rowAffect = $db->modify($sql);
            return $rowAffect;
        }
    }
    /********************************************************************** */
    static function RemoveNotes($id)
    {
        $db = Db::getInstance();
        $sql = "delete FROM notes WHERE id=$id";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
}
