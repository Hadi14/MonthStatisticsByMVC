<? class MaskanModel
{
    static  function insertMaskan($fix, $wc, $buyc, $buyr, $crtc, $crtr, $tbm, $tsep, $sum, $year, $month, $user)
    {
        $db = Db::getInstance();
        $db->insert("insert into maskan (M_fix,M_wcGas,M_Bmc,M_Bmr,M_Cmc,M_Cmr,M_Tbm,M_TSep,M_sum,M_Year,M_Month,M_user) values  ($fix ,$wc ,$buyc ,$buyr ,$crtc ,$crtr ,$tbm ,$tsep ,$sum ,'$year','$month','$user')");
    }
}
