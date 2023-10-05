<? class StatisticsController
{
    /****************************************************************************************** */
    public  function insertPopulation($param)
    {
        // dump($_POST);
        try {
            $row = StatisticsModel::getinsertstatus();
            if ($row['status'] == '0') {
                echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/population';</script>";
            } else {
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
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/sandogh';</script>";
            } else {
                throw $e; // in case it's any other error
            }
        }
    }
    /****************************************************************************************** */
    public  function insertMoney($param)
    {

        $row = StatisticsModel::getinsertstatus();
        if ($row['status'] == '0') {
            echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/money';</script>";
        } else {
            try {
                $money = $_POST['mny'];
                $year = $param[0];
                $month = $param[1];
                $user = $_SESSION['suname'];
                StatisticsModel::insertmoney($money, $year, $month, $user);
                header("Location:" . getBaseUrl() . "page/money");
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/sandogh';</script>";
                } else {
                    throw $e; // in case it's any other error
                }
            }
        }
    }
    /****************************************************************************************** */
    public  function insertDowry($param)
    {
        $row = StatisticsModel::getinsertstatus();
        if ($row['status'] == '0') {
            echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/dowry';</script>";
        } else {
            try {
                $money = $_POST['mny'];
                $dnum = $_POST['dnum'];
                $year = $param[0];
                $month = $param[1];
                $user = $_SESSION['suname'];
                StatisticsModel::insertDowry($dnum, $money, $year, $month, $user);
                header("Location:" . getBaseUrl() . "page/dowry");
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/dowry';</script>";
                } else {
                    throw $e; // in case it's any other error
                }
            }
        }
    }
    /****************************************************************************************** */
    public  function insertInsure($param)
    {
        $row = StatisticsModel::getinsertstatus();
        if ($row['status'] == '0') {
            echo "<script>alert('عملیات درج غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');  window.location.href ='"  . getBaseUrl() . "page/insure';</script>";
        } else {
            try {
                $wn = $_POST['wnum'];
                $jn = $_POST['jnum'];
                $is = $_POST['isum'];
                $imoney = $_POST['imoney'];
                $year = $param[0];
                $month = $param[1];
                $user = $_SESSION['suname'];
                StatisticsModel::inserInsure($wn, $jn, $is, $imoney, $year, $month, $user);
                header("Location:" . getBaseUrl() . "page/insure");
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/sandogh';</script>";
                } else {
                    throw $e; // in case it's any other error
                }
            }
        }
    }

    /****************************************************************************************** */
    public  function updateAllPopulation()
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
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
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $mny = $_POST['mny'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = StatisticsModel::updateMoney($mny, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
    /******************************************************** */
    public  function updateDowry($param)
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $goalf = $_POST['goalf'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = StatisticsModel::updateDowry($param[0], $goalf, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
        }
    }
    /******************************************************** */
    public  function updateNumInsure()
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
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
    }
    /******************************************************** */
    public  function updateMonyInsure()
    {
        $row = StatisticsModel::geteditstatus();
        if ($row['status'] == 0) {
            echo json_encode(array("disableEdit" => true));
        } else {
            $mn = $_POST['im'];
            $y = $_POST['yr'];
            $m = $_POST['mn'];
            $un = $_SESSION['suname'];
            $rowAffect = StatisticsModel::updateMoneyInsure($mn, $y, $m, $un);
            if ($rowAffect) {
                echo json_encode($rowAffect);
            }
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
        $ar = StatisticsModel::getinsertstatus();
        echo json_encode($ar);
    }

    /**************************************************** */
    public  function getEdtstatus()
    {
        $ar = StatisticsModel::geteditstatus();
        echo json_encode($ar);
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
