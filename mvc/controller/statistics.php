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
        // StatisticsModle::insert($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $AllPop, $OldFamCity, $OldFamRural, $AllOldFamily, $OldPopCity, $OldPopRural, $AllPopOld, $year, $month, $user);
        dump($_POST);
    }
}
