<header>
    <?
    $yr = $_POST['year'];
    $mn = $_POST['month'];
    ?>
    <h4 class="digitfont">عملکرد 5 ماهه کمیته امداد امام خمینی(ره) استان چهارمحال و بختیاری</h4>
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
            <tr>
                <th scope="row">7</th>
                <td colspan="4">تعداد وام ازدواج پرداخت شده</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td colspan="4">مبلغ وام ازدواج پرداخت شده(میلیارد ريال)</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td colspan="4">تعداد وام قرض الحسنه پرداخت شده به نیازمندان(وجوه اداره شده، حمایتی، ودیعه، درمان، فرهنگی، رسالت، مهر)</td>
                <td id="leonnum">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td colspan="4">مبلغ وام های قرض الحسنه پرداخت شده به نیازمندان(میلیارد ريال)</td>
                <td id="leonmoney">عدم ثبت</td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td colspan="4">تعداد دانش آموزان و دانشجویان تحت حمایت</td>
                <td id="stunum">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="8" scope="row">12</th>
                <td rowspan="8">فعالیتهای عمرانی انجام شده </td>
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
                <td colspan="3">جمع</td>
                <td id="allmaskan">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="8" scope="row">13</th>
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
                <th rowspan="4" scope="row">14</th>
                <td rowspan="4">بیمه های اجتماعی</td>
                <td colspan="3">تعداد زنان سرپرست خانوار</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">تعداد مجریان طرح های اشتغال</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">جمع</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">میزان هزینه(میلیون ریال)</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="8" scope="row">15</th>
                <td rowspan="8">مشارکتهای مردمی</td>
                <td colspan="3">صدقات (میلیارد ریال)</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td rowspan="3">اکرام</td>
                <td colspan="2">مبلغ پرداختی حامیان به ایتام(میلیارد ریال )</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">تعداد ایتام و محسنین دارای حامی</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="2">تعداد حامیان طرح اکرام(حقیقی و حقوقی)و محسنین</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">زکات و کفارات (میلیارد ریال)</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">مبتنی بر نیاز</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">میزان کل درآمدهای اختصاصی و وجوهات امانی(میلیارد ریال) </td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">مراکز نیکوکاری(در جمع کل درآمدها لحاظ گردیده است-میلیارد ریال)</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <th rowspan="3" scope="row">16</th>
                <td rowspan="3">تعداد پرسنل</td>
                <td colspan="3">رسمی</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">غیررسمی</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
            <tr>
                <td colspan="3">جمع کل</td>
                <td id="BBBBBB">عدم ثبت</td>
            </tr>
        </tbody>
    </table>

</main>
<footer>
    <button id="printbtn" onclick="window.print();">چاپ فرم</button>
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
                $('#citf').text(dValues[0]);
                $('#rurf').text(dValues[1]);
                $('#menf').text(dValues[2]);
                $('#womf').text(dValues[3]);
                $('#allf').text(dValues[4]);
                $('#allpeop').text(dValues[5]);
                $('#ocityf').text(dValues[6]);
                $('#orurf').text(dValues[7]);
                $('#alloldf').text(dValues[8]);
                $('#ocitypeop').text(dValues[9]);
                $('#orurpeop').text(dValues[10]);
                $('#alloldpeop').text(dValues[11]);
            },
        });
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
                $('#Mmoney').text(dValues[0]);
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
                $('#downum').text(dValues[0]);
                $('#dowmoney').text(dValues[1]);
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
                $('#leonnum').text(dValues[0]);
                $('#leonmoney').text(dValues[1]);
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
                $('#stunum').text(dValues[0]);
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
                $('#fix').text(dValues[0]);
                $('#wc').text(dValues[1]);
                $('#buyc').text(dValues[2]);
                $('#buyrur').text(dValues[3]);
                $('#crtcity').text(dValues[4]);
                $('#crtrural').text(dValues[5]);
                $('#bonyad').text(dValues[6]);
                $('#allmaskan').text(dValues[7]);
            },
        });
    }
    // ***********************************************************
    function job() {
        // insure();
        // mosharekat();
        // employee();
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
                $('#dsicj').text(dValues[0]);
                $('#dljob').text(dValues[1]);
                $('#alldic').text(dValues[2]);
                $('#ndjob').text(dValues[3]);
                $('#alljob').text(dValues[4]);
                $('#jleonmoney').text(dValues[5]);
                $('#flearn').text(dValues[6]);
                $('#jsup').text(dValues[7]);
            },
        });
    }
    // ***********************************************************
    function insure() {

        // let s = String(<?= json_encode($mn); ?>);
        // $.ajax('/MonthStatisticsByMVC/report/getSelectedJBRpt/', {
        //     type: 'post',
        //     dataType: "json",
        //     data: {
        //         year: <?= $yr; ?>,
        //         month: s
        //     },
        //     success: function(data) {
        //         // console.log(data);
        //         const dValues = Object.values(data[0]);
        //         $('#dsicj').text(dValues[0]);
        //         $('#dljob').text(dValues[1]);
        //         $('#alldic').text(dValues[2]);
        //         $('#ndjob').text(dValues[3]);
        //         $('#alljob').text(dValues[4]);
        //         $('#jleonmoney').text(dValues[5]);
        //         $('#flearn').text(dValues[6]);
        //         $('#jsup').text(dValues[7]);
        //     },
        // });
    }
    // ***********************************************************
    function mosharekat() {

        // let s = String(<?= json_encode($mn); ?>);
        // $.ajax('/MonthStatisticsByMVC/report/getSelectedJBRpt/', {
        //     type: 'post',
        //     dataType: "json",
        //     data: {
        //         year: <?= $yr; ?>,
        //         month: s
        //     },
        //     success: function(data) {
        //         // console.log(data);
        //         const dValues = Object.values(data[0]);
        //         $('#dsicj').text(dValues[0]);
        //         $('#dljob').text(dValues[1]);
        //         $('#alldic').text(dValues[2]);
        //         $('#ndjob').text(dValues[3]);
        //         $('#alljob').text(dValues[4]);
        //         $('#jleonmoney').text(dValues[5]);
        //         $('#flearn').text(dValues[6]);
        //         $('#jsup').text(dValues[7]);
        //     },
        // });
    }
    // ***********************************************************
    function employee() {

        // let s = String(<?= json_encode($mn); ?>);
        // $.ajax('/MonthStatisticsByMVC/report/getSelectedJBRpt/', {
        //     type: 'post',
        //     dataType: "json",
        //     data: {
        //         year: <?= $yr; ?>,
        //         month: s
        //     },
        //     success: function(data) {
        //         // console.log(data);
        //         const dValues = Object.values(data[0]);
        //         $('#dsicj').text(dValues[0]);
        //         $('#dljob').text(dValues[1]);
        //         $('#alldic').text(dValues[2]);
        //         $('#ndjob').text(dValues[3]);
        //         $('#alljob').text(dValues[4]);
        //         $('#jleonmoney').text(dValues[5]);
        //         $('#flearn').text(dValues[6]);
        //         $('#jsup').text(dValues[7]);
        //     },
        // });
    }
</script>