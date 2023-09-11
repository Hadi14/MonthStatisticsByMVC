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
        $OldFamCity = $_POST['familyoldrural'];
        $OldFamRural = $_POST['alloldfamily'];
        $AllOldFamily = $_POST['peopleoldcity'];
        $OldPopCity = $_POST['peopleoldrural'];
        $OldPopRural = $_POST['alloldpeople'];
        $AllPopOld = $_POST['alloldpeople'];
        $year = $_POST['familycity'];
        $month = $_POST['familycity'];
        $user = $_SESSION['suname'];
        StatisticsModle::insert($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $AllPop, $OldFamCity, $OldFamRural, $AllOldFamily, $OldPopCity, $OldPopRural, $AllPopOld, $year, $month, $user);
    }
}
