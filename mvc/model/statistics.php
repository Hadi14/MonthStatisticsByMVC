<? class StatisticsModel
{
    /*********************************************************************/
    static  function insertpopulation($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $AllPop, $OldFamCity, $OldFamRural, $AllOldFamily, $OldPopCity, $OldPopRural, $AllPopOld, $year, $month, $user)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $date = date("Y-m-d H:i:s");
        $db->insert("insert into hemayat (Hmy_CityFamily,Hmy_RuralFamily,Hmy_MenFamily,Hmy_WomenFamily,Hmy_AllFamily,Hmy_AllPop,Hmy_OldFamCity,
        Hmy_OldFamRural,Hmy_AllOldFamily,Hmy_OldPopCity,Hmy_OldPopRural,Hmy_AllPopOld,Year,Month,user,datetime) 
        values  ($CityFamily, $RuralFamily, $MenFamily, $WomenFamily,$AllFamily,$AllPop,$OldFamCity,$OldFamRural,$AllOldFamily,$OldPopCity,$OldPopRural,$AllPopOld,'$year','$month','$un','$date')");
        // header("Location: " . getBaseUrl() . "page/population");
    }
    /*********************************************************************/
    static  function insertmoney($money, $year, $month, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $date = date("Y-m-d H:i:s");
        $db->insert("insert into money (M_money,M_Year,M_month,M_user,datetime)values($money,'$year','$month','$un','$date')");
    }
    /*********************************************************************/
    static  function insertDowry($dNum, $dMoney, $year, $month, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $date = date("Y-m-d H:i:s");
        $db->insert("insert into dowry (D_NumberDowry,D_MoneyDowry,D_Year,D_month,D_user,datetime)values($dNum,$dMoney,'$year','$month','$un','$date')");
    }
    /*********************************************************************/
    static  function inserInsure($wNum, $jNum, $sum, $money, $year, $month, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $date = date("Y-m-d H:i:s");
        $db->insert("insert into insure (I_NumWomen,I_NumJob,I_Sum,I_Money,I_Year,I_month,I_user,datetime)values($wNum, $jNum,$sum,$money,'$year','$month','$un','$date')");
    }
    /*********************************************************************/
    static  function updateAllpopulation($CityFamily, $RuralFamily, $MenFamily, $WomenFamily, $AllFamily, $year, $month, $user)
    {
        $dbu = Db::getInstance();
        $un = $_SESSION['suname'];
        $level = $dbu->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update hemayat set Hmy_CityFamily=$CityFamily ,Hmy_RuralFamily=$RuralFamily ,Hmy_MenFamily=$MenFamily,Hmy_WomenFamily=$WomenFamily,Hmy_AllFamily=$AllFamily  where Year= '$year' and Month= '$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری ، قابل ویرایش توسط مدیر اصلی باشد 
        else
            $sql = "update hemayat set Hmy_CityFamily=$CityFamily ,Hmy_RuralFamily=$RuralFamily ,Hmy_MenFamily=$MenFamily,Hmy_WomenFamily=$WomenFamily,Hmy_AllFamily=$AllFamily  where Year= '$year' and Month= '$month' and user='$user'";

        $db = Db::getInstance();
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateOldpopulation($one, $two, $goalFields, $sum, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $level = $db->query("select level from users where user='$un'");
        if ($goalFields == 6) {
            if ($level[0]['level'] == "0")
                $sql = "update hemayat set Hmy_OldFamCity=$one ,Hmy_OldFamRural=$two ,Hmy_AllOldFamily=$sum  where Year= '$y' and Month= '$m' "; // برای اینکه رکورد ثبت شده توسط هر کاربری ، قابل ویرایش توسط مدیر اصلی باشد 
            else
                $sql = "update hemayat set Hmy_OldFamCity=$one ,Hmy_OldFamRural=$two ,Hmy_AllOldFamily=$sum  where Year= '$y' and Month= '$m' and user='$un'";
        } else if ($goalFields == 9) {
            if ($level[0]['level'] == "0")
                $sql = "update hemayat set Hmy_OldPopCity=$one ,Hmy_OldPopRural=$two ,Hmy_AllPopOld=$sum  where Year= '$y' and Month= '$m' "; // برای اینکه رکورد ثبت شده توسط هر کاربری ، قابل ویرایش توسط مدیر اصلی باشد 
            else
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
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update hemayat set Hmy_AllPop=$all where Year= '$y' and Month= '$m' "; // برای اینکه رکورد ثبت شده توسط هر کاربری ، قابل ویرایش توسط مدیر اصلی باشد 
        else
            $sql = "update hemayat set Hmy_AllPop=$all where Year= '$y' and Month= '$m' and user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateMoney($mny, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];

        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update money set M_money=$mny where M_Year= '$y' and M_Month= '$m'"; // برای اینکه رکورد ثبت شده توسط هر کاربری ، قابل ویرایش توسط مدیر اصلی باشد 
        else
            $sql = "update money set M_money=$mny where M_Year= '$y' and M_Month= '$m' and M_user='$un'";

        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateDowry($Goal, $goalf, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        if ($Goal == 0) {
            $retVal = 'D_NumberDowry';
        } else {
            $retVal = 'D_MoneyDowry';
        }


        $dbu = Db::getInstance();
        $level = $dbu->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "update dowry set $retVal=$goalf where D_Year= '$y' and D_Month= '$m' "; // برای اینکه رکورد ثبت شده توسط هر کاربری ، قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "update dowry set $retVal=$goalf where D_Year= '$y' and D_Month= '$m' and D_user='$un'";
        }
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateNumInsure($wn, $jn, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update insure set I_NumWomen=$wn ,I_NumJob=$jn, I_Sum=$wn+$jn   where I_Year= '$y' and I_Month= '$m'"; // برای اینکه رکورد ثبت شده توسط هر کاربری ، قابل ویرایش توسط مدیر اصلی باشد 
        else
            $sql = "update insure set I_NumWomen=$wn ,I_NumJob=$jn, I_Sum=$wn+$jn   where I_Year= '$y' and I_Month= '$m' and I_user='$un'";
        $rowAffect = $db->modify($sql);
        return $rowAffect;
    }
    /********************************************************************** */
    static function updateMoneyInsure($im, $y, $m, $un)
    {
        $db = Db::getInstance();
        $un = $_SESSION['suname'];
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0")
            $sql = "update insure set I_Money=$im  where I_Year= '$y' and I_Month= '$m'"; // برای اینکه رکورد ثبت شده توسط هر کاربری ، قابل ویرایش توسط مدیر اصلی باشد 
        else
            $sql = "update insure set I_Money=$im  where I_Year= '$y' and I_Month= '$m' and I_user='$un'";
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
        // $sql = "select * from hemayat where Year='$year' and user='$un' order by Year desc, Month desc";
        $sql = "select * from hemayat where Year='$year' order by Year desc, Month desc";
        $record = $db->query($sql);
        // dump($record);
        return $record;
        // echo json_encode($record);
    }
    /*********************************************************************/
    static  function getallmoney($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from money where M_Year='$year' and M_user='$un' order by M_Year desc, M_Month desc";
        $sql = "select * from money where M_Year='$year' order by M_Year desc, M_Month desc";
        $record = $db->query($sql);
        // dump($record);
        return $record;
        // echo json_encode($record);
    }
    /*********************************************************************/
    static  function getallDowry($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from dowry where D_Year='$year' and D_user='$un' order by D_Year desc, D_Month desc";
        $sql = "select * from dowry where D_Year='$year' order by D_Year desc, D_Month desc";
        $record = $db->query($sql);
        // dump($record);
        return $record;
        // echo json_encode($record);
    }
    /*********************************************************************/
    static  function getallInsure($year, $un)
    {
        $db = Db::getInstance();
        // $sql = "select * from insure where I_Year='$year' and I_user='$un' order by I_Year desc, I_Month desc";
        $sql = "select * from insure where I_Year='$year' order by I_Year desc, I_Month desc";
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
    /*********************************************************************/
    static  function enableRemove()
    {
        $db = Db::getInstance();
        $sql = "update variables set value='1' where title='removeRecord' ";
        $rowAffect = $db->modify($sql);
        if ($rowAffect) {
            $ar = array("status" => true);
            echo json_encode($ar);
        }
    }
    /*********************************************************************/
    static  function enedits()
    {
        $db = Db::getInstance();
        $sql = "update variables set value='1' where title='enableEdit' ";
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
    static  function disableRemove()
    {
        $db = Db::getInstance();
        $sql = "update variables set value='0' where title='removeRecord' ";
        $rowAffect = $db->modify($sql);
        if ($rowAffect) {
            $ar = array("status" => true);
            echo json_encode($ar);
        }
    }
    /***************************************************************** */
    static  function disEdits()
    {
        $db = Db::getInstance();
        $sql = "update variables set value='0' where title='enableEdit' ";
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
        $ar = array("status" =>  $insertStatus[0]['value']);
        return $ar;
    }

    /***************************************************************** */
    static  function geteditstatus()
    {
        $db = Db::getInstance();
        $sql = "select value from variables where title='enableEdit'";
        $insertStatus = $db->query($sql);
        $ar = array("status" =>  $insertStatus[0]['value']);
        return $ar;
    }
    /***************************************************************** */
    static  function getremovestatus()
    {
        $db = Db::getInstance();
        $sql = "select value from variables where title='removeRecord'";
        $insertStatus = $db->query($sql);
        $ar = array("status" =>  $insertStatus[0]['value'], "level" => $_SESSION['level']);
        return $ar;
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
    static  function recentInsureMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from insure order by I_Year desc, I_Month desc limit 1";
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
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select M_money from money where M_Year='$year' and M_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select M_money from money where M_Year='$year' and M_Month='$month' and M_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
    /*****************************************************************/
    static  function getdowryGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select * from dowry where D_Year='$year' and D_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select * from dowry where D_Year='$year' and D_Month='$month' and D_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
    /*****************************************************************/
    static  function getinsureGoal($year, $month, $un)
    {
        $db = Db::getInstance();
        $level = $db->query("select level from users where user='$un'");
        if ($level[0]['level'] == "0") {
            $sql = "select * from insure where I_Year='$year' and I_Month='$month'"; // برای اینکه رکورد ثبت شده توسط هر کاربری قابل ویرایش توسط مدیر اصلی باشد 
        } else {
            $sql = "select * from insure where I_Year='$year' and I_Month='$month' and I_user='$un'";
        }
        $g = $db->query($sql);
        return $g;
    }
}
