<? class StatisticsController
{
    /****************************************************************************************** */
    public  function insertPopulation($param)
    {
        // dump($_POST);
        $CityFamily = $_POST['familycity'];
        $RuralFamily = $_POST['familyrural'];
        $MenFamily = $_POST['familymen'];
        $WomenFamily = $_POST['familywomen'];
        $AllFamily = $_POST['allfamily'];
        $AllPop = $_POST['allpeople'];
        $OldFamCity = $_POST['familyoldcity'];
        $OldFamRural = $_POST['familyoldrural'];
        $AllOldFamily = $_POST['alloldfamily'];
        $OldPopCity = $_POST['peopleoldcity'];
        $OldPopRural = $_POST['peopleoldrural'];
        $AllPopOld = $_POST['alloldpeople'];
        $year = $param[0];
        $month = $param[1];
        $user = $_SESSION['suname'];
        StatisticsModel::insertpopulation($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $AllPop, $OldFamCity, $OldFamRural, $AllOldFamily, $OldPopCity, $OldPopRural, $AllPopOld, $year, $month, $user);
        header("Location:" . getBaseUrl() . "page/population");
    }
    /****************************************************************************************** */
    public  function insertMoney($param)
    {
        $money = $_POST['mny'];
        $year = $param[0];
        $month = $param[1];
        $user = $_SESSION['suname'];
        StatisticsModel::insertmoney($money, $year, $month, $user);
        header("Location:" . getBaseUrl() . "page/money");
    }
    /****************************************************************************************** */
    public  function insertDowry($param)
    {
        $money = $_POST['mny'];
        $dnum = $_POST['dnum'];
        $year = $param[0];
        $month = $param[1];
        $user = $_SESSION['suname'];
        StatisticsModel::insertDowry($dnum, $money, $year, $month, $user);
        header("Location:" . getBaseUrl() . "page/dowry");
    }
    /****************************************************************************************** */
    public  function insertInsure($param)
    {
        $wn = $_POST['wnum'];
        $jn = $_POST['jnum'];
        $is = $_POST['isum'];
        $imoney = $_POST['imoney'];
        $year = $param[0];
        $month = $param[1];
        $user = $_SESSION['suname'];
        StatisticsModel::inserInsure($wn, $jn, $is, $imoney, $year, $month, $user);
        header("Location:" . getBaseUrl() . "page/insure");
    }
    /****************************************************************************************** */
    public  function updateAllPopulation()
    {
        $CityFamily = $_POST['familycity'];
        $RuralFamily = $_POST['familyrural'];
        $MenFamily = $_POST['familymen'];
        $WomenFamily = $_POST['familywomen'];
        $AllFamily = $_POST['familycity'] + $_POST['familyrural'];
        $y = $_POST['yr'];
        $m = $_POST['mn'];
        $un = $_SESSION['suname'];
        $rowAffect = StatisticsModel::updateAllpopulation($CityFamily, $RuralFamily, $MenFamily, $WomenFamily,  $AllFamily, $y, $m, $un);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /**************************************************** */
    public  function updateOldPopulation()
    {
        // updateAllpopulation
        $one = $_POST['one'];
        $two = $_POST['two'];
        $goalFields = $_POST['goalFields'];
        $sum = $_POST['one'] + $_POST['two'];
        $y = $_POST['yr'];
        $m = $_POST['mn'];
        $un = $_SESSION['suname'];
        $rowAffect = StatisticsModel::updateOldpopulation($one, $two, $goalFields, $sum, $y, $m, $un);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /******************************************************** */
    public  function updateAllPeoplePopulation()
    {
        $AllPeople = $_POST['AllPeople'];
        $y = $_POST['yr'];
        $m = $_POST['mn'];
        $un = $_SESSION['suname'];
        $rowAffect = StatisticsModel::updateAllPeoplePopulation($AllPeople, $y, $m, $un);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /******************************************************** */
    public  function updatemoney()
    {
        $mny = $_POST['mny'];
        $y = $_POST['yr'];
        $m = $_POST['mn'];
        $un = $_SESSION['suname'];
        $rowAffect = StatisticsModel::updateMoney($mny, $y, $m, $un);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /******************************************************** */
    public  function updateDowry($param)
    {
        $goalf = $_POST['goalf'];
        $y = $_POST['yr'];
        $m = $_POST['mn'];
        $un = $_SESSION['suname'];
        $rowAffect = StatisticsModel::updateDowry($param[0], $goalf, $y, $m, $un);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /******************************************************** */
    public  function updateNumInsure()
    {
        $wn = $_POST['wn'];
        $jn = $_POST['jn'];
        $y = $_POST['yr'];
        $m = $_POST['mn'];
        $un = $_SESSION['suname'];
        $rowAffect = StatisticsModel::updateNumInsure($wn, $jn, $y, $m, $un);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /******************************************************** */
    public  function updateMonyInsure()
    {
        $mn = $_POST['im'];
        $y = $_POST['yr'];
        $m = $_POST['mn'];
        $un = $_SESSION['suname'];
        $rowAffect = StatisticsModel::updateMoneyInsure($mn, $y, $m, $un);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /**************************************************** */
    public  function insertcurrentdate()
    {
        $year = $_POST['cyear'];
        $month = $_POST['cmonth'];
        StatisticsModel::insertcurrentdate($year, $month);
    }
    /**************************************************** */
    public  function enableinserts()
    {
        StatisticsModel::eninserts();
    }
    /**************************************************** */
    public  function enableEdits()
    {
        StatisticsModel::enedits();
    }
    /**************************************************** */
    public  function disableinserts()
    {
        StatisticsModel::disinserts();
    }
    /**************************************************** */
    public  function disableEdits()
    {
        StatisticsModel::disEdits();
    }
    /**************************************************** */
    public  function getinsertsstatus()
    {
        StatisticsModel::getinsertstatus();
    }
    /**************************************************** */
    public  function getEnblstatus()
    {
        StatisticsModel::getenablestatus();
    }
    /**************************************************** */
    public  function getrecentmonth()
    {
        $recentMonth = StatisticsModel::recentMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getrecentmoneymonth()
    {
        $recentMonth = StatisticsModel::recentMoneyMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getrecentdowrymonth()
    {
        $recentMonth = StatisticsModel::recentDowryMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getrecentinsuremonth()
    {
        $recentMonth = StatisticsModel::recentInsureMonth();
        echo json_encode($recentMonth);
    }
    /**************************************************** */
    public  function getallpopulation()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = StatisticsModel::allPopulation($year, $u);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getallmoney()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = StatisticsModel::getallmoney($year, $u);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getalldowry()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = StatisticsModel::getallDowry($year, $u);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getallinsure()
    {
        $year = $_POST['year'];
        $u = $_SESSION['suname'];
        $recs = StatisticsModel::getallInsure($year, $u);
        echo json_encode($recs);
    }
    /**************************************************** */
    public  function getGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = StatisticsModel::getGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /************************************************ */
    public  function getMoneyGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = StatisticsModel::getMoneyGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /************************************************ */
    public  function getDowryGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = StatisticsModel::getdowryGoal($year, $month, $un);
        echo json_encode($goal);
    }
    /************************************************ */
    public  function getInsureGoalField()
    {
        $year = $_POST['yr'];
        $month = $_POST['mn'];
        $un = $_SESSION['suname'];
        $goal = StatisticsModel::getinsureGoal($year, $month, $un);
        echo json_encode($goal);
    }
}
