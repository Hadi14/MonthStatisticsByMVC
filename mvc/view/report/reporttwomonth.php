<?
if ($_SESSION['level'] != 0) {
    exit;
}
?>
<header>
    <?
    $yr = $_POST['year'];
    $mn1 = $_POST['month1'];
    $mn2 = $_POST['month2'];
    $mon1 = (int)$mn1;
    $mon2 = (int)$mn2;
    ?>
    <h5 class="digitfont">عملکرد مقایسه ای کمیته امداد امام خمینی(ره) استان چهارمحال و بختیاری سال <?= $yr ?></h5>
</header>
<main>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ردیف</th>
                <th colspan="4">عنوان فعالیت</th>
                <th>آمارماه<?= $mon1 ?></th>
                <th>آمارماه<?= $mon2 ?></th>
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
                <td id="citf2">عدم ثبت</td>
            </tr>
            <tr>
                <td>روستایی</td>
                <td id="rurf">عدم ثبت</td>
                <td id="rurf2">عدم ثبت</td>
            </tr>
            <tr>
                <td>زن سرپرست</td>
                <td id="womf">عدم ثبت</td>
                <td id="womf2">عدم ثبت</td>
            </tr>
            <tr>
                <td>مرد سرپرست</td>
                <td id="menf">عدم ثبت</td>
                <td id="menf2">عدم ثبت</td>
            </tr>
            <tr>
                <td>کل</td>
                <td id="allf">عدم ثبت</td>
                <td id="allf2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">نفرات</td>
                <td id="allpeop">عدم ثبت</td>
                <td id="allpeop2">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="3" scope="row">2</th>
                <td rowspan="3">خانوار سالمند</td>
                <td colspan="3">معیشت بگیر شهری</td>
                <td id="ocityf">عدم ثبت</td>
                <td id="ocityf2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">معیشت بگیر روستایی</td>
                <td id="orurf">عدم ثبت</td>
                <td id="orurf2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">جمع کل</td>
                <td id="alloldf">عدم ثبت</td>
                <td id="alloldf2">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="3" scope="row">3</th>
                <td rowspan="3">جمعیت سالمند</td>
                <td colspan="3">معیشت بگیر شهری</td>
                <td id="ocitypeop">عدم ثبت</td>
                <td id="ocitypeop2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">معیشت بگیر روستایی</td>

                <td id="orurpeop">عدم ثبت</td>
                <td id="orurpeop2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">جمع کل</td>
                <td id="alloldpeop">عدم ثبت</td>
                <td id="alloldpeop2">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td colspan="4">کل کمک معیشت پرداخت شده از ابتدای سال (میلیارد ریال)</td>
                <td id="Mmoney">عدم ثبت</td>
                <td id="Mmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td colspan="4">تعداد جهیزیه پرداخت شده به مزدوجین</td>
                <td id="downum">عدم ثبت</td>
                <td id="downum2">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td colspan="4">مبلغ جهیزیه و کمک هزینه ازدواج پرداخت شده(میلیارد ريال)</td>
                <td id="dowmoney">عدم ثبت</td>
                <td id="dowmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td colspan="4">تعداد وام ازدواج پرداخت شده</td>
                <td id="MrgLnum">عدم ثبت</td>
                <td id="MrgLnum2">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td colspan="4">مبلغ وام ازدواج پرداخت شده(میلیارد ريال)</td>
                <td id="MrgLmoney">عدم ثبت</td>
                <td id="MrgLmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td colspan="4">تعداد وام قرض الحسنه پرداخت شده به نیازمندان(وجوه اداره شده، حمایتی، ودیعه، درمان، فرهنگی، رسالت، مهر)</td>
                <td id="leonnum">عدم ثبت</td>
                <td id="leonnum2">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td colspan="4">مبلغ وام های قرض الحسنه پرداخت شده به نیازمندان(میلیارد ريال)</td>
                <td id="leonmoney">عدم ثبت</td>
                <td id="leonmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td colspan="4">تعداد دانش آموزان و دانشجویان تحت حمایت</td>
                <td id="stunum">عدم ثبت</td>
                <td id="stunum2">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="9" scope="row">12</th>
                <td rowspan="9">فعالیتهای عمرانی انجام شده </td>
                <td colspan="3">تعمیرات مسکن</td>
                <td id="fix">عدم ثبت</td>
                <td id="fix2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">احداث سرویس بهداشتی و گازکشی</td>
                <td id="wc">عدم ثبت</td>
                <td id="wc2">عدم ثبت</td>
            </tr>
            <tr>
                <td rowspan="2">خرید مسکن</td>
                <td colspan="2">شهری</td>
                <td id="buyc">عدم ثبت</td>
                <td id="buyc2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">روستایی</td>
                <td id="buyrur">عدم ثبت</td>
                <td id="buyrur2">عدم ثبت</td>
            </tr>
            <tr>
                <td rowspan="3">احداث مسکن</td>
                <td colspan="2">شهری</td>
                <td id="crtcity">عدم ثبت</td>
                <td id="crtcity2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">روستایی</td>
                <td id="crtrural">عدم ثبت</td>
                <td id="crtrural2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">تفاهم نامه با بنیاد مستضعفان(ادامه سنوات قبل)</td>
                <td id="bonyad">عدم ثبت</td>
                <td id="bonyad2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">اجرای تفاهم نامه ساخت مسکن با سپاه(ادامه سنوات قبل)</td>
                <td id="sepah">عدم ثبت</td>
                <td id="sepah2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">جمع</td>
                <td id="allmaskan">عدم ثبت</td>
                <td id="allmaskan2">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="8" scope="row">13</th>
                <td rowspan="8">فعالیتهای اشتغال</td>
                <td rowspan="6">اشتغال ایجاد شده</td>
                <td colspan="2">اشتغال مستقیم از طریق کاریابی</td>
                <td id="dsicj">عدم ثبت</td>
                <td id="dsicj2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">اشتغال مستقیم از طریق پرداخت تسهیلات</td>
                <td id="dljob">عدم ثبت</td>
                <td id="dljob2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">جمع اشتغال مستقیم</td>
                <td id="alldic">عدم ثبت</td>
                <td id="alldic2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">اشتغال غیر مستقیم ایجاد شده</td>
                <td id="ndjob">عدم ثبت</td>
                <td id="ndjob2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">جمع کل اشتغال(مستقیم و غیر مستقیم)</td>
                <td id="alljob">عدم ثبت</td>
                <td id="alljob2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">مبلغ کل تسهیلات پرداخت شده(میلیارد ریال)</td>
                <td id="jleonmoney">عدم ثبت</td>
                <td id="jleonmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">آموزش های مهارتی و فنی و حرفه ای </td>
                <td id="flearn">عدم ثبت</td>
                <td id="flearn2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">طرح های اشتغال فعال تحت نظارت </td>
                <td id="jsup">عدم ثبت</td>
                <td id="jsup2">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="4" scope="row">14</th>
                <td rowspan="4">بیمه های اجتماعی</td>
                <td colspan="3">تعداد زنان سرپرست خانوار</td>
                <td id="inwom">عدم ثبت</td>
                <td id="inwom2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">تعداد مجریان طرح های اشتغال</td>
                <td id="insjob">عدم ثبت</td>
                <td id="insjob2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">جمع</td>
                <td id="insall">عدم ثبت</td>
                <td id="insall2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">میزان هزینه(میلیون ریال)</td>
                <td id="insmoney">عدم ثبت</td>
                <td id="insmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="8" scope="row">15</th>
                <td rowspan="8">مشارکتهای مردمی</td>
                <td colspan="3">صدقات (میلیارد ریال)</td>
                <td id="charity">عدم ثبت</td>
                <td id="charity2">عدم ثبت</td>
            </tr>
            <tr>
                <td rowspan="3">اکرام</td>
                <td colspan="2">مبلغ پرداختی حامیان به ایتام(میلیارد ریال )</td>
                <td id="orphmoney">عدم ثبت</td>
                <td id="orphmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">تعداد ایتام و محسنین دارای حامی</td>
                <td id="orphnum">عدم ثبت</td>
                <td id="orphnum2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">تعداد حامیان طرح اکرام(حقیقی و حقوقی)و محسنین</td>
                <td id="supports">عدم ثبت</td>
                <td id="supports2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">زکات و کفارات (میلیارد ریال)</td>
                <td id="zakat">عدم ثبت</td>
                <td id="zakat2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">مبتنی بر نیاز</td>
                <td id="basneed">عدم ثبت</td>
                <td id="basneed2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">میزان کل درآمدهای اختصاصی و وجوهات امانی(میلیارد ریال) </td>
                <td id="allmoney">عدم ثبت</td>
                <td id="allmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">مراکز نیکوکاری(در جمع کل درآمدها لحاظ گردیده است-میلیارد ریال)</td>
                <td id="marakezmoney">عدم ثبت</td>
                <td id="marakezmoney2">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="3" scope="row">16</th>
                <td rowspan="3">تعداد پرسنل</td>
                <td colspan="3">رسمی</td>
                <td id="offi">عدم ثبت</td>
                <td id="offi2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">غیررسمی</td>
                <td id="comp">عدم ثبت</td>
                <td id="comp2">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">جمع کل</td>
                <td id="esum">عدم ثبت</td>
                <td id="esum2">عدم ثبت</td>
            </tr>
        </tbody>
    </table>

</main>
<footer>
    <div class="btns">
        <button id="printbtn" onclick="window.print();">چاپ فرم</button>
        <a id="backbtn" href="<?= getBaseUrl() ?>page/reportselect2month">بازگشت</a>
    </div>
</footer>

<script>
    $(document).ready(function() {
        population();
        population2();
        money();
        money2();

        dowry();
        dowry2();

        sandogh();
        sandogh2();

        farhangi();
        farhangi2();

        maskan();
        maskan2();

        job();
        job2();

        insure();
        insure2();

        mosharekat();
        mosharekat2();

        ekram();
        ekram2();

        employee();
        employee2();
    });
    // ***********************************************************
    function population() {
        let s = String(<?= json_encode($mn1); ?>);
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
                // let n = +dValues[0];
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
            },
        });
    }
    // ***********************************************************
    function population2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                // let n = +dValues[0];
                $('#citf2').text(toLocalStr(dValues[0]));
                $('#rurf2').text(toLocalStr(dValues[1]));
                $('#menf2').text(toLocalStr(dValues[2]));
                $('#womf2').text(toLocalStr(dValues[3]));
                $('#allf2').text(toLocalStr(dValues[4]));
                $('#allpeop2').text(toLocalStr(dValues[5]));
                $('#ocityf2').text(toLocalStr(dValues[6]));
                $('#orurf2').text(toLocalStr(dValues[7]));
                $('#alloldf2').text(toLocalStr(dValues[8]));
                $('#ocitypeop2').text(toLocalStr(dValues[9]));
                $('#orurpeop2').text(toLocalStr(dValues[10]));
                $('#alloldpeop2').text(toLocalStr(dValues[11]));
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
        let s = String(<?= json_encode($mn1); ?>);
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
                $('#Mmoney').text(toLocalStr(dValues[0]));
            },
        });
    }
    // ***********************************************************
    function money2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                $('#Mmoney2').text(toLocalStr(dValues[0]));
            },
        });
    }
    // ***********************************************************
    function dowry() {
        let s = String(<?= json_encode($mn1); ?>);
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
                $('#downum').text(toLocalStr(dValues[0]));
                $('#dowmoney').text(toLocalStr(dValues[1]));
            },
        });
    }
    // ***********************************************************
    function dowry2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                $('#downum2').text(toLocalStr(dValues[0]));
                $('#dowmoney2').text(toLocalStr(dValues[1]));
            },
        });
    }
    // ***********************************************************
    function sandogh() {
        let s = String(<?= json_encode($mn1); ?>);
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
                $('#leonnum').text(toLocalStr(dValues[2]));
                $('#leonmoney').text(toLocalStr(dValues[3]));
                $('#MrgLnum').text(toLocalStr(dValues[0]));
                $('#MrgLmoney').text(toLocalStr(dValues[1]));
            },
        });
    }
    // ***********************************************************
    function sandogh2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                $('#leonnum2').text(toLocalStr(dValues[2]));
                $('#leonmoney2').text(toLocalStr(dValues[3]));
                $('#MrgLnum2').text(toLocalStr(dValues[0]));
                $('#MrgLmoney2').text(toLocalStr(dValues[1]));
            },
        });
    }
    // ***********************************************************
    function farhangi() {
        let s = String(<?= json_encode($mn1); ?>);
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
                $('#stunum').text(toLocalStr(dValues[0]));
            },
        });
    }
    // ***********************************************************
    function farhangi2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                $('#stunum2').text(toLocalStr(dValues[0]));
            },
        });
    }
    // ***********************************************************
    function maskan() {
        let s = String(<?= json_encode($mn1); ?>);
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
                $('#fix').text(toLocalStr(dValues[0]));
                $('#wc').text(toLocalStr(dValues[1]));
                $('#buyc').text(toLocalStr(dValues[2]));
                $('#buyrur').text(toLocalStr(dValues[3]));
                $('#crtcity').text(toLocalStr(dValues[4]));
                $('#crtrural').text(toLocalStr(dValues[5]));
                $('#bonyad').text(toLocalStr(dValues[6]));
                $('#sepah').text(toLocalStr(dValues[7]));
                $('#allmaskan').text(toLocalStr(dValues[8]));
            },
        });
    }
    // ***********************************************************
    function maskan2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                $('#fix2').text(toLocalStr(dValues[0]));
                $('#wc2').text(toLocalStr(dValues[1]));
                $('#buyc2').text(toLocalStr(dValues[2]));
                $('#buyrur2').text(toLocalStr(dValues[3]));
                $('#crtcity2').text(toLocalStr(dValues[4]));
                $('#crtrural2').text(toLocalStr(dValues[5]));
                $('#bonyad2').text(toLocalStr(dValues[6]));
                $('#sepah2').text(toLocalStr(dValues[7]));
                $('#allmaskan2').text(toLocalStr(dValues[8]));
            },
        });
    }
    // ***********************************************************
    function job() {

        let s = String(<?= json_encode($mn1); ?>);
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
                $('#dsicj').text(toLocalStr(dValues[0]));
                $('#dljob').text(toLocalStr(dValues[1]));
                $('#alldic').text(toLocalStr(dValues[2]));
                $('#ndjob').text(toLocalStr(dValues[3]));
                $('#alljob').text(toLocalStr(dValues[4]));
                $('#jleonmoney').text(toLocalStr(dValues[5]));
                $('#flearn').text(toLocalStr(dValues[6]));
                $('#jsup').text(toLocalStr(dValues[7]));
            },
        });
    }
    // ***********************************************************
    function job2() {

        let s = String(<?= json_encode($mn2); ?>);
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
                $('#dsicj2').text(toLocalStr(dValues[0]));
                $('#dljob2').text(toLocalStr(dValues[1]));
                $('#alldic2').text(toLocalStr(dValues[2]));
                $('#ndjob2').text(toLocalStr(dValues[3]));
                $('#alljob2').text(toLocalStr(dValues[4]));
                $('#jleonmoney2').text(toLocalStr(dValues[5]));
                $('#flearn2').text(toLocalStr(dValues[6]));
                $('#jsup2').text(toLocalStr(dValues[7]));
            },
        });
    }
    // ***********************************************************
    function insure() {

        let s = String(<?= json_encode($mn1); ?>);
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
                $('#inwom').text(toLocalStr(dValues[0]));
                $('#insjob').text(toLocalStr(dValues[1]));
                $('#insall').text(toLocalStr(dValues[2]));
                $('#insmoney').text(toLocalStr(dValues[3]));
            },
        });
    }
    // ***********************************************************
    function insure2() {

        let s = String(<?= json_encode($mn2); ?>);
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
                $('#inwom2').text(toLocalStr(dValues[0]));
                $('#insjob2').text(toLocalStr(dValues[1]));
                $('#insall2').text(toLocalStr(dValues[2]));
                $('#insmoney2').text(toLocalStr(dValues[3]));
            },
        });
    }
    // ***********************************************************
    function mosharekat() {
        let s = String(<?= json_encode($mn1); ?>);
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
                $('#charity').text(toLocalStr(dValues[0]));
                $('#orphmoney').text(toLocalStr(dValues[1]));
                $('#zakat').text(toLocalStr(dValues[2]));
                $('#basneed').text(toLocalStr(dValues[3]));
                $('#allmoney').text(toLocalStr(dValues[4]));
                $('#marakezmoney').text(toLocalStr(dValues[5]));
            },
        });
    }
    // ***********************************************************
    function mosharekat2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                $('#charity2').text(toLocalStr(dValues[0]));
                $('#orphmoney2').text(toLocalStr(dValues[1]));
                $('#zakat2').text(toLocalStr(dValues[2]));
                $('#basneed2').text(toLocalStr(dValues[3]));
                $('#allmoney2').text(toLocalStr(dValues[4]));
                $('#marakezmoney2').text(toLocalStr(dValues[5]));
            },
        });
    }
    // ***********************************************************
    function ekram() {
        let s = String(<?= json_encode($mn1); ?>);
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
                $('#orphnum').text(toLocalStr(dValues[0]));
                $('#supports').text(toLocalStr(dValues[1]));
            },
        });
    }
    // ***********************************************************
    function ekram2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                $('#orphnum2').text(toLocalStr(dValues[0]));
                $('#supports2').text(toLocalStr(dValues[1]));
            },
        });
    }
    // ***********************************************************
    function employee() {
        let s = String(<?= json_encode($mn1); ?>);
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
                $('#offi').text(toLocalStr(dValues[0]));
                $('#comp').text(toLocalStr(dValues[1]));
                $('#esum').text(toLocalStr(dValues[2]));

            },
        });
    }
    // ***********************************************************
    function employee2() {
        let s = String(<?= json_encode($mn2); ?>);
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
                $('#offi2').text(toLocalStr(dValues[0]));
                $('#comp2').text(toLocalStr(dValues[1]));
                $('#esum2').text(toLocalStr(dValues[2]));

            },
        });
    }
</script>