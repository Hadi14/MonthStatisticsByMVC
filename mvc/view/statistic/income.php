<?
if (getaces(11) == 0 && $_SESSION['level']!=0 && $_SESSION['level']!=1) {
    exit;
}
?>
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">آمار درآمدهای <span id="recentMn"></span> ماهه سال: <span id="recentYR"></span> (ماه اخیر)</h2>
        <div class="row stat-cards">

            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">درآمد صدقات تا ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="charity" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">مبلغ پرداختی حامیان به ایتام تا ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="orphan" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">مبلغ زکات و کفارات تا ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="zakat" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">مبلغ مبتنی بر نیاز تا ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="baseneed" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">میزان کل در آمدها تا ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="allincom" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">درآمد مراکز نیکوکاری تا ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="nikookari" class="stat-cards-info__title">43,159</p>
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
                <form id="ins_frm" action="<?= getBaseUrl() ?>income/insertIncomes/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
                    <div class="row">
                        <label id="cy" class="currentDate badge rounded-pill text-bg-info col-md-2">سال: <?= $data['Year']; ?></label>
                        <label id="cm" class="currentDate badge rounded-pill text-bg-light col-md-2">ماه: <?= $data['Month']; ?></label>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">صدقات(میلیارد ريال):</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="i_charity" type="number" class="form-control familyrural" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">پرداختی حامیان(میلیارد ريال):</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="i_Supports" type="number" class="form-control familymen" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">زکات و کفارات(میلیارد ريال):</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="i_zakat" type="number" class="form-control familymen" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">مبتنی برنیاز(میلیارد ريال):</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="i_bsNeed" type="number" class="form-control familymen" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">کل درآمدهای اختصاصی+و.امانی(میلیارد ريال):</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="i_allIncome" type="number" class="form-control familymen" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <label class="mt-3 mb-0" for="">مراکز نیکوکاری(میلیارد ريال):</label>
                            <div class="input-group pt-0 mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="i_Nikookari" type="number" class="form-control familymen" placeholder="">
                            </div>
                        </div>

                        <div class="pt-4">
                            <input name="submit" type="submit" value="ارسال" class="btn btn-primary  w-100 f-800">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-3"><span>سال جاری نمایش اطلاعات: </span><b id="curYear"></b></div>
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
                        <th scope="row">صدقات(میلیارد ریال)</th>
                        <td><a class="editbtn" onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#dryModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">مبلغ پرداختی حامیان به ایتام(میلیارد ریال)</th>
                        <td><a class="editbtn" onclick="editRecord('1')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">زکات و کفارات(میلیارد ریال)</th>
                        <td><a class="editbtn" onclick="editRecord('2')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">مبتنی بر نیاز(میلیارد ریال)</th>
                        <td><a class="editbtn" onclick="editRecord('3')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">کل درآمدها(میلیارد ریال)</th>
                        <td><a class="editbtn" onclick="editRecord('4')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">درآمد مراکز نیکوکاری(میلیارد ریال)</th>
                        <td><a class="editbtn" onclick="editRecord('5')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
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
                        <label id="incomefiledlabel1" for="otherrecipientName1" class="col-form-label">مبلغ :</label>
                        <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                        <input id="goal" type="hidden">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editIncome()">ویرایش</button>
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
                <form action="<?= getBaseUrl() ?>admin/rmovIncome/" method="post">
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
        getIncomes();
    });

    $(document).ready(function() {
        $.ajax('/MonthStatisticsByMVC/admin/getCurrentYear/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                $('#curYear').text(data[0]['value']);
            },
        });
    });

    $(document).on('mousedown', '.removebtn', function() {
        $.ajax('/MonthStatisticsByMVC/statistics/getRemvstatus/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data['status'] == 0 && data['level'] == '2') {
                    $(".removebtn").removeAttr('data-bs-toggle');
                    $(".removebtn").removeAttr('data-bs-target');
                    alert('عملیات حذف رکورد غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');
                }
            },
        });
    });

    function recentMonth() {
        $.ajax('/MonthStatisticsByMVC/income/getrecentincomemonth/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#recentYR').text(dValues[6]);
                $('#recentMn').text(dValues[7]);
                $('#charity').text(dValues[0]);
                $('#orphan').text(dValues[1]);
                $('#zakat').text(dValues[2]);
                $('#baseneed').text(dValues[3]);
                $('#allincom').text(dValues[4]);
                $('#nikookari').text(dValues[5]);
            },
        });
    }

    function getIncomes() {
        let yerr = "";
        $.ajax('/MonthStatisticsByMVC/admin/getCurrentYear/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                yerr = data[0]['value'];
                $.ajax('/MonthStatisticsByMVC/income/getallIncms/', {
                    type: 'post',
                    dataType: "json",
                    data: {
                        'year': yerr
                    },
                    success: function(data) {
                        fillPageTable(data);
                    },
                });
            },
        });
    }

    function fillPageTable(data) {
        data.forEach(element => {
            const dValues = Object.values(element);
            let grec = String(dValues[6]) + String(dValues[7]);
            $("<th class='newColumn'>" + dValues[6] + "-" + dValues[7] + "</th>").insertAfter($('thead tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[0] + "</td>").insertAfter($('tbody tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[1] + "</td>").insertAfter($('tbody tr th:nth(1)'));
            $("<td class='newColumn'>" + dValues[2] + "</td>").insertAfter($('tbody tr th:nth(2)'));
            $("<td class='newColumn'>" + dValues[3] + "</td>").insertAfter($('tbody tr th:nth(3)'));
            $("<td class='newColumn'>" + dValues[4] + "</td>").insertAfter($('tbody tr th:nth(4)'));
            $("<td class='newColumn'>" + dValues[5] + "</td>").insertAfter($('tbody tr th:nth(5)'));
            $("<td class='removetd'><a class='removebtn' onclick=removeRecord(" + grec + ") data-bs-toggle='modal' data-bs-target='#RemoveModal' href='#'><i class='bi bi-trash'></i></a></td>").insertAfter($('tbody tr th:nth(6)'));
        });
    }

    function editRecord(id) {
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/income/getIncmGoalField/', {
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
                        $('#incomefiledlabel1').text('صدقات(میلیارد ریال):');
                    } else if (id == 1) {
                        $('#otherrecipientName1').val(dValues[1]);
                        $('#incomefiledlabel1').text('مبلغ پرداختی حامیان(میلیارد ریال):');
                    } else if (id == 2) {
                        $('#otherrecipientName1').val(dValues[2]);
                        $('#incomefiledlabel1').text('زکات و کفارات(میلیارد ریال):');
                    } else if (id == 3) {
                        $('#otherrecipientName1').val(dValues[3]);
                        $('#incomefiledlabel1').text('مبتنی بر نیاز(میلیارد ریال):');
                    } else if (id == 4) {
                        $('#otherrecipientName1').val(dValues[4]);
                        $('#incomefiledlabel1').text('کل درآمدها(میلیارد ریال):');
                    } else if (id == 5) {
                        $('#otherrecipientName1').val(dValues[5]);
                        $('#incomefiledlabel1').text('درآمد مراکز نیکوکاری(میلیارد ریال):');
                    }
                }
            },
        });
        $('#otherrecipientName1').addClass('goalfiled');
    }


    function editIncome() {
        $.ajax('/MonthStatisticsByMVC/statistics/getCurrentDate/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data[0]['Year'] == $('#recentYR').text() && data[0]['Month'] == $('#recentMn').text()) {
                    let y = $('#recentYR').text();
                    let m = $('#recentMn').text();
                    gfield = $('#goal').val();
                    $.ajax('/MonthStatisticsByMVC/income/updateIncome/' + gfield, {
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
                                $('.removetd').remove();
                                getIncomes();
                            }
                        },
                    });
                } else {
                    alert('همکار گرامی!! با توجه به اینکه ماه جاری برای ثبت آمار باز شده است شما امکان ویرایش ماه قبل را ندارید.');
                }
            },
        });
    }

    function removeRecord(grec) {
        $.ajax('/MonthStatisticsByMVC/statistics/getRemvstatus/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data['status'] == 1 || data['level'] != '2') {
                    $('#goalrec').val(grec);
                }
            },
        });
    }
</script>