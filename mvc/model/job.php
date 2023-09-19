<? class JobModel
{
    static  function insertJob($jds, $jdl, $jdsum, $nj, $jsum, $jmoney, $flearn, $supervi, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into job (J_djSrch, J_djLeon, J_djSum, J_ndj, J_sum, J_leonMny, J_faniLearn, J_Supervision, J_Year, J_Month, J_user) values  ($jds, $jdl, $jdsum, $nj, $jsum, $jmoney, $flearn, $supervi, '$year','$month','$user')");
    }
    /*********************************************************************/
    static  function recentJobMonth()
    {
        $db = Db::getInstance();
        $sql = "select * from job order by J_Year desc, J_Month desc limit 1";
        $recentM = $db->query($sql);
        return $recentM;
    }
}
