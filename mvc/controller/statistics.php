<? class StatisticsController
{
    /****************************************************************************************** */
    public  function insertPopulation()
    {
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
        $year = $_POST['year'];
        $month = $_POST['month'];
        $user = $_SESSION['suname'];
        StatisticsModel::insertpopulation($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $AllPop, $OldFamCity, $OldFamRural, $AllOldFamily, $OldPopCity, $OldPopRural, $AllPopOld, $year, $month, $user);
        // dump($_POST);
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
    public  function getallpopulation($year, $u)
    {
        StatisticsModel::allPopulation($year, $u);
    }
    // public  function getcurrentdate()
    // {
    //     $currdt = StatisticsModel::getcurrdate();
    //     // $currentYear = $currdt[0]['Year'];
    //     // $currentMonth = $currdt[0]['Month'];
    //     return $currdt;
    // }
}
