<?
if ($_SESSION['level'] != 0) {
    exit;
}
?>
<div id="exportContent">
<header>
    <?
    $yr = $_POST['year'];
    $mn = $_POST['month'];
    $mon = (int)$mn;
    ?>
    <h5 class="digitfont">عملکرد <?= $mon ?> ماهه کمیته امداد امام خمینی(ره) استان چهارمحال و بختیاری سال <?= $yr ?></h5>
</header>
<main>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ردیف</th>
                <th colspan="4">عنوان فعالیت</th>
                <th>عملکرد</th>
                <th>ثبت کننده</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th rowspan="6" scope="row">1</th>
                <td rowspan="6">مددجویان تحت حمایت</td>
                <td rowspan="6">کل معیشت بگیر</td>
                <td rowspan="5">خانوار</td>
                <td>شهری</td>
                <td id="citf">عدم ثبت</td>
                <td id="u_citf">NoUser</td>
            </tr>
            <tr>
                <td>روستایی</td>
                <td id="rurf">عدم ثبت</td>
                <td id="u_rurf">NoUser</td>
            </tr>
            <tr>
                <td>زن سرپرست</td>
                <td id="womf">عدم ثبت</td>
                <td id="u_womf">NoUser</td>
            </tr>
            <tr>
                <td>مرد سرپرست</td>
                <td id="menf">عدم ثبت</td>
                <td id="u_menf">NoUser</td>
            </tr>
            <tr>
                <td>کل</td>
                <td id="allf">عدم ثبت</td>
                <td id="u_allf">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">نفرات</td>
                <td id="allpeop">عدم ثبت</td>
                <td id="u_allpeop">NoUser</td>
            </tr>
            <tr>
                <th rowspan="3" scope="row">2</th>
                <td rowspan="3">خانوار سالمند</td>
                <td colspan="3">معیشت بگیر شهری</td>
                <td id="ocityf">عدم ثبت</td>
                <td id="u_ocityf">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">معیشت بگیر روستایی</td>
                <td id="orurf">عدم ثبت</td>
                <td id="u_orurf">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">جمع کل</td>
                <td id="alloldf">عدم ثبت</td>
                <td id="u_alloldf">NoUser</td>
            </tr>
            <tr>
                <th rowspan="3" scope="row">3</th>
                <td rowspan="3">جمعیت سالمند</td>
                <td colspan="3">معیشت بگیر شهری</td>
                <td id="ocitypeop">عدم ثبت</td>
                <td id="u_ocitypeop">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">معیشت بگیر روستایی</td>
                <td id="orurpeop">عدم ثبت</td>
                <td id="u_orurpeop">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">جمع کل</td>
                <td id="alloldpeop">عدم ثبت</td>
                <td id="u_alloldpeop">NoUser</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td colspan="4">کل کمک معیشت پرداخت شده از ابتدای سال (میلیارد ریال)</td>
                <td id="Mmoney">عدم ثبت</td>
                <td id="u_Mmoney">NoUser</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td colspan="4">تعداد جهیزیه پرداخت شده به مزدوجین</td>
                <td id="downum">عدم ثبت</td>
                <td id="u_downum">NoUser</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td colspan="4">مبلغ جهیزیه و کمک هزینه ازدواج پرداخت شده(میلیارد ريال)</td>
                <td id="dowmoney">عدم ثبت</td>
                <td id="u_dowmoney">NoUser</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td colspan="4">تعداد وام ازدواج پرداخت شده</td>
                <td id="MrgLnum">عدم ثبت</td>
                <td id="u_MrgLnum">NoUser</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td colspan="4">مبلغ وام ازدواج پرداخت شده(میلیارد ريال)</td>
                <td id="MrgLmoney">عدم ثبت</td>
                <td id="u_MrgLmoney">NoUser</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td colspan="4">تعداد وام قرض الحسنه پرداخت شده به نیازمندان(وجوه اداره شده، حمایتی، ودیعه، درمان، فرهنگی، رسالت، مهر)</td>
                <td id="leonnum">عدم ثبت</td>
                <td id="u_leonnum">NoUser</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td colspan="4">مبلغ وام های قرض الحسنه پرداخت شده به نیازمندان(میلیارد ريال)</td>
                <td id="leonmoney">عدم ثبت</td>
                <td id="u_leonmoney">NoUser</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td colspan="4">تعداد دانش آموزان و دانشجویان تحت حمایت</td>
                <td id="stunum">عدم ثبت</td>
                <td id="u_stunum">NoUser</td>
            </tr>
            <tr>
                <th rowspan="9" scope="row">12</th>
                <td rowspan="9">فعالیتهای عمرانی انجام شده </td>
                <td colspan="3">تعمیرات مسکن</td>
                <td id="fix">عدم ثبت</td>
                <td id="u_fix">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">احداث سرویس بهداشتی و گازکشی</td>
                <td id="wc">عدم ثبت</td>
                <td id="u_wc">NoUser</td>
            </tr>
            <tr>
                <td rowspan="2">خرید مسکن</td>
                <td colspan="2">شهری</td>
                <td id="buyc">عدم ثبت</td>
                <td id="u_buyc">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">روستایی</td>
                <td id="buyrur">عدم ثبت</td>
                <td id="u_buyrur">NoUser</td>
            </tr>
            <tr>
                <td rowspan="3">احداث مسکن</td>
                <td colspan="2">شهری</td>
                <td id="crtcity">عدم ثبت</td>
                <td id="u_crtcity">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">روستایی</td>
                <td id="crtrural">عدم ثبت</td>
                <td id="u_crtrural">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">تفاهم نامه با بنیاد مستضعفان(ادامه سنوات قبل)</td>
                <td id="bonyad">عدم ثبت</td>
                <td id="u_bonyad">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">اجرای تفاهم نامه ساخت مسکن با سپاه(ادامه سنوات قبل)</td>
                <td id="sepah">عدم ثبت</td>
                <td id="u_sepah">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">جمع</td>
                <td id="allmaskan">عدم ثبت</td>
                <td id="u_allmaskan">NoUser</td>
            </tr>
            <tr>
                <th rowspan="8" scope="row">13</th>
                <td rowspan="8">فعالیتهای اشتغال</td>
                <td rowspan="6">اشتغال ایجاد شده</td>
                <td colspan="2">اشتغال مستقیم از طریق کاریابی</td>
                <td id="dsicj">عدم ثبت</td>
                <td id="u_dsicj">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">اشتغال مستقیم از طریق پرداخت تسهیلات</td>
                <td id="dljob">عدم ثبت</td>
                <td id="u_dljob">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">جمع اشتغال مستقیم</td>
                <td id="alldic">عدم ثبت</td>
                <td id="u_alldic">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">اشتغال غیر مستقیم ایجاد شده</td>
                <td id="ndjob">عدم ثبت</td>
                <td id="u_ndjob">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">جمع کل اشتغال(مستقیم و غیر مستقیم)</td>
                <td id="alljob">عدم ثبت</td>
                <td id="u_alljob">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">مبلغ کل تسهیلات پرداخت شده(میلیارد ریال)</td>
                <td id="jleonmoney">عدم ثبت</td>
                <td id="u_jleonmoney">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">آموزش های مهارتی و فنی و حرفه ای </td>
                <td id="flearn">عدم ثبت</td>
                <td id="u_flearn">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">طرح های اشتغال فعال تحت نظارت </td>
                <td id="jsup">عدم ثبت</td>
                <td id="u_jsup">NoUser</td>
            </tr>
            <tr>
                <th rowspan="4" scope="row">14</th>
                <td rowspan="4">بیمه های اجتماعی</td>
                <td colspan="3">تعداد زنان سرپرست خانوار</td>
                <td id="inwom">عدم ثبت</td>
                <td id="u_inwom">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">تعداد مجریان طرح های اشتغال</td>
                <td id="insjob">عدم ثبت</td>
                <td id="u_insjob">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">جمع</td>
                <td id="insall">عدم ثبت</td>
                <td id="u_insall">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">میزان هزینه(میلیون ریال)</td>
                <td id="insmoney">عدم ثبت</td>
                <td id="u_insmoney">NoUser</td>
            </tr>
            <tr>
                <th rowspan="8" scope="row">15</th>
                <td rowspan="8">مشارکتهای مردمی</td>
                <td colspan="3">صدقات (میلیارد ریال)</td>
                <td id="charity">عدم ثبت</td>
                <td id="u_charity">NoUser</td>
            </tr>
            <tr>
                <td rowspan="3">اکرام</td>
                <td colspan="2">مبلغ پرداختی حامیان به ایتام(میلیارد ریال )</td>
                <td id="orphmoney">عدم ثبت</td>
                <td id="u_orphmoney">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">تعداد ایتام و محسنین دارای حامی</td>
                <td id="orphnum">عدم ثبت</td>
                <td id="u_orphnum">NoUser</td>
            </tr>
            <tr>
                <td colspan="2">تعداد حامیان طرح اکرام(حقیقی و حقوقی)و محسنین</td>
                <td id="supports">عدم ثبت</td>
                <td id="u_supports">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">زکات و کفارات (میلیارد ریال)</td>
                <td id="zakat">عدم ثبت</td>
                <td id="u_zakat">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">مبتنی بر نیاز</td>
                <td id="basneed">عدم ثبت</td>
                <td id="u_basneed">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">میزان کل درآمدهای اختصاصی و وجوهات امانی(میلیارد ریال) </td>
                <td id="allmoney">عدم ثبت</td>
                <td id="u_allmoney">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">مراکز نیکوکاری(در جمع کل درآمدها لحاظ گردیده است-میلیارد ریال)</td>
                <td id="marakezmoney">عدم ثبت</td>
                <td id="u_marakezmoney">NoUser</td>
            </tr>
            <tr>
                <th rowspan="3" scope="row">16</th>
                <td rowspan="3">تعداد پرسنل</td>
                <td colspan="3">رسمی</td>
                <td id="offi">عدم ثبت</td>
                <td id="u_offi">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">غیررسمی</td>
                <td id="comp">عدم ثبت</td>
                <td id="u_comp">NoUser</td>
            </tr>
            <tr>
                <td colspan="3">جمع کل</td>
                <td id="esum">عدم ثبت</td>
                <td id="u_esum">NoUser</td>
            </tr>
        </tbody>
    </table>

</main>
</div>
<footer>
    <div class="btns">
        <button id="printbtn" onclick="window.print();">چاپ فرم</button>
        <button id="printbtn" onclick="downloaWord('exportContent');">دانلود در قالب ورد</button>
        <a id="backbtn" href="<?= getBaseUrl() ?>page/reportselectwithname">بازگشت</a>
    </div>
</footer>

<script>
    $(document).ready(function() {
        population();
        money();
        dowry();
        sandogh();
        farhangi();
        maskan();
        job();
        insure();
        mosharekat();
        ekram();
        employee();
    });
    // ***********************************************************
    function population() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getPopSelectedRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[14];

                $('#citf').text(toLocalStr(dValues[0]));
                $('#rurf').text(toLocalStr(dValues[1]));
                $('#menf').text(toLocalStr(dValues[2]));
                $('#womf').text(toLocalStr(dValues[3]));
                $('#allf').text(toLocalStr(dValues[4]));
                $('#allpeop').text(toLocalStr(dValues[5]));
                $('#ocityf').text(toLocalStr(dValues[6]));
                $('#orurf').text(toLocalStr(dValues[7]));
                $('#alloldf').text(toLocalStr(dValues[8]));
                $('#ocitypeop').text(toLocalStr(dValues[9]));
                $('#orurpeop').text(toLocalStr(dValues[10]));
                $('#alloldpeop').text(toLocalStr(dValues[11]));


                $('#u_citf').text(un);
                $('#u_rurf').text(un);
                $('#u_menf').text(un);
                $('#u_womf').text(un);
                $('#u_allf').text(un);
                $('#u_allpeop').text(un);
                $('#u_ocityf').text(un);
                $('#u_orurf').text(un);
                $('#u_alloldf').text(un);
                $('#u_ocitypeop').text(un);
                $('#u_orurpeop').text(un);
                $('#u_alloldpeop').text(un);
            },
        });
    }
    // ***********************************************************
    function toLocalStr(n) {
        num = +n;
        return num.toLocaleString("en-US");
    }
    // ***********************************************************
    function money() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedMnyRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[3];
                $('#Mmoney').text(toLocalStr(dValues[0]));
                $('#u_Mmoney').text(un);
            },
        });
    }
    // ***********************************************************
    function dowry() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedDwyRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[4];

                $('#downum').text(toLocalStr(dValues[0]));
                $('#dowmoney').text(toLocalStr(dValues[1]));

                $('#u_downum').text(un);
                $('#u_dowmoney').text(un);
            },
        });
    }
    // ***********************************************************
    function sandogh() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedSndghRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[6];

                $('#leonnum').text(toLocalStr(dValues[2]));
                $('#leonmoney').text(toLocalStr(dValues[3]));
                $('#MrgLnum').text(toLocalStr(dValues[0]));
                $('#MrgLmoney').text(toLocalStr(dValues[1]));


                $('#u_leonnum').text(un);
                $('#u_leonmoney').text(un);
                $('#u_MrgLnum').text(un);
                $('#u_MrgLmoney').text(un);
            },
        });
    }
    // ***********************************************************
    function farhangi() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedStuRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[3];
                $('#stunum').text(toLocalStr(dValues[0]));
                $('#u_stunum').text(un);
            },
        });
    }
    // ***********************************************************
    function maskan() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedMsknRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[11];

                $('#fix').text(toLocalStr(dValues[0]));
                $('#wc').text(toLocalStr(dValues[1]));
                $('#buyc').text(toLocalStr(dValues[2]));
                $('#buyrur').text(toLocalStr(dValues[3]));
                $('#crtcity').text(toLocalStr(dValues[4]));
                $('#crtrural').text(toLocalStr(dValues[5]));
                $('#bonyad').text(toLocalStr(dValues[6]));
                $('#sepah').text(toLocalStr(dValues[7]));
                $('#allmaskan').text(toLocalStr(dValues[8]));


                $('#u_fix').text(un);
                $('#u_wc').text(un);
                $('#u_buyc').text(un);
                $('#u_buyrur').text(un);
                $('#u_crtcity').text(un);
                $('#u_crtrural').text(un);
                $('#u_bonyad').text(un);
                $('#u_sepah').text(un);
                $('#u_allmaskan').text(un);
            },
        });
    }
    // ***********************************************************
    function job() {

        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedJBRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[10];

                $('#dsicj').text(toLocalStr(dValues[0]));
                $('#dljob').text(toLocalStr(dValues[1]));
                $('#alldic').text(toLocalStr(dValues[2]));
                $('#ndjob').text(toLocalStr(dValues[3]));
                $('#alljob').text(toLocalStr(dValues[4]));
                $('#jleonmoney').text(toLocalStr(dValues[5]));
                $('#flearn').text(toLocalStr(dValues[6]));
                $('#jsup').text(toLocalStr(dValues[7]));

                $('#u_dsicj').text(un);
                $('#u_dljob').text(un);
                $('#u_alldic').text(un);
                $('#u_ndjob').text(un);
                $('#u_alljob').text(un);
                $('#u_jleonmoney').text(un);
                $('#u_flearn').text(un);
                $('#u_jsup').text(un);
            },
        });
    }
    // ***********************************************************
    function insure() {

        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedInsuRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[6];

                $('#inwom').text(toLocalStr(dValues[0]));
                $('#insjob').text(toLocalStr(dValues[1]));
                $('#insall').text(toLocalStr(dValues[2]));
                $('#insmoney').text(toLocalStr(dValues[3]));


                $('#u_inwom').text(un);
                $('#u_insjob').text(un);
                $('#u_insall').text(un);
                $('#u_insmoney').text(un);
            },
        });
    }
    // ***********************************************************
    function mosharekat() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedIncmRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[8];

                $('#charity').text(toLocalStr(dValues[0]));
                $('#orphmoney').text(toLocalStr(dValues[1]));
                $('#zakat').text(toLocalStr(dValues[2]));
                $('#basneed').text(toLocalStr(dValues[3]));
                $('#allmoney').text(toLocalStr(dValues[4]));
                $('#marakezmoney').text(toLocalStr(dValues[5]));


                $('#u_charity').text(un);
                $('#u_orphmoney').text(un);
                $('#u_zakat').text(un);
                $('#u_basneed').text(un);
                $('#u_allmoney').text(un);
                $('#u_marakezmoney').text(un);
            },
        });
    }
    // ***********************************************************
    function ekram() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedEkrmRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[4];

                $('#orphnum').text(toLocalStr(dValues[0]));
                $('#supports').text(toLocalStr(dValues[1]));

                $('#u_orphnum').text(un);
                $('#u_supports').text(un);
            },
        });
    }
    // ***********************************************************
    function employee() {
        let s = String(<?= json_encode($mn); ?>);
        $.ajax('/MonthStatisticsByMVC/report/getSelectedEmpRpt/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $yr; ?>,
                month: s
            },
            success: function(data) {
                // console.log(data);
                const dValues = Object.values(data[0]);
                let un = dValues[5];

                $('#offi').text(toLocalStr(dValues[0]));
                $('#comp').text(toLocalStr(dValues[1]));
                $('#esum').text(toLocalStr(dValues[2]));


                $('#u_offi').text(un);
                $('#u_comp').text(un);
                $('#u_esum').text(un);

            },
        });
    }
</script>