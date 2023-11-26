<?
if (getaces(5) == 0) {
    exit;
}
?>

<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">آمار بیمه های اجتماعی ماه اخیر: <span id="recentYR"></span>-<span id="recentMn"></span></h2>
        <div class="row stat-cards">

            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">تعداد زنان سرپرست خانوار ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="wn" class="stat-cards-info__title">43,159</p>
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
            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">تعداد مجریان طرحهای اشتغال ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="jn" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">مبلغ هزینه بیمه های اجتماعی ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="im" class="stat-cards-info__title">43,159</p>
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
                <form id="ins_frm" action="<?= getBaseUrl() ?>statistics/insertInsure/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
                    <div class="row">

                        <label id="cy" class="currentDate badge rounded-pill text-bg-info col-md-2">سال: <?= $data['Year']; ?></label>
                        <label id="cm" class="currentDate badge rounded-pill text-bg-light col-md-2">ماه: <?= $data['Month']; ?></label>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input id="wnum" required name="wnum" type="number" class="form-control Inums" placeholder="تعداد زنان سرپرست خانوار">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input id="jnum" required name="jnum" type="number" class="form-control Inums" placeholder="تعداد مجریان طرح های اشتغال">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input id="isum" readonly required name="isum" type="number" class="form-control " placeholder="جمع تعداد">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="imoney" type="number" class="form-control familymen" placeholder="مبلغ بیمه های اجتماعی(میلیون ريال)">
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
                        <th scope="row">تعداد زنان سرپرست خانوار</th>
                        <td><a class="editbtn" onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#forNumModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد مجریان طرح اشتغال</th>
                        <td><a class="editbtn" onclick="editRecord('1')" href="#" data-bs-toggle="modal" data-bs-target="#forNumModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">جمع تعداد</th>
                        <td><a class="editbtn" style="color: gray;" disabled><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">مبلغ بیمه های اجتماعی(میلیون ريال)</th>
                        <td><a class="editbtn" onclick="editMoneyRecord()" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
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
<!---------------------------for Nums Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="forNumModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="forOldModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="forNumfiledlabel1" for="forNumrecipientName1" class="col-form-label">تعداد زنان سرپرست خانوار:</label>
                        <input id="forNumrecipientName1" name="wn" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forNumfiledlabel2" for="forNumrecipientName2" class="col-form-label">تعداد مجریان طرح اشتغال:</label>
                        <input id="forNumrecipientName2" name="jn" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editNumsInsure()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
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
                        <label id="dowryfiledlabel1" for="otherrecipientName1" class="col-form-label">مبلغ بیمه های اجتماعی(میلیون ريال):</label>
                        <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editMoneyInsure()">ویرایش</button>
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
                <form action="<?= getBaseUrl() ?>admin/rmovInsure/" method="post">
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
        getInsure();
    });


    $(document).on('mousedown', '.removebtn', function() {
        $.ajax('/MonthStatisticsByMVC/statistics/getRemvstatus/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data['status'] == 0 && data['level'] == '2') {
                    // console.log("mouse down event")
                    $(".removebtn").removeAttr('data-bs-toggle');
                    $(".removebtn").removeAttr('data-bs-target');
                    alert('عملیات حذف رکورد غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');
                }
            },
        });
    });



    function recentMonth() {
        $.ajax('/MonthStatisticsByMVC/statistics/getrecentinsuremonth/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#recentYR').text(dValues[4]);
                $('#recentMn').text(dValues[5]);
                $('#wn').text(dValues[0]);
                $('#jn').text(dValues[1]);
                $('#im').text(dValues[3]);
            },
        });
    }

    function getInsure() {
        $.ajax('/MonthStatisticsByMVC/statistics/getallinsure/', {
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
        data.forEach(element => {
            const dValues = Object.values(element);
            let grec = String(dValues[4]) + String(dValues[5]);
            $("<th class='newColumn'>" + dValues[4] + "-" + dValues[5] + "</th>").insertAfter($('thead tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[0] + "</td>").insertAfter($('tbody tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[1] + "</td>").insertAfter($('tbody tr th:nth(1)'));
            $("<td class='newColumn'>" + dValues[2] + "</td>").insertAfter($('tbody tr th:nth(2)'));
            $("<td class='newColumn'>" + dValues[3] + "</td>").insertAfter($('tbody tr th:nth(3)'));
            $("<td class='removetd'><a class='removebtn' onclick=removeRecord(" + grec + ") href='#' data-bs-toggle='modal' data-bs-target='#RemoveModal' ><i class='bi bi-trash'></i></a></td>").insertAfter($('tbody tr th:nth(4)'));
            // $("<td><button class='bbb'>dfgf</button></td>").insertAfter($('tbody tr th:nth(4)'));
        });
    }


    // $(document).on('mousedown', '.bbb', function() {
    //     console.log("edtgdfgdfgdfg");
    // });


    function editRecord(id) {
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/statistics/getInsureGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'yr': y,
                'mn': m,
            },
            success: function(data) {
                if (data == null) {
                    alert("رکورد ماه اخیر قابل ویرایش نیست زیرا توسط شما ثبت نشده است لطفا به مدیر سیستم مراجعه کنید.");
                } else {
                    const dValues = Object.values(data[0]);
                    $('#forNumrecipientName1').val(dValues[0]);
                    $('#forNumrecipientName2').val(dValues[1]);
                    if (id == 0) {
                        $('#forNumrecipientName1').addClass('goalfiled');
                        $('#forNumrecipientName2').removeClass('goalfiled');
                    } else if (id == 1) {
                        $('#forNumrecipientName2').addClass('goalfiled');
                        $('#forNumrecipientName1').removeClass('goalfiled');
                    }
                }
            },
        });
    }

    function editMoneyRecord() {
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/statistics/getInsureGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'yr': <?= $data['Year']; ?>,
                'mn': m,
            },
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#otherrecipientName1').val(dValues[3]);
            },
        });
        $('#otherrecipientName1').addClass('goalfiled');
    }

    function editNumsInsure() {
        $.ajax('/MonthStatisticsByMVC/statistics/getCurrentDate/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data[0]['Year'] == $('#recentYR').text() && data[0]['Month'] == $('#recentMn').text()) {
                    let y = $('#recentYR').text();
                    let m = $('#recentMn').text();
                    $.ajax('/MonthStatisticsByMVC/statistics/updateNumInsure/', {
                        type: 'post',
                        dataType: "json",
                        data: {
                            'wn': +$('#forNumrecipientName1').val(),
                            'jn': +$('#forNumrecipientName2').val(),
                            'yr': <?= $data['Year']; ?>,
                            'mn': m,
                        },
                        success: function(data) {
                            if (data['disableEdit'] == true) {
                                alert('عملیات ویرایش غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');
                            } else {
                                alert('بروزرسانی با موفقیت انجام شد.');
                                $('.newColumn').remove();
                                $('.removetd').remove();
                                getInsure();
                            }
                        },
                    });
                } else {
                    alert('همکار گرامی!! با توجه به اینکه ماه جاری برای ثبت آمار باز شده است شما امکان ویرایش ماه قبل را ندارید.');
                }
            },
        });
    }

    function editMoneyInsure() {
        $.ajax('/MonthStatisticsByMVC/statistics/getCurrentDate/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data[0]['Year'] == $('#recentYR').text() && data[0]['Month'] == $('#recentMn').text()) {
                    let y = $('#recentYR').text();
                    let m = $('#recentMn').text();
                    $.ajax('/MonthStatisticsByMVC/statistics/updateMonyInsure/', {
                        type: 'post',
                        dataType: "json",
                        data: {
                            'im': +$('#otherrecipientName1').val(),
                            'yr': <?= $data['Year']; ?>,
                            'mn': m,
                        },
                        success: function(data) {
                            if (data['disableEdit'] == true) {
                                alert('عملیات ویرایش غیر فعال می باشد لطفا به مدیر سیستم مراجعه کنید.');
                            } else {
                                alert('بروزرسانی با موفقیت انجام شد.');
                                $('.newColumn').remove();
                                getInsure();
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