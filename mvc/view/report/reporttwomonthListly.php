<?
if ($_SESSION['level'] != 0) {
    exit;
}
?>
<div id="exportContent">
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
                    <th>آمارماه<?= $mon1 ?> <br> آمارماه<?= $mon2 ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th rowspan="6" scope="row">1</th>
                    <td rowspan="6">مددجویان تحت حمایت</td>
                    <td rowspan="6">کل معیشت بگیر</td>
                    <td rowspan="5">خانوار</td>
                    <td>شهری</td>
                    <td id="ListTD"><span id="citf">عدم ثبت</span><span id="citf2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td>روستایی</td>
                    <td id="ListTD"><span id="rurf">عدم ثبت</span><span id="rurf2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td>زن سرپرست</td>
                    <td id="ListTD"><span id="womf">عدم ثبت</span><span id="womf2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td>مرد سرپرست</td>
                    <td id="ListTD"><span id="menf">عدم ثبت</span><span id="menf2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td>کل</td>
                    <td id="ListTD"><span id="allf">عدم ثبت</span><span id="allf2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">نفرات</td>
                    <td id="ListTD"><span id="allpeop">عدم ثبت</span><span id="allpeop2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th rowspan="3" scope="row">2</th>
                    <td rowspan="3">خانوار سالمند</td>
                    <td colspan="3">معیشت بگیر شهری</td>
                    <td id="ListTD"><span id="ocityf">عدم ثبت</span><span id="ocityf2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">معیشت بگیر روستایی</td>
                    <td id="ListTD"><span id="orurf">عدم ثبت</span><span id="orurf2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">جمع کل</td>
                    <td id="ListTD"><span id="alloldf">عدم ثبت</span><span id="alloldf2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th rowspan="3" scope="row">3</th>
                    <td rowspan="3">جمعیت سالمند</td>
                    <td colspan="3">معیشت بگیر شهری</td>
                    <td id="ListTD"><span id="ocitypeop">عدم ثبت</span><span id="ocitypeop2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">معیشت بگیر روستایی</td>
                    <td id="ListTD"><span id="orurpeop">عدم ثبت</span><span id="orurpeop2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">جمع کل</td>
                    <td id="ListTD"><span id="alloldpeop">عدم ثبت</span><span id="alloldpeop2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td colspan="4">کل کمک معیشت پرداخت شده از ابتدای سال (میلیارد ریال)</td>
                    <td id="ListTD"><span id="Mmoney">عدم ثبت</span><span id="Mmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td colspan="4">تعداد جهیزیه پرداخت شده به مزدوجین</td>
                    <td id="ListTD"><span id="downum">عدم ثبت</span><span id="downum2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td colspan="4">مبلغ جهیزیه و کمک هزینه ازدواج پرداخت شده(میلیارد ريال)</td>
                    <td id="ListTD"><span id="dowmoney">عدم ثبت</span><span id="dowmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td colspan="4">تعداد وام ازدواج پرداخت شده</td>
                    <td id="ListTD"><span id="MrgLnum">عدم ثبت</span><span id="MrgLnum2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td colspan="4">مبلغ وام ازدواج پرداخت شده(میلیون ريال)</td>
                    <td id="ListTD"><span id="MrgLmoney">عدم ثبت</span><span id="MrgLmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td colspan="4">تعداد وام قرض الحسنه پرداخت شده به نیازمندان(وجوه اداره شده، حمایتی، ودیعه، درمان، فرهنگی، رسالت، مهر)</td>
                    <td id="ListTD"><span id="leonnum">عدم ثبت</span><span id="leonnum2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td colspan="4">مبلغ وام های قرض الحسنه پرداخت شده به نیازمندان(میلیارد ريال)</td>
                    <td id="ListTD"><span id="leonmoney">عدم ثبت</span><span id="leonmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td colspan="4">تعداد دانش آموزان و دانشجویان تحت حمایت</td>
                    <td id="ListTD"><span id="stunum">عدم ثبت</span><span id="stunum2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th rowspan="10" scope="row">12</th>
                    <td rowspan="10">فعالیتهای عمرانی انجام شده </td>
                    <td colspan="3">تعمیرات مسکن</td>
                    <td id="ListTD"><span id="fix">عدم ثبت</span><span id="fix2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">احداث سرویس بهداشتی و گازکشی</td>
                    <td id="ListTD"><span id="wc">عدم ثبت</span><span id="wc2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td rowspan="2">خرید مسکن</td>
                    <td colspan="2">شهری</td>
                    <td id="ListTD"><span id="buyc">عدم ثبت</span><span id="buyc2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">روستایی</td>
                    <td id="ListTD"><span id="buyrur">عدم ثبت</span><span id="buyrur2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td rowspan="3">احداث مسکن</td>
                    <td colspan="2">شهری</td>
                    <td id="ListTD"><span id="crtcity">عدم ثبت</span><span id="crtcity2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">روستایی</td>
                    <td id="ListTD"><span id="crtrural">عدم ثبت</span><span id="crtrural2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">تفاهم نامه با بنیاد مستضعفان(ادامه سنوات قبل)</td>
                    <td id="ListTD"><span id="bonyad">عدم ثبت</span><span id="bonyad2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">اجرای تفاهم نامه ساخت مسکن با سپاه(ادامه سنوات قبل)</td>
                    <td id="ListTD"><span id="sepah">عدم ثبت</span><span id="sepah2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3"> تفاهم نامه ساخت مسکن با بنیاد مسکن</td>
                    <td id="ListTD"><span id="bonyadmskn">عدم ثبت</span><span id="bonyadmskn2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">جمع</td>
                    <td id="ListTD"><span id="allmaskan">عدم ثبت</span><span id="allmaskan2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th rowspan="8" scope="row">13</th>
                    <td rowspan="8">فعالیتهای اشتغال</td>
                    <td rowspan="6">اشتغال ایجاد شده</td>
                    <td colspan="2">اشتغال مستقیم از طریق کاریابی</td>
                    <td id="ListTD"><span id="dsicj">عدم ثبت</span><span id="dsicj2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">اشتغال مستقیم از طریق پرداخت تسهیلات</td>
                    <td id="ListTD"><span id="dljob">عدم ثبت</span><span id="dljob2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">جمع اشتغال مستقیم</td>
                    <td id="ListTD"><span id="alldic">عدم ثبت</span><span id="alldic2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">اشتغال غیر مستقیم ایجاد شده</td>
                    <td id="ListTD"><span id="ndjob">عدم ثبت</span><span id="ndjob2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">جمع کل اشتغال(مستقیم و غیر مستقیم)</td>
                    <td id="ListTD"><span id="alljob">عدم ثبت</span><span id="alljob2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">مبلغ کل تسهیلات پرداخت شده(میلیارد ریال)</td>
                    <td id="ListTD"><span id="jleonmoney">عدم ثبت</span><span id="jleonmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">آموزش های مهارتی و فنی و حرفه ای </td>
                    <td id="ListTD"><span id="flearn">عدم ثبت</span><span id="flearn2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">طرح های اشتغال فعال تحت نظارت </td>
                    <td id="ListTD"><span id="jsup">عدم ثبت</span><span id="jsup2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th rowspan="4" scope="row">14</th>
                    <td rowspan="4">بیمه های اجتماعی</td>
                    <td colspan="3">تعداد زنان سرپرست خانوار</td>
                    <td id="ListTD"><span id="inwom">عدم ثبت</span><span id="inwom2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">تعداد مجریان طرح های اشتغال</td>
                    <td id="ListTD"><span id="insjob">عدم ثبت</span><span id="insjob2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">جمع</td>
                    <td id="ListTD"><span id="insall">عدم ثبت</span><span id="insall2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">میزان هزینه(میلیون ریال)</td>
                    <td id="ListTD"><span id="insmoney">عدم ثبت</span><span id="insmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th rowspan="8" scope="row">15</th>
                    <td rowspan="8">مشارکتهای مردمی</td>
                    <td colspan="3">صدقات (میلیارد ریال)</td>
                    <td id="ListTD"><span id="charity">عدم ثبت</span><span id="charity2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td rowspan="3">اکرام</td>
                    <td colspan="2">مبلغ پرداختی حامیان به ایتام(میلیارد ریال )</td>
                    <td id="ListTD"><span id="orphmoney">عدم ثبت</span><span id="orphmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">تعداد ایتام و محسنین دارای حامی</td>
                    <td id="ListTD"><span id="orphnum">عدم ثبت</span><span id="orphnum2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="2">تعداد حامیان طرح اکرام(حقیقی و حقوقی)و محسنین</td>
                    <td id="ListTD"><span id="supports">عدم ثبت</span><span id="supports2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">زکات و کفارات (میلیارد ریال)</td>
                    <td id="ListTD"><span id="zakat">عدم ثبت</span><span id="zakat2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">مبتنی بر نیاز</td>
                    <td id="ListTD"><span id="basneed">عدم ثبت</span><span id="basneed2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">میزان کل درآمدهای اختصاصی و وجوهات امانی(میلیارد ریال) </td>
                    <td id="ListTD"><span id="allmoney">عدم ثبت</span><span id="allmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">مراکز نیکوکاری(در جمع کل درآمدها لحاظ گردیده است-میلیارد ریال)</td>
                    <td id="ListTD"><span id="marakezmoney">عدم ثبت</span><span id="marakezmoney2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <th rowspan="3" scope="row">16</th>
                    <td rowspan="3">تعداد پرسنل</td>
                    <td colspan="3">رسمی</td>
                    <td id="ListTD"><span id="offi">عدم ثبت</span><span id="offi2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">غیررسمی</td>
                    <td id="ListTD"><span id="comp">عدم ثبت</span><span id="comp2">عدم ثبت</span></td>
                </tr>
                <tr>
                    <td colspan="3">جمع کل</td>
                    <td id="ListTD"><span id="esum">عدم ثبت</span><span id="esum2">عدم ثبت</span></td>
                </tr>
            </tbody>
        </table>

    </main>
</div>
<footer>
    <div class="btns">
        <button id="printbtn" onclick="window.print();">چاپ فرم</button>
        <button id="printbtn" onclick="downloaWord('exportContent');">دانلود در قالب ورد</button>
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
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
                popCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#Mmoney2').text(toLocalStr(dValues[0]));
                MoneyCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#downum2').text(toLocalStr(dValues[0]));
                $('#dowmoney2').text(toLocalStr(dValues[1]));
                dowryCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#leonnum2').text(toLocalStr(dValues[2]));
                $('#leonmoney2').text(toLocalStr(dValues[3]));
                $('#MrgLnum2').text(toLocalStr(dValues[0]));
                $('#MrgLmoney2').text(toLocalStr(dValues[1]));
                SandoghCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#stunum2').text(toLocalStr(dValues[0]));
                farhangiCompare();
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
                const dValues = Object.values(data[0][0]);
                $('#fix').text(toLocalStr(dValues[0]));
                $('#wc').text(toLocalStr(dValues[1]));
                $('#buyc').text(toLocalStr(dValues[2]));
                $('#buyrur').text(toLocalStr(dValues[3]));
                $('#crtcity').text(toLocalStr(dValues[4]));
                $('#crtrural').text(toLocalStr(dValues[5]));
                $('#bonyad').text(toLocalStr(dValues[6]));
                $('#sepah').text(toLocalStr(dValues[7]));
                $('#bonyadmskn').text(toLocalStr(dValues[8]));
                $('#allmaskan').text(toLocalStr(dValues[9]));
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
                const dValues = Object.values(data[0][0]);
                $('#fix2').text(toLocalStr(dValues[0]));
                $('#wc2').text(toLocalStr(dValues[1]));
                $('#buyc2').text(toLocalStr(dValues[2]));
                $('#buyrur2').text(toLocalStr(dValues[3]));
                $('#crtcity2').text(toLocalStr(dValues[4]));
                $('#crtrural2').text(toLocalStr(dValues[5]));
                $('#bonyad2').text(toLocalStr(dValues[6]));
                $('#sepah2').text(toLocalStr(dValues[7]));
                $('#bonyadmskn2').text(toLocalStr(dValues[8]));
                $('#allmaskan2').text(toLocalStr(dValues[9]));
                MaskanCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#dsicj2').text(toLocalStr(dValues[0]));
                $('#dljob2').text(toLocalStr(dValues[1]));
                $('#alldic2').text(toLocalStr(dValues[2]));
                $('#ndjob2').text(toLocalStr(dValues[3]));
                $('#alljob2').text(toLocalStr(dValues[4]));
                $('#jleonmoney2').text(toLocalStr(dValues[5]));
                $('#flearn2').text(toLocalStr(dValues[6]));
                $('#jsup2').text(toLocalStr(dValues[7]));
                JobCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#inwom2').text(toLocalStr(dValues[0]));
                $('#insjob2').text(toLocalStr(dValues[1]));
                $('#insall2').text(toLocalStr(dValues[2]));
                $('#insmoney2').text(toLocalStr(dValues[3]));
                InsureCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#charity2').text(toLocalStr(dValues[0]));
                $('#orphmoney2').text(toLocalStr(dValues[1]));
                $('#zakat2').text(toLocalStr(dValues[2]));
                $('#basneed2').text(toLocalStr(dValues[3]));
                $('#allmoney2').text(toLocalStr(dValues[4]));
                $('#marakezmoney2').text(toLocalStr(dValues[5]));
                IncomesCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#orphnum2').text(toLocalStr(dValues[0]));
                $('#supports2').text(toLocalStr(dValues[1]));
                EkramCompare();
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
                const dValues = Object.values(data[0][0]);
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
                const dValues = Object.values(data[0][0]);
                $('#offi2').text(toLocalStr(dValues[0]));
                $('#comp2').text(toLocalStr(dValues[1]));
                $('#esum2').text(toLocalStr(dValues[2]));
                employeeCompare()
            },
        });
    }

    function popCompare() {
        let citf1 = +$('#citf').text().replace(/,/g, "");
        let citf2 = +$('#citf2').text().replace(/,/g, "");
        (citf1 > citf2) ? $('#citf2').css('color', 'red'): 0;

        let rurf = +$('#rurf').text().replace(/,/g, "");
        let rurf2 = +$('#rurf2').text().replace(/,/g, "");
        (rurf > rurf2) ? $('#rurf2').css('color', 'red'): 0;

        let womf = +$('#womf').text().replace(/,/g, "");
        let womf2 = +$('#womf2').text().replace(/,/g, "");
        (womf > womf2) ? $('#womf2').css('color', 'red'): 0;

        let menf = +$('#menf').text().replace(/,/g, "");
        let menf2 = +$('#menf2').text().replace(/,/g, "");
        (menf > menf2) ? $('#menf2').css('color', 'red'): 0;

        let allf = +$('#allf').text().replace(/,/g, "");
        let allf2 = +$('#allf2').text().replace(/,/g, "");
        (allf > allf2) ? $('#allf2').css('color', 'red'): 0;

        let allpeop = +$('#allpeop').text().replace(/,/g, "");
        let allpeop2 = +$('#allpeop2').text().replace(/,/g, "");
        (allpeop > allpeop2) ? $('#allpeop2').css('color', 'red'): 0;

        let ocityf = +$('#ocityf').text().replace(/,/g, "");
        let ocityf2 = +$('#ocityf2').text().replace(/,/g, "");
        (ocityf > ocityf2) ? $('#ocityf2').css('color', 'red'): 0;

        let orurf = +$('#orurf').text().replace(/,/g, "");
        let orurf2 = +$('#orurf2').text().replace(/,/g, "");
        (orurf > orurf2) ? $('#orurf2').css('color', 'red'): 0;

        let alloldf = +$('#alloldf').text().replace(/,/g, "");
        let alloldf2 = +$('#alloldf2').text().replace(/,/g, "");
        (alloldf > alloldf2) ? $('#alloldf2').css('color', 'red'): 0;

        let ocitypeop = +$('#ocitypeop').text().replace(/,/g, "");
        let ocitypeop2 = +$('#ocitypeop2').text().replace(/,/g, "");
        (ocitypeop > ocitypeop2) ? $('#ocitypeop2').css('color', 'red'): 0;

        let orurpeop = +$('#orurpeop').text().replace(/,/g, "");
        let orurpeop2 = +$('#orurpeop2').text().replace(/,/g, "");
        (orurpeop > orurpeop2) ? $('#orurpeop2').css('color', 'red'): 0;

        let alloldpeop = +$('#alloldpeop').text().replace(/,/g, "");
        let alloldpeop2 = +$('#alloldpeop2').text().replace(/,/g, "");
        (alloldpeop > alloldpeop2) ? $('#alloldpeop2').css('color', 'red'): 0;
    }

    function MoneyCompare() {
        let Mmoney = +$('#Mmoney').text().replace(/,/g, "");
        let Mmoney2 = +$('#Mmoney2').text().replace(/,/g, "");
        (Mmoney > Mmoney2) ? $('#Mmoney2').css('color', 'red'): 0;
    }

    function dowryCompare() {
        let downum = +$('#downum').text().replace(/,/g, "");
        let downum2 = +$('#downum2').text().replace(/,/g, "");
        (downum > downum2) ? $('#downum2').css('color', 'red'): 0;

        let dowmoney = +$('#dowmoney').text().replace(/,/g, "");
        let dowmoney2 = +$('#dowmoney2').text().replace(/,/g, "");
        (dowmoney > dowmoney2) ? $('#dowmoney2').css('color', 'red'): 0;
    }

    function SandoghCompare() {
        let leonnum = +$('#leonnum').text().replace(/,/g, "");
        let leonnum2 = +$('#leonnum2').text().replace(/,/g, "");
        (leonnum > leonnum2) ? $('#leonnum2').css('color', 'red'): 0;

        let leonmoney = +$('#leonmoney').text().replace(/,/g, "");
        let leonmoney2 = +$('#leonmoney2').text().replace(/,/g, "");
        (leonmoney > leonmoney2) ? $('#leonmoney2').css('color', 'red'): 0;

        let MrgLnum = +$('#MrgLnum').text().replace(/,/g, "");
        let MrgLnum2 = +$('#MrgLnum2').text().replace(/,/g, "");
        (MrgLnum > MrgLnum2) ? $('#MrgLnum2').css('color', 'red'): 0;

        let MrgLmoney = +$('#MrgLmoney').text().replace(/,/g, "");
        let MrgLmoney2 = +$('#MrgLmoney2').text().replace(/,/g, "");
        (MrgLmoney > MrgLmoney2) ? $('#MrgLmoney2').css('color', 'red'): 0;
    }

    function farhangiCompare() {
        let stunum = +$('#stunum').text().replace(/,/g, "");
        let stunum2 = +$('#stunum2').text().replace(/,/g, "");
        (stunum > stunum2) ? $('#stunum2').css('color', 'red'): 0;
    }

    function MaskanCompare() {
        let fix = +$('#fix').text().replace(/,/g, "");
        let fix2 = +$('#fix2').text().replace(/,/g, "");
        (fix > fix2) ? $('#fix2').css('color', 'red'): 0;

        let wc = +$('#wc').text().replace(/,/g, "");
        let wc2 = +$('#wc2').text().replace(/,/g, "");
        (wc > wc2) ? $('#wc2').css('color', 'red'): 0;

        let buyc = +$('#buyc').text().replace(/,/g, "");
        let buyc2 = +$('#buyc2').text().replace(/,/g, "");
        (buyc > buyc2) ? $('#buyc2').css('color', 'red'): 0;

        let buyrur = +$('#buyrur').text().replace(/,/g, "");
        let buyrur2 = +$('#buyrur2').text().replace(/,/g, "");
        (buyrur > buyrur2) ? $('#buyrur2').css('color', 'red'): 0;

        let crtcity = +$('#crtcity').text().replace(/,/g, "");
        let crtcity2 = +$('#crtcity2').text().replace(/,/g, "");
        (crtcity > crtcity2) ? $('#crtcity2').css('color', 'red'): 0;

        let crtrural = +$('#crtrural').text().replace(/,/g, "");
        let crtrural2 = +$('#crtrural2').text().replace(/,/g, "");
        (crtrural > crtrural2) ? $('#crtrural2').css('color', 'red'): 0;

        let bonyad = +$('#bonyad').text().replace(/,/g, "");
        let bonyad2 = +$('#bonyad2').text().replace(/,/g, "");
        (bonyad > bonyad2) ? $('#bonyad2').css('color', 'red'): 0;

        let sepah = +$('#sepah').text().replace(/,/g, "");
        let sepah2 = +$('#sepah2').text().replace(/,/g, "");
        (sepah > sepah2) ? $('#sepah2').css('color', 'red'): 0;

        let bmskn = +$('#bonyadmskn').text().replace(/,/g, "");
        let bmskn2 = +$('#bonyadmskn2').text().replace(/,/g, "");
        (bmskn > bmskn2) ? $('#bonyadmskn2').css('color', 'red'): 0;

        let allmaskan = +$('#allmaskan').text().replace(/,/g, "");
        let allmaskan2 = +$('#allmaskan2').text().replace(/,/g, "");
        (allmaskan > allmaskan2) ? $('#allmaskan2').css('color', 'red'): 0;
    }

    function JobCompare() {
        let dsicj = +$('#dsicj').text().replace(/,/g, "");
        let dsicj2 = +$('#dsicj2').text().replace(/,/g, "");
        (dsicj > dsicj2) ? $('#dsicj2').css('color', 'red'): 0;

        let dljob = +$('#dljob').text().replace(/,/g, "");
        let dljob2 = +$('#dljob2').text().replace(/,/g, "");
        (dljob > dljob2) ? $('#dljob2').css('color', 'red'): 0;

        let alldic = +$('#alldic').text().replace(/,/g, "");
        let alldic2 = +$('#alldic2').text().replace(/,/g, "");
        (alldic > alldic2) ? $('#alldic2').css('color', 'red'): 0;

        let ndjob = +$('#ndjob').text().replace(/,/g, "");
        let ndjob2 = +$('#ndjob2').text().replace(/,/g, "");
        (ndjob > ndjob2) ? $('#ndjob2').css('color', 'red'): 0;

        let alljob = +$('#alljob').text().replace(/,/g, "");
        let alljob2 = +$('#alljob2').text().replace(/,/g, "");
        (alljob > alljob2) ? $('#alljob2').css('color', 'red'): 0;

        let jleonmoney = +$('#jleonmoney').text().replace(/,/g, "");
        let jleonmoney2 = +$('#jleonmoney2').text().replace(/,/g, "");
        (jleonmoney > jleonmoney2) ? $('#jleonmoney2').css('color', 'red'): 0;

        let flearn = +$('#flearn').text().replace(/,/g, "");
        let flearn2 = +$('#flearn2').text().replace(/,/g, "");
        (flearn > flearn2) ? $('#flearn2').css('color', 'red'): 0;

        let jsup = +$('#jsup').text().replace(/,/g, "");
        let jsup2 = +$('#jsup2').text().replace(/,/g, "");
        (jsup > jsup2) ? $('#jsup2').css('color', 'red'): 0;
    }



    function InsureCompare() {
        let inwom = +$('#inwom').text().replace(/,/g, "");
        let inwom2 = +$('#inwom2').text().replace(/,/g, "");
        (inwom > inwom2) ? $('#inwom2').css('color', 'red'): 0;

        let insjob = +$('#insjob').text().replace(/,/g, "");
        let insjob2 = +$('#insjob2').text().replace(/,/g, "");
        (insjob > insjob2) ? $('#insjob2').css('color', 'red'): 0;

        let insall = +$('#insall').text().replace(/,/g, "");
        let insall2 = +$('#insall2').text().replace(/,/g, "");
        (insall > insall2) ? $('#insall2').css('color', 'red'): 0;

        let insmoney = +$('#insmoney').text().replace(/,/g, "");
        let insmoney2 = +$('#insmoney2').text().replace(/,/g, "");
        (insmoney > insmoney2) ? $('#insmoney2').css('color', 'red'): 0;
    }

    function IncomesCompare() {

        let charity = +$('#charity').text().replace(/,/g, "");
        let charity2 = +$('#charity2').text().replace(/,/g, "");
        (charity > charity2) ? $('#charity2').css('color', 'red'): 0;

        let orphmoney = +$('#orphmoney').text().replace(/,/g, "");
        let orphmoney2 = +$('#orphmoney2').text().replace(/,/g, "");
        (orphmoney > orphmoney2) ? $('#orphmoney2').css('color', 'red'): 0;

        let zakat = +$('#zakat').text().replace(/,/g, "");
        let zakat2 = +$('#zakat2').text().replace(/,/g, "");
        (zakat > zakat2) ? $('#zakat2').css('color', 'red'): 0;

        let basneed = +$('#basneed').text().replace(/,/g, "");
        let basneed2 = +$('#basneed2').text().replace(/,/g, "");
        (basneed > basneed2) ? $('#basneed2').css('color', 'red'): 0;

        let allmoney = +$('#allmoney').text().replace(/,/g, "");
        let allmoney2 = +$('#allmoney2').text().replace(/,/g, "");
        (allmoney > allmoney2) ? $('#allmoney2').css('color', 'red'): 0;

        let marakezmoney = +$('#marakezmoney').text().replace(/,/g, "");
        let marakezmoney2 = +$('#marakezmoney2').text().replace(/,/g, "");
        (marakezmoney > marakezmoney2) ? $('#marakezmoney2').css('color', 'red'): 0;
    }

    function EkramCompare() {

        let orphnum = +$('#orphnum').text().replace(/,/g, "");
        let orphnum2 = +$('#orphnum2').text().replace(/,/g, "");
        (orphnum > orphnum2) ? $('#orphnum2').css('color', 'red'): 0;

        let supports = +$('#supports').text().replace(/,/g, "");
        let supports2 = +$('#supports2').text().replace(/,/g, "");
        (supports > supports2) ? $('#supports2').css('color', 'red'): 0;
    }



    function employeeCompare() {

        let offi = +$('#offi').text().replace(/,/g, "");
        let offi2 = +$('#offi2').text().replace(/,/g, "");
        (offi > offi2) ? $('#offi2').css('color', 'red'): 0;

        let comp = +$('#comp').text().replace(/,/g, "");
        let comp2 = +$('#comp2').text().replace(/,/g, "");
        (comp > comp2) ? $('#comp2').css('color', 'red'): 0;

        let esum1 = +$('#esum').text().replace(/,/g, "");
        let esum2 = +$('#esum2').text().replace(/,/g, "");
        (esum1 > esum2) ? $('#esum2').css('color', 'red'): 0;
    }
</script>