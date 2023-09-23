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
    /************************************************ */
    public  function getMnuGoalField()
    {
        $user = $_POST['ukey'];
        $goal = AdminModel::getMenuGoal($user);
        echo json_encode($goal);
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
    /****************************************************************************************** */
    public  function insertMenu()
    {
        $mname = $_POST['mname'];
        $mcode = $_POST['mcode'];
        AdminModel::inserMenus($mname, $mcode);
        header("Location:" . getBaseUrl() . "page/defineMenu");
    }
    /****************************************************************************************** */
    public  function insertAlloc()
    {
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
        AdminModel::inserAllocations($user, $aloHemayat, $aloPopulation, $aloMoney, $aloDowry, $aloInsure, $aloSandogh, $aloFarhangi, $aloMaskan, $aloJob, $aloMosharekat, $aloIncome, $aloEkram, $aloEmployee);
        header("Location:" . getBaseUrl() . "page/allocationaccess");
    }
}
