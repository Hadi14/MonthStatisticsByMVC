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
        $sql = "select * from hemayat where Year='$year' and user='$un'";
        $record = $db->query($sql);
        return $record;
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
}
