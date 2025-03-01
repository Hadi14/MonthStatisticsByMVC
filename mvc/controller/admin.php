<? class AdminController
{
    function getAllMenus()
    {
        $recs = AdminModel::getAllMenu();
        echo json_encode($recs);
    }
    /************************************************ */
    function getAllAlocn()
    {
        $recs = AdminModel::getAllAllocations();
        echo json_encode($recs);
    }
    // *****************************************************
    function getAllNotes()
    {
        $recs = AdminModel::getAllNotes();
        echo json_encode($recs);
    }
    // *****************************************************
    function getLastNote()
    {
        $recs = AdminModel::getLastNotes();
        echo json_encode($recs);
    }
    // *****************************************************
    function getCurrentYear()
    {
        $recs = AdminModel::getCurYear();
        echo json_encode($recs);
    }
    /************************************************ */
    public  function getNoteGoalField()
    {
        $user = $_POST['ukey'];
        $goal = AdminModel::getNoteGoal($user);
        echo json_encode($goal);
    }
    /************************************************ */
    public  function getMnuGoalField()
    {
        $user = $_POST['ukey'];
        $goal = AdminModel::getMenuGoal($user);
        echo json_encode($goal);
    }
    /************************************************ */
    public  function getAccessGoalField()
    {
        $user = $_POST['ukey'];
        $goal = AdminModel::getAccessGoal($user);
        echo json_encode($goal);
    }
    /************************************************ */
    public  function currentyear()
    {
        $yr = $_POST['year'];
        $goal = AdminModel::currentyear($yr);
        header("Location:" . getBaseUrl() . "page/currentyear");
    }
    /******************************************************** */
    public  function EditMenuRecord()
    {
        $name = $_POST['nam'];
        $code = $_POST['cod'];
        $rowAffect = AdminModel::EditMenu($name, $code);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /******************************************************** */
    public  function EditNoteRecord()
    {
        $txt = $_POST['txt'];
        $status = $_POST['status'];
        $grecord = $_POST['grecord'];
        $rowAffect = AdminModel::EditNote($txt, $status, $grecord);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /******************************************************** */
    public  function EditAccessRecord()
    {
        $u = $_POST['un'];
        $aloHemayat = $_POST['hemayat_chb'];
        $aloPopulation = $_POST['popu_chb'];
        $aloMoney = $_POST['money_chb'];
        $aloDowry = $_POST['dowry_chb'];
        $aloInsure = $_POST['insure_chb'];
        $aloSandogh = $_POST['sandogh_chb'];
        $aloFarhangi = $_POST['farhangi_chb'];
        $aloMaskan = $_POST['maskan_chb'];
        $aloJob = $_POST['job_chb'];
        $aloMosharekat = $_POST['mosharekat_chb'];
        $aloIncome = $_POST['income_chb'];
        $aloEkram = $_POST['ekram_chb'];
        $aloEmployee = $_POST['employee_chb'];

        $rowAffect = AdminModel::EditAccess($u, $aloHemayat, $aloPopulation, $aloMoney, $aloDowry, $aloInsure, $aloSandogh, $aloFarhangi, $aloMaskan, $aloJob, $aloMosharekat, $aloIncome, $aloEkram, $aloEmployee);
        if ($rowAffect) {
            echo json_encode($rowAffect);
        }
    }
    /****************************************************************************************** */
    public  function insertMenu()
    {
        $mname = $_POST['mname'];
        $mcode = $_POST['mcode'];
        AdminModel::inserMenus($mname, $mcode);
        header("Location:" . getBaseUrl() . "page/defineMenu");
    }
    /****************************************************************************************** */
    public  function inserNotific()
    {
        $text = $_POST['notific'];
        $status = isset($_POST['status']) ? 1 : 0;
        // $retVal = (condition) ? a : b ;
        // echo $text;
        // echo br();
        // echo $status;
        // exit;
        AdminModel::inserNotes($text, $status);
        header("Location:" . getBaseUrl() . "page/notification");
    }
    /****************************************************************************************** */
    public  function insertAlloc()
    {
        try {
            $user = $_POST['user_nm'];
            $aloHemayat = !isset($_POST['hemayat_chb_insrt']) ? 0 : 1;
            $aloPopulation = !isset($_POST['popu_chb_insrt']) ? 0 : 1;
            $aloMoney = !isset($_POST['money_chb_insrt']) ? 0 : 1;
            $aloDowry = !isset($_POST['dowry_chb_insrt']) ? 0 : 1;
            $aloInsure = !isset($_POST['insure_chb_insrt']) ? 0 : 1;
            $aloSandogh = !isset($_POST['sandogh_chb_insrt']) ? 0 : 1;
            $aloFarhangi = !isset($_POST['farhangi_chb_insrt']) ? 0 : 1;
            $aloMaskan = !isset($_POST['maskan_chb_insrt']) ? 0 : 1;
            $aloJob = !isset($_POST['job_chb_insrt']) ? 0 : 1;
            $aloMosharekat = !isset($_POST['mosharekat_chb_insrt']) ? 0 : 1;
            $aloIncome = !isset($_POST['income_chb_insrt']) ? 0 : 1;
            $aloEkram = !isset($_POST['ekram_chb_insrt']) ? 0 : 1;
            $aloEmployee = !isset($_POST['employee_chb_insrt']) ? 0 : 1;
            $flag = false;
            $ulevel = UserModel::getUserLevel($user);
            if ($ulevel[0]['level'] == '2') {

                switch (1) {
                    case  $aloPopulation:
                        $res = AdminModel::getPreviousAllocation('A_aloPopulation');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case  $aloMoney:
                        $res = AdminModel::getPreviousAllocation('A_aloMoney');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloDowry:
                        $res = AdminModel::getPreviousAllocation('A_aloDowry');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloInsure:
                        $res = AdminModel::getPreviousAllocation('A_aloInsure');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloSandogh:
                        $res = AdminModel::getPreviousAllocation('A_aloSandogh');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloFarhangi:
                        $res = AdminModel::getPreviousAllocation('A_aloFarhangi');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloMaskan:
                        $res = AdminModel::getPreviousAllocation('A_aloMaskan');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloJob:
                        $res = AdminModel::getPreviousAllocation('A_aloJob');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloIncome:
                        $res = AdminModel::getPreviousAllocation('A_aloIncome');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloEkram:
                        $res = AdminModel::getPreviousAllocation('A_aloEkram');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                    case   $aloEmployee:
                        $res = AdminModel::getPreviousAllocation('A_aloEmployee');
                        if ($res != "") {
                            $flag = true;
                        }
                        break;
                }
            }
            if ($flag == false) {
                AdminModel::inserAllocations($user, $aloHemayat, $aloPopulation, $aloMoney, $aloDowry, $aloInsure, $aloSandogh, $aloFarhangi, $aloMaskan, $aloJob, $aloMosharekat, $aloIncome, $aloEkram, $aloEmployee);
                header("Location:" . getBaseUrl() . "page/allocationaccess");
            } else {
                header("Location:" . getBaseUrl() . "page/allocationaccess/error");
            }
        } catch (mysqli_sql_exception $e) {
               echo "<script>console.log('salam Aleykom')</script>";
            if ($e->getCode() == 1062) {
                echo "<script>alert('این رکورد قبلا ثبت شده است در صورت نیاز آن را ویرایش نمائید.');  window.location.href ='"  . getBaseUrl() . "page/allocationaccess';</script>";
            } else {
                throw $e; // in case it's any other error
            }
        }
    }
    /****************************************************************************************** */
    public  function rmovDowry()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveDowry($yr, $mn);
        header("Location:" . getBaseUrl() . "page/dowry");
    }
    /****************************************************************************************** */
    public  function rmovPopulation()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemovePopulation($yr, $mn);
        header("Location:" . getBaseUrl() . "page/population");
    }
    /****************************************************************************************** */
    public  function rmovMoney()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveMoney($yr, $mn);
        header("Location:" . getBaseUrl() . "page/money");
    }
    /****************************************************************************************** */
    public  function rmovInsure()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveInsure($yr, $mn);
        header("Location:" . getBaseUrl() . "page/insure");
    }
    /****************************************************************************************** */
    public  function rmovSandogh()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveSandogh($yr, $mn);
        header("Location:" . getBaseUrl() . "page/sandogh");
    }
    /****************************************************************************************** */
    public  function rmovFarhangi()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveFarhangi($yr, $mn);
        header("Location:" . getBaseUrl() . "page/farhangi");
    }
    /****************************************************************************************** */
    public  function rmovMaskan()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveMaskan($yr, $mn);
        header("Location:" . getBaseUrl() . "page/maskan");
    }
    /****************************************************************************************** */
    public  function rmovJob()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveJob($yr, $mn);
        header("Location:" . getBaseUrl() . "page/job");
    }
    /****************************************************************************************** */
    public  function rmovIncome()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveIncome($yr, $mn);
        header("Location:" . getBaseUrl() . "page/income");
    }
    /****************************************************************************************** */
    public  function rmovEkram()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveEkram($yr, $mn);
        header("Location:" . getBaseUrl() . "page/ekram");
    }
    /****************************************************************************************** */
    public  function rmovEmployee()
    {

        $goalrec = $_POST['goalrec'];
        $yr = substr($goalrec, 0, 4);
        $mn = substr($goalrec, 4, 2);
        AdminModel::RemoveEmployee($yr, $mn);
        header("Location:" . getBaseUrl() . "page/employee");
    }
    /****************************************************************************************** */
    public  function rmovNote()
    {
        $id = $_POST['goalrec'];
        AdminModel::RemoveNotes($id);
        header("Location:" . getBaseUrl() . "page/notification");
    }
}
