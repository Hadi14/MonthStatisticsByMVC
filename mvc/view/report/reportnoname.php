<?
if ($_SESSION['level'] != 0 && $_SESSION['level'] != 1  ) {
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
                </tr>
                <tr>
                    <td>روستایی</td>
                    <td id="rurf">عدم ثبت</td>
                </tr>
                <tr>
                    <td>زن سرپرست</td>
                    <td id="womf">عدم ثبت</td>
                </tr>
                <tr>
                    <td>مرد سرپرست</td>
                    <td id="menf">عدم ثبت</td>
                </tr>
                <tr>
                    <td>کل</td>
                    <td id="allf">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">نفرات</td>
                    <td id="allpeop">عدم ثبت</td>
                </tr>
                <tr>
                    <th rowspan="3" scope="row">2</th>
                    <td rowspan="3">خانوار سالمند</td>
                    <td colspan="3">معیشت بگیر شهری</td>
                    <td id="ocityf">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">معیشت بگیر روستایی</td>
                    <td id="orurf">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">جمع کل</td>
                    <td id="alloldf">عدم ثبت</td>
                </tr>
                <tr>
                    <th rowspan="3" scope="row">3</th>
                    <td rowspan="3">جمعیت سالمند</td>
                    <td colspan="3">معیشت بگیر شهری</td>
                    <td id="ocitypeop">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">معیشت بگیر روستایی</td>

                    <td id="orurpeop">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">جمع کل</td>
                    <td id="alloldpeop">عدم ثبت</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td colspan="4">کل کمک معیشت پرداخت شده از ابتدای سال (میلیارد ریال)</td>
                    <td id="Mmoney">عدم ثبت</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td colspan="4">تعداد جهیزیه پرداخت شده به مزدوجین</td>
                    <td id="downum">عدم ثبت</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td colspan="4">مبلغ جهیزیه و کمک هزینه ازدواج پرداخت شده(میلیارد ريال)</td>
                    <td id="dowmoney">عدم ثبت</td>
                </tr>
                <!-- <tr>
                    <th scope="row">7</th>
                    <td colspan="4">تعداد وام ازدواج پرداخت شده</td>
                    <td id="MrgLnum">عدم ثبت</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td colspan="4">مبلغ وام ازدواج پرداخت شده(میلیون ريال)</td>
                    <td id="MrgLmoney">عدم ثبت</td>
                </tr> -->
                <tr>
                    <!-- <th scope="row">9</th> -->
                    <th scope="row">7</th>
                    <td colspan="4">تعداد وام قرض الحسنه پرداخت شده به نیازمندان(وجوه اداره شده، حمایتی، ودیعه، درمان، فرهنگی، رسالت، مهر)</td>
                    <td id="leonnum">عدم ثبت</td>
                </tr>
                <tr>
                    <!-- <th scope="row">10</th> -->
                    <th scope="row">8</th>
                    <td colspan="4">مبلغ وام های قرض الحسنه پرداخت شده به نیازمندان(میلیارد ريال)</td>
                    <td id="leonmoney">عدم ثبت</td>
                </tr>
                <tr>
                    <!-- <th scope="row">11</th> -->
                    <th scope="row">9</th>
                    <td colspan="4">تعداد دانش آموزان و دانشجویان تحت حمایت</td>
                    <td id="stunum">عدم ثبت</td>
                </tr>
                <tr>
                    <!-- <th rowspan="10" scope="row">12</th> -->
                    <th rowspan="10" scope="row">10</th>
                    <td rowspan="10">فعالیتهای عمرانی انجام شده </td>
                    <td colspan="3">تعمیرات مسکن</td>
                    <td id="fix">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">احداث سرویس بهداشتی و گازکشی</td>
                    <td id="wc">عدم ثبت</td>
                </tr>
                <tr>
                    <td rowspan="2">خرید مسکن</td>
                    <td colspan="2">شهری</td>
                    <td id="buyc">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">روستایی</td>
                    <td id="buyrur">عدم ثبت</td>
                </tr>
                <tr>
                    <td rowspan="3">احداث مسکن</td>
                    <td colspan="2">شهری</td>
                    <td id="crtcity">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">روستایی</td>
                    <td id="crtrural">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">تفاهم نامه با بنیاد مستضعفان(ادامه سنوات قبل)</td>
                    <td id="bonyad">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">اجرای تفاهم نامه ساخت مسکن با سپاه(ادامه سنوات قبل)</td>
                    <td id="sepah">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3"> تفاهم نامه ساخت مسکن با بنیاد مسکن</td>
                    <td id="bonyadmskn">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">جمع</td>
                    <td id="allmaskan">عدم ثبت</td>
                </tr>
                <tr>
                    <!-- <th rowspan="8" scope="row">13</th> -->
                    <th rowspan="8" scope="row">11</th>
                    <td rowspan="8">فعالیتهای اشتغال</td>
                    <td rowspan="6">اشتغال ایجاد شده</td>
                    <td colspan="2">اشتغال مستقیم از طریق کاریابی</td>
                    <td id="dsicj">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">اشتغال مستقیم از طریق پرداخت تسهیلات</td>
                    <td id="dljob">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">جمع اشتغال مستقیم</td>
                    <td id="alldic">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">اشتغال غیر مستقیم ایجاد شده</td>
                    <td id="ndjob">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">جمع کل اشتغال(مستقیم و غیر مستقیم)</td>
                    <td id="alljob">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">مبلغ کل تسهیلات پرداخت شده(میلیارد ریال)</td>
                    <td id="jleonmoney">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">آموزش های مهارتی و فنی و حرفه ای </td>
                    <td id="flearn">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">طرح های اشتغال فعال تحت نظارت </td>
                    <td id="jsup">عدم ثبت</td>
                </tr>
                <tr>
                    <!-- <th rowspan="4" scope="row">14</th> -->
                    <th rowspan="4" scope="row">12</th>
                    <td rowspan="4">بیمه های اجتماعی</td>
                    <td colspan="3">تعداد زنان سرپرست خانوار</td>
                    <td id="inwom">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">تعداد مجریان طرح های اشتغال</td>
                    <td id="insjob">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">جمع</td>
                    <td id="insall">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">میزان هزینه(میلیون ریال)</td>
                    <td id="insmoney">عدم ثبت</td>
                </tr>
                <tr>
                    <!-- <th rowspan="8" scope="row">15</th> -->
                    <th rowspan="8" scope="row">13</th>
                    <td rowspan="8">مشارکتهای مردمی</td>
                    <td colspan="3">صدقات (میلیارد ریال)</td>
                    <td id="charity">عدم ثبت</td>
                </tr>
                <tr>
                    <td rowspan="3">اکرام</td>
                    <td colspan="2">مبلغ پرداختی حامیان به ایتام(میلیارد ریال )</td>
                    <td id="orphmoney">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">تعداد ایتام و محسنین دارای حامی</td>
                    <td id="orphnum">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="2">تعداد حامیان طرح اکرام(حقیقی و حقوقی)و محسنین</td>
                    <td id="supports">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">زکات و کفارات(میلیارد ریال)</td>
                    <td id="zakat">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">مبتنی بر نیاز(میلیارد ریال)</td>
                    <td id="basneed">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">میزان کل درآمدهای اختصاصی و وجوهات امانی(میلیارد ریال) </td>
                    <td id="allmoney">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">مراکز نیکوکاری(در جمع کل درآمدها لحاظ گردیده است-میلیارد ریال)</td>
                    <td id="marakezmoney">عدم ثبت</td>
                </tr>
                <tr>
                    <!-- <th rowspan="3" scope="row">16</th> -->
                    <th rowspan="3" scope="row">14</th>
                    <td rowspan="3">تعداد پرسنل</td>
                    <td colspan="3">رسمی</td>
                    <td id="offi">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">غیررسمی</td>
                    <td id="comp">عدم ثبت</td>
                </tr>
                <tr>
                    <td colspan="3">جمع کل</td>
                    <td id="esum">عدم ثبت</td>
                </tr>
            </tbody>
        </table>

    </main>
</div>
<footer>
    <div class="btns">
        <button id="printbtn" onclick="window.print();">چاپ فرم</button>
        <button id="printbtn" onclick="downloaWord('exportContent');">دانلود در قالب ورد</button>
        <a id="backbtn" href="<?= getBaseUrl() ?>page/reportselect">بازگشت</a>

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
                const dValues = Object.values(data[0][0]);
                $('#Mmoney').text(toLocalStr(dValues[0]));
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
                const dValues = Object.values(data[0][0]);
                $('#downum').text(toLocalStr(dValues[0]));
                $('#dowmoney').text(toLocalStr(dValues[1]));
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
                const dValues = Object.values(data[0][0]);
                $('#leonnum').text(toLocalStr(dValues[2]));
                $('#leonmoney').text(toLocalStr(dValues[3]));
                $('#MrgLnum').text(toLocalStr(dValues[0]));
                $('#MrgLmoney').text(toLocalStr(dValues[1]));
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
                const dValues = Object.values(data[0][0]);
                $('#stunum').text(toLocalStr(dValues[0]));
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
                const dValues = Object.values(data[0][0]);
                $('#inwom').text(toLocalStr(dValues[0]));
                $('#insjob').text(toLocalStr(dValues[1]));
                $('#insall').text(toLocalStr(dValues[2]));
                $('#insmoney').text(toLocalStr(dValues[3]));
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
                const dValues = Object.values(data[0][0]);
                $('#orphnum').text(toLocalStr(dValues[0]));
                $('#supports').text(toLocalStr(dValues[1]));
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
                const dValues = Object.values(data[0][0]);
                $('#offi').text(toLocalStr(dValues[0]));
                $('#comp').text(toLocalStr(dValues[1]));
                $('#esum').text(toLocalStr(dValues[2]));

            },
        });
    }
</script>