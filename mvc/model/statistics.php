<? class StatisticsModel
{
    /*********************************************************************/
    static  function insertpopulation($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $AllPop, $OldFamCity, $OldFamRural, $AllOldFamily, $OldPopCity, $OldPopRural, $AllPopOld, $year, $month, $user)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $db->insert("insert into hemayat (Hmy_CityFamily,Hmy_RuralFamily,Hmy_MenFamily,Hmy_WomenFamily,Hmy_AllFamily,Hmy_AllPop,Hmy_OldFamCity,
        Hmy_OldFamRural,Hmy_AllOldFamily,Hmy_OldPopCity,Hmy_OldPopRural,Hmy_AllPopOld,Year,Month,user) 
        values  ($CityFamily, $RuralFamily, $MenFamily, $WomenFamily,$AllFamily,$AllPop,$OldFamCity,$OldFamRural,$AllOldFamily,$OldPopCity,$OldPopRural,$AllPopOld,'$year','$month','$un')");
        // header("Location: " . getBaseUrl() . "page/population");
    }
    /*********************************************************************/
    static  function insertmoney($money, $year, $month, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $db->insert("insert into money (M_money,M_Year,M_month,M_user)values($money,'$year','$month','$un')");
    }
    /*********************************************************************/
    static  function updateAllpopulation($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $year, $month, $user)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $sql = "update hemayat set Hmy_CityFamily=$CityFamily ,Hmy_RuralFamily=$RuralFamily ,Hmy_MenFamily=$MenFamily,Hmy_WomenFamily=$WomenFamily,Hmy_AllFamily=$AllFamily  where Year= '$year' and Month= '$month' and user='$user'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateOldpopulation($one, $two, $goalFields, $sum, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        if ($goalFields == 6) {
            $sql = "update hemayat set Hmy_OldFamCity=$one ,Hmy_OldFamRural=$two ,Hmy_AllOldFamily=$sum  where Year= '$y' and Month= '$m' and user='$un'";
        } else if ($goalFields == 9) {
            $sql = "update hemayat set Hmy_OldPopCity=$one ,Hmy_OldPopRural=$two ,Hmy_AllPopOld=$sum  where Year= '$y' and Month= '$m' and user='$un'";
        }
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateAllPeoplePopulation($all, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $sql = "update hemayat set Hmy_AllPop=$all where Year= '$y' and Month= '$m' and user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateMoney($mny, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $sql = "update money set M_money=$mny where M_Year= '$y' and M_Month= '$m' and M_user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /*********************************************************************/
    static  function insertcurrentdate($y, $m)
    {
        $db = Db::getInstance();
        $db->insert("insert into currentdate (Year,Month,current) values  ('$y', '$m'," . true . ")");
        $ar = array("status" => true);
        echo json_encode($ar);
    }
    /*********************************************************************/
    static  function allPopulation($year, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from hemayat where Year='$year' and user='$un' order by Year desc, Month desc";
        $record = $db->query($sql);
        // dump($record);
        return $record;
        // echo json_encode($record);
    }
    /*********************************************************************/
    static  function getallmoney($year, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from money where M_Year='$year' and M_user='$un' order by M_Year desc, M_Month desc";
        $record = $db->query($sql);
        // dump($record);
        return $record;
        // echo json_encode($record);
    }
    /*********************************************************************/
    static  function getallDowry($year, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from dowry where D_Year='$year' and D_user='$un' order by D_Year desc, D_Month desc";
        $record = $db->query($sql);
        // dump($record);
        return $record;
        // echo json_encode($record);
    }
    /*********************************************************************/
    static  function eninserts()
    {
        $db = Db::getInstance();
        $sql = "update variables set value='1' where title='enableinsert' ";
        $rowAffect = $db->modify($sql);
        if ($rowAffect) {
            $ar = array("status" => true);
            echo json_encode($ar);
        }
    }
    /***************************************************************** */
    static  function disinserts()
    {
        $db = Db::getInstance();
        $sql = "update variables set value='0' where title='enableinsert' ";
        $rowAffect = $db->modify($sql);
        if ($rowAffect) {
            $ar = array("status" => true);
            echo json_encode($ar);
        }
    }
    /***************************************************************** */
    static  function getinsertstatus()
    {
        $db = Db::getInstance();
        $sql = "select value from variables where title='enableinsert'";
        $insertStatus = $db->query($sql);
        // return $insertStatus;
        $ar = array("status" =>  $insertStatus[0]['value']);
        // dump($insertStatus[0]['value']);
        echo json_encode($ar);
    }
    /*****************************************************************/
    static  function getcurrdate()
    {
        $db = Db::getInstance();
        $sql = "select * from currentdate order by Year desc, Month desc limit 1";
        $currdate = $db->query($sql);
        return $currdate;
        // echo "aaa";
        // dump($currdate);
    }
    /*****************************************************************/
    static  function recentMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from hemayat order by Year desc, Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*****************************************************************/
    static  function recentMoneyMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from money order by M_Year desc, M_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*****************************************************************/
    static  function recentDowryMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from dowry order by D_Year desc, D_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
    /*****************************************************************/
    static  function getGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from hemayat where Year='$year' and Month='$month' and user='$un'";
        $g = $db->query($sql);
        return $g;
    }
    /*****************************************************************/
    static  function getMoneyGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $sql = "select M_money from money where M_Year='$year' and M_Month='$month' and M_user='$un'";
        $g = $db->query($sql);
        return $g;
    }
}
