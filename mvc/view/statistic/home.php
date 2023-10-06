<?
$currdt = StatisticsModel::getcurrdate();

$yer = $currdt[0]['Year'];
$mnth = $currdt[0]['Month'];

$aces['جمعیتی'] = getnameAccess('A_aloPopulation');
$aces['معیشت'] = getnameAccess('A_aloMoney');
$aces['جهیزیه'] = getnameAccess('A_aloDowry');
$aces['بیمه اجتماعی'] = getnameAccess('A_aloInsure');
$aces['صندوق'] = getnameAccess('A_aloSandogh');
$aces['فرهنگی'] = getnameAccess('A_aloFarhangi');
$aces['مسکن'] = getnameAccess('A_aloMaskan');
$aces['اشتغال'] = getnameAccess('A_aloJob');
$aces['درآمدهای مشارکت'] = getnameAccess('A_aloIncome');
$aces['اکرام'] = getnameAccess('A_aloEkram');
$aces['نیروی انسانی'] = getnameAccess('A_aloEmployee');


function getnameAccess($filed)
{
    $db = Db::getInstance();
    $sql = "select A_user from accesses where $filed=1";
    $acesUsers = $db->query($sql);
    if (sizeof($acesUsers) == 1) {
        return $acesUsers[0]['A_user'];
    } else if (sizeof($acesUsers) > 1) {
        $sql = "select user from users where level=2";
        $level2users = $db->query($sql);
        $level2arr = array();
        foreach ($level2users as $key => $value) {
            $level2arr[] = $value['user'];
        }
        foreach ($acesUsers as $key => $value) {

            if (in_array($value['A_user'], $level2arr)) {
                return $value['A_user'];
            }
        }
    } else {
        $rows = array();
        return $rows;
    }




    function nonAdminUser($var)
    {
        $db = Db::getInstance();
        $sql = "select user from users where level=2";
        $rows = $db->query($sql);
        $res = 0;
        foreach ($rows as $key => $value) {
            if ($value['user'] == 'yaser') {
                $res = true;
            }
        }
        echo $res;
    }
}



?>

<h4 class="my-2">به سامانه آمار کمیته امداد استان چهارمحال و بختیاری خوش آمدید</h4>
<div class="col-lg-3">
    <article class="customers-wrapper">
        <canvas id="customersChart" aria-label="Customers statistics" role="img"></canvas>

    </article>
    <article class="white-block">
        <div class="top-cat-title">
            <h3>سریعترین ثبت ماه <?= $mnth ?> سال <?= $yer ?></h3>
            <p>کل تعداد ثبت های هر ماه 11 سری آمار می باشد</p>
        </div>
        <ul class="top-cat-list">
            <?

            $row = getLastInsert('hemayat', 'Year', 'Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['user'];
            $insrtRecord[0]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('dowry', 'D_Year', 'D_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['D_user'];
            $insrtRecord[1]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('ekram', 'E_Year', 'E_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['E_user'];
            $insrtRecord[2]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('employee', 'Em_Year', 'Em_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['Em_user'];
            $insrtRecord[3]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('farhangi', 'F_Year', 'F_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['F_user'];
            $insrtRecord[4]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('incomes', 'In_Year', 'In_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['In_user'];
            $insrtRecord[5]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('insure', 'I_Year', 'I_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['I_user'];
            $insrtRecord[6]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('job', 'J_Year', 'J_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['J_user'];
            $insrtRecord[7]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('maskan', 'M_Year', 'M_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['M_user'];
            $insrtRecord[8]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('money', 'M_Year', 'M_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['M_user'];
            $insrtRecord[9]['datetime'] = $row[0]['datetime'];

            $row = getLastInsert('sandogh', 'S_Year', 'S_Month', $yer, $mnth);
            $insrtRecord[]['user'] = $row[0]['S_user'];
            $insrtRecord[10]['datetime'] = $row[0]['datetime'];


            // dump($insrtRecord);
            // dump($aces);
            function date_compare($a, $b)
            {
                $t1 = strtotime($a['datetime']);
                $t2 = strtotime($b['datetime']);
                return $t1 - $t2;
            }
            usort($insrtRecord, 'date_compare');
            // dump($insrtRecord);
            $i = 1;
            foreach ($insrtRecord as $key => $value) {
                $dt = date("Y-m-d", strtotime($value['datetime']));
                $dtparams = explode('-', $dt);
                $dtjalali = gregorian_to_jalali($dtparams[0], $dtparams[1], $dtparams[2], '-');
                $ti = date("H:i:s", strtotime($value['datetime']));

                $usr = strtolower($value['user']);
                $db = Db::getInstance();
                $sql = "select name,family from users where user='$usr'";
                $namefamily = $db->query($sql);

                $username = $namefamily[0]['name'] . " " . $namefamily[0]['family'];
                $scop = array_search($usr, $aces);
                if ($i <= 2) {
                    $color = "success";
                } else if ($i >= 3 && $i <= 5) {
                    $color = "warning";
                } else if ($i >= 6 && $i <= 8) {
                    $color = "blue";
                } else if ($i >= 9 && $i <= 11) {
                    $color = "danger";
                }


                echo '<script>$(".top-cat-list").append("<li><a href=##><div class=top-cat-list__title>' . $scop . '<span>' . $ti . '</span></div><div class=top-cat-list__subtitle>' . $username . '<span class=' . $color . '>' . $dtjalali . '</span></div></a><li>")</script>';
                // dump($value['user']);
                $i++;
            }
            ?>
        </ul>
    </article>
</div>

<script>

</script>