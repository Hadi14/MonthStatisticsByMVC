<? class StatisticsModel
{
    /*********************************************************************/
    static  function insert($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $AllPop, $OldFamCity, $OldFamRural, $AllOldFamily, $OldPopCity, $OldPopRural, $AllPopOld, $year, $month, $user)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $db->insert("insert into hemayat (Hmy_CityFamily,Hmy_RuralFamily,Hmy_MenFamily,Hmy_WomenFamily,Hmy_AllFamily,Hmy_AllPop,Hmy_OldFamCity,
        Hmy_OldFamRural,Hmy_AllOldFamily,Hmy_OldPopCity,Hmy_OldPopRural,Hmy_AllPopOld,Year,Month,user) 
        values  ($CityFamily, $RuralFamily, $MenFamily, $WomenFamily,$AllFamily,$AllPop,$OldFamCity,$OldFamRural,$AllOldFamily,$OldPopCity,$OldPopRural,$AllPopOld,'$year','$month','$un')");
        // header("Location: " . getBaseUrl() . "page/population");
    }
    /*********************************************************************/
    static  function allPopulation($year, $month, $un)
    {
        $db = Db::getInstance();
        $sql = "select * from hemayat where Year='$year' and Month='$month' and user='$un'";
        $record = $db->query($sql);
        return $record;
    }
}
