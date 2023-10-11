<?
if (getaces(6) == 0) {
    exit;
}
?>
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">آمار صندوق امداد ولایت ماه اخیر: <span id="recentYR"></span>-<span id="recentMn"></span></h2>
        <div class="row stat-cards">

            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">تعداد وام ازدواج ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="mrglnum" class="stat-cards-info__title">43,159</p>
                        </div>
                        <p class="stat-cards-info__progress mt-3">
                            <span class="stat-cards-info__profit success mx-1">
                                <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                            </span>
                            تغییر نسبت به ماه قبل
                        </p>
                    </div>
                </article>
            </div>
            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">مبلغ وام ازداج ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="mrglmoney" class="stat-cards-info__title">43,159</p>
                        </div>
                        <p class="stat-cards-info__progress mt-3">
                            <span class="stat-cards-info__profit success mx-1">
                                <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                            </span>
                            تغییر نسبت به ماه قبل
                        </p>
                    </div>
                </article>
            </div>
            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">تعداد کل وام تا قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="ln" class="stat-cards-info__title">43,159</p>
                        </div>
                        <p class="stat-cards-info__progress mt-3">
                            <span class="stat-cards-info__profit success mx-1">
                                <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                            </span>
                            تغییر نسبت به ماه قبل
                        </p>
                    </div>
                </article>
            </div>
            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">مبلغ کل وام ها تا قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="lm" class="stat-cards-info__title">43,159</p>
                        </div>
                        <p class="stat-cards-info__progress mt-3">
                            <span class="stat-cards-info__profit success mx-1">
                                <i data-feather="trending-up" aria-hidden="true"></i>4.07%
                            </span>
                            تغییر نسبت به ماه قبل
                        </p>
                    </div>
                </article>
            </div>
        </div>

        <!-- ******************** -->
        <div class="row">
            <div class="col-lg-9">
                <p id="disInsertNote"></p>
                <form id="ins_frm" action="<?= getBaseUrl() ?>sandogh/insertsandogh/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
                    <div class="row">

                        <label id="cy" class="currentDate badge rounded-pill text-bg-info col-md-2">سال: <?= $data['Year']; ?></label>
                        <label id="cm" class="currentDate badge rounded-pill text-bg-light col-md-2">ماه: <?= $data['Month']; ?></label>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">تعداد وام ازدواج پرداخت شده:</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="s_Mrgnum" type="number" class="form-control familyrural" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">مبلغ وام ازدواج پرداخت شده(میلیون ريال):</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="s_MrgMonry" type="number" class="form-control familyrural" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">تعداد کل وامهای پرداخت شده:</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="s_num" type="number" class="form-control familyrural" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">مبلغ کل وامهای پرداخت شده(میلیارد ريال):</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="s_mny" type="number" class="form-control familymen" placeholder="">
                            </div>
                        </div>

                        <div class="pt-4">
                            <input name="submit" type="submit" value="ارسال" class="btn btn-primary  w-100 f-800">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <table class="table table-striped">
                <p id="disEditNote"></p>
                <thead>
                    <tr>
                        <th scope="col">عنوان/ماه</th>
                        <th scope="col">ویرایش</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">تعداد وام ازدواج پرداخت شده</th>
                        <td><a class="editbtn" onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#dryModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">مبلغ وام ازدواج پرداخت شده(میلیون ريال)</th>
                        <td><a class="editbtn" onclick="editRecord('1')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row"></span>تعداد کل وام های پرداخت شده<span class="spanDescription">(وجوه اداره شده،حمایتی،ودیعه،درمان،فرهنگی،رسالت،مهر)</th>
                        <td><a class="editbtn" onclick="editRecord('2')" href="#" data-bs-toggle="modal" data-bs-target="#dryModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">مبلغ کل وام های پرداخت شده(میلیارد ريال)</th>
                        <td><a class="editbtn" onclick="editRecord('3')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">حذف رکورد</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</main>

<!--------------------------- other Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="dryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="sandoghfiledlabel1" for="otherrecipientName1" class="col-form-label">تعداد :</label>
                        <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                        <input id="goal" type="hidden">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editSandogh()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<!--------------------------- Remove modal  ------------------------------------------------------------------------->
<div class="modal fade" id="RemoveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">عملیات حذف</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= getBaseUrl() ?>admin/rmovDowry/" method="post">
                    <label for="">آیا از حذف رکورد مطمئن هستید؟</label>
                    <input id="goalrec" type="hidden" name="goalrec">
                    <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="بله">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خیر</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<script>
    $(document).ready(function() {
        recentMonth();
        getsandogh();
    });
    $(document).ready(function() {
        // console.log("DDDDDDDDD");
        $.ajax('/MonthStatisticsByMVC/statistics/getRemvstatus/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data['status'] == false && data['level'] == '2') {
                    $(".removebtn").mousedown(function() {
                        // console.log("mouse down event")
                        $(".removebtn").removeAttr('data-bs-toggle');
                        $(".removebtn").removeAttr('data-bs-target');
                        alert('عملیات حذف رکورد غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');
                        // console.log("sssssssssssss");
                    })
                }
            },
        });
    });

    function recentMonth() {
        $.ajax('/MonthStatisticsByMVC/sandogh/getrecentsandoghmonth/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                // cnsole.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#recentYR').text(dValues[4]);
                $('#recentMn').text(dValues[5]);
                $('#mrglnum').text(dValues[0]);
                $('#mrglmoney').text(dValues[1]);
                $('#ln').text(dValues[2]);
                $('#lm').text(dValues[3]);
            },
        });
    }

    function getsandogh() {
        $.ajax('/MonthStatisticsByMVC/sandogh/getAllSndgh/', {
            type: 'post',
            dataType: "json",
            data: {
                year: <?= $data['Year']; ?>
            },
            success: function(data) {
                fillPageTable(data);
            },
        });
    }

    function fillPageTable(data) {
        console.log(data);
        data.forEach(element => {
            const dValues = Object.values(element);
            $("<th class='newColumn'>" + dValues[4] + "-" + dValues[5] + "</th>").insertAfter($('thead tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[0] + "</td>").insertAfter($('tbody tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[1] + "</td>").insertAfter($('tbody tr th:nth(1)'));
            $("<td class='newColumn'>" + dValues[2] + "</td>").insertAfter($('tbody tr th:nth(2)'));
            $("<td class='newColumn'>" + dValues[3] + "</td>").insertAfter($('tbody tr th:nth(3)'));
        });
    }



    function editRecord(id) {
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/sandogh/getSndghGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'yr': y,
                'mn': m,
            },
            success: function(data) {
                // console.log(data[0]);
                if (data == null) {
                    alert("رکورد ماه اخیر قابل ویرایش نیست زیرا توسط شما ثبت نشده است لطفا به مدیر سیستم مراجعه کنید.");
                } else {
                    const dValues = Object.values(data[0]);
                    $('#goal').val(id);
                    if (id == 0) {
                        $('#otherrecipientName1').val(dValues[0]);
                        $('#sandoghfiledlabel1').text('تعداد وام ازدواج پرداخت شده:');
                    } else if (id == 1) {
                        $('#otherrecipientName1').val(dValues[1]);
                        $('#sandoghfiledlabel1').text('مبلغ وام ازدواج پرداخت شده(میلیون ريال):');
                    } else if (id == 2) {
                        $('#otherrecipientName1').val(dValues[2]);
                        $('#sandoghfiledlabel1').text('تعداد کل وام های پرداخت شده:');
                    } else if (id == 3) {
                        $('#otherrecipientName1').val(dValues[3]);
                        $('#sandoghfiledlabel1').text('مبلغ کل وام های پرداخت شده:');
                    }
                }
            },
        });
        $('#otherrecipientName1').addClass('goalfiled');
    }


    function editSandogh() {
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        gfield = $('#goal').val();
        $.ajax('/MonthStatisticsByMVC/sandogh/updateSndgh/' + gfield, {
            type: 'post',
            dataType: "json",
            data: {
                'goalf': +$('#otherrecipientName1').val(),
                'yr': y,
                'mn': m,
            },
            success: function(data) {
                // console.log(data);
                if (data['disableEdit'] == true) {
                    alert('عملیات ویرایش غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');
                } else {
                    alert('بروزرسانی با موفقیت انجام شد.');
                    $('.newColumn').remove();
                    getsandogh();
                }
            },
        });
    }
</script>