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
    public  function updateAllPopulation()
    {
        // updateAllpopulation
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
    /************************************************************* */
    public  function updateAllPepoplePopulation()
    {
    }
    public  function insertcurrentdate()
    {
        $year = $_POST['cyear'];
        $month = $_POST['cmonth'];
        StatisticsModel::insertcurrentdate($year, $month);
    }

    public  function enableinserts()
    {
        StatisticsModel::eninserts();
    }
    public  function disableinserts()
    {
        StatisticsModel::disinserts();
    }
    public  function getinsertsstatus()
    {
        StatisticsModel::getinsertstatus();
    }
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
}
