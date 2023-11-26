<?
if (getaces(9) == 0) {
    exit;
}
?>
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">آمار جمعیتی اشتغال ماه اخیر: <span id="recentYR"></span>-<span id="recentMn"></span></h2>
        <div class="row stat-cards">

            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">اشتغال مستقیم از طریق کاریابی</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="jds" class="stat-cards-info__title">43,159</p>
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
            <!-- ****** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">اشتغال مستقیم از طریق پرداخت تسهیلات</p>
                        <div class="d-flex  align-items-center">
                            <i class="bi bi-cash-stack mx-2 stat-cards-icon primary"></i>
                            <p id="jdl" class="stat-cards-info__title">43,159</p>
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
            <!-- ****** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">اشتغال غیر مستقیم ایجاد شده</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid fa-user-nurse  mx-2 stat-cards-icon primary"></i>
                            <p id="nj" class="stat-cards-info__title">43,159</p>
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
            <!-- ****** -->
        </div>
        <div class="row stat-cards">
            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">مبلغ کل تسهیلات پرداخت شده(میلیارد ریال)</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="jmoney" class="stat-cards-info__title">43,159</p>
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
            <!-- ****** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">آموزش های مهارتی و فنی و حرفه ای </p>
                        <div class="d-flex  align-items-center">
                            <i class="bi bi-cash-stack mx-2 stat-cards-icon primary"></i>
                            <p id="flearn" class="stat-cards-info__title">43,159</p>
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
            <!-- ****** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">طرح های اشتغال فعال تحت نظارت </p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid fa-user-nurse  mx-2 stat-cards-icon primary"></i>
                            <p id="supervi" class="stat-cards-info__title">43,159</p>
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

            <!-- ****** -->

        </div>
        <!-- ******************** -->
        <div class="row">
            <div class="col-lg-9">
                <p id="disInsertNote"></p>
                <form id="ins_frm" action="<?= getBaseUrl() ?>job/insertjob/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
                    <div class="row">

                        <label id="cy" class="currentDate badge rounded-pill text-bg-info col-md-2">سال: <?= $data['Year']; ?></label>
                        <label id="cm" class="currentDate badge rounded-pill text-bg-light col-md-2">ماه: <?= $data['Month']; ?></label>

                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input required name="i_jds" id="i_jds" type="number" class="form-control familycity" placeholder="اشتغال مستقیم کاریابی ">
                            </div>

                        </div>
                        <div class="col-md-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="i_jdl" id="i_jdl" type="number" class="form-control familyrural" placeholder="اشتغال مستقیم پرداخت تسهیلات

">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input readonly required name="i_jdsum" id="i_jdsum" type="number" class="form-control familymen" placeholder="جمع اشتغال مستقیم">
                            </div>
                        </div>


                        <div class="col-md-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input required name="i_nj" id="i_nj" type="number" class="form-control familywomen" placeholder="اشتغال غیر مستقیم ایجاد شده">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input readonly required name="i_jsum" id="i_jsum" type="number" class="form-control familywomen" placeholder="جمع کل اشتغال(مستقیم و غیر مستقیم)">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input required name="i_jmoney" id="i_jmoney" type="number" class="form-control familywomen" placeholder="مبلغ کل تسهیلات پرداخت شده(میلیارد ریال)">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input required name="i_flearn" id="i_flearn" type="number" class="form-control familywomen" placeholder="آموزش های مهارتی و فنی و حرفه ای ">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="i_supervi" id="i_supervi" type="number" class="form-control allfamily" placeholder="طرح های اشتغال فعال تحت نظارت">
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
                        <th scope="row">اشتغال مستقیم از طریق کاریابی</th>
                        <td><a class="editbtn" onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#JobModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">اشتغال مستقیم از طریق پرداخت تسهیلات</th>
                        <td><a class="editbtn" onclick="editRecord('1')" data-bs-toggle="modal" data-bs-target="#JobModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">جمع اشتغال مستقیم</th>
                        <td><a class="editbtn" style="color: gray;" disabled><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">اشتغال غیر مستقیم ایجاد شده</th>
                        <td><a class="editbtn" onclick="editRecord('3')" data-bs-toggle="modal" data-bs-target="#JobModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">جمع کل اشتغال(مستقیم و غیر مستقیم)</th>
                        <td><a class="editbtn" style="color: gray;" disabled><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">مبلغ کل تسهیلات پرداخت شده(میلیارد ریال)</th>
                        <td><a class="editbtn" onclick="otherEditRecord('5')" data-bs-toggle="modal" data-bs-target="#otherModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">آموزش های مهارتی و فنی و حرفه ای </th>
                        <td><a class="editbtn" onclick="otherEditRecord('6')" data-bs-toggle="modal" data-bs-target="#otherModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">طرح های اشتغال فعال تحت نظارت </th>
                        <td><a class="editbtn" onclick="otherEditRecord('7')" data-bs-toggle="modal" data-bs-target="#otherModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
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

<!---------------------------for Direct& nonDirect Job modal  ------------------------------------------------------------------------->
<div class="modal fade" id="JobModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="forAllModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="forAllfiledlabel1" for="DNjob1" class="col-form-label">اشتغال مستقیم از طریق کاریابی:</label>
                        <input id="DNjob1" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel2" for="DNjob2" class="col-form-label">اشتغال مستقیم از طریق پرداخت تسهیلات:</label>
                        <input id="DNjob2" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel3" for="DNjob3" class="col-form-label">جمع اشتغال مستقیم:</label>
                        <input readonly id="DNjob3" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel4" for="DNjob4" class="col-form-label">اشتغال غیر مستقیم ایجاد شده:</label>
                        <input id="DNjob4" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel5" for="DNjob5" class="col-form-label">جمع کل اشتغال(مستقیم و غیر مستقیم):</label>
                        <input readonly id="DNjob5" name="forAllid" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editjob()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->


<!--------------------------- other Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="otherModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="otherfiledlabel" for="recipient-name1" class="col-form-label"></label>
                        <input id="otherrecipientName1" name="otherrecipientName" type="text" class="form-control">
                        <input id="goalf" type="hidden">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editotherfieldJob()">ویرایش</button>
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
                <form action="<?= getBaseUrl() ?>admin/rmovJob/" method="post">
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
<!-- ***************************************************************************************************************** -->
<script>
    $(document).ready(function() {
        recentMonth();
        getAllJobes();
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
        $.ajax('/MonthStatisticsByMVC/job/getrecentJobmonth/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#recentYR').text(dValues[8]);
                $('#recentMn').text(dValues[9]);
                $('#jds').text(dValues[0]);
                $('#jdl').text(dValues[1]);
                $('#nj').text(dValues[3]);
                $('#jmoney').text(dValues[5]);
                $('#flearn').text(dValues[6]);
                $('#supervi').text(dValues[7]);
            },
        });
    }

    function getAllJobes() {
        $.ajax('/MonthStatisticsByMVC/job/getalljob/', {
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
            let grec = String(dValues[8]) + String(dValues[9]);
            $("<th class='newColumn'>" + dValues[8] + "-" + dValues[9] + "</th>").insertAfter($('thead tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[0] + "</td>").insertAfter($('tbody tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[1] + "</td>").insertAfter($('tbody tr th:nth(1)'));
            $("<td class='newColumn'>" + dValues[2] + "</td>").insertAfter($('tbody tr th:nth(2)'));
            $("<td class='newColumn'>" + dValues[3] + "</td>").insertAfter($('tbody tr th:nth(3)'));
            $("<td class='newColumn'>" + dValues[4] + "</td>").insertAfter($('tbody tr th:nth(4)'));
            $("<td class='newColumn'>" + dValues[5] + "</td>").insertAfter($('tbody tr th:nth(5)'));
            $("<td class='newColumn'>" + dValues[6] + "</td>").insertAfter($('tbody tr th:nth(6)'));
            $("<td class='newColumn'>" + dValues[7] + "</td>").insertAfter($('tbody tr th:nth(7)'));
            $("<td class='removetd'><a class='removebtn' onclick=removeRecord(" + grec + ") data-bs-toggle='modal' data-bs-target='#RemoveModal' href='#'><i class='bi bi-trash'></i></a></td>").insertAfter($('tbody tr th:nth(8)'));
        });
    }


    function editRecord(id) {
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/job/getJobGoalField/', {
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
                    $('#DNjob1').val(dValues[0]);
                    $('#DNjob2').val(dValues[1]);
                    $('#DNjob3').val(dValues[2]);
                    $('#DNjob4').val(dValues[3]);
                    $('#DNjob5').val(dValues[4]);
                }
            },
        });
        $('#DNjob1').removeClass('goalfiled');
        $('#DNjob2').removeClass('goalfiled');
        $('#DNjob3').removeClass('goalfiled');
        $('#DNjob4').removeClass('goalfiled');
        if (id == 0) {
            $('#DNjob1').addClass('goalfiled');
            // $("#DNjob1").focus();
        } else if (id == 1) {
            $('#DNjob2').addClass('goalfiled');
            // $('#DNjob2').focus();
        } else if (id == 3) {
            $('#DNjob4').addClass('goalfiled');
            // $('#DNjob4').focus();
        }
    }

    function otherEditRecord(id) {
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/job/getJobGoalField/', {
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
                    $('#otherrecipientName1').val(dValues[id]);
                }
            },
        });
        if (id == 5) {
            $('#otherfiledlabel').text('مبلغ کل تسهیلات پرداخت شده (میلیارد ریال):');
        } else if (id == 6) {
            $('#otherfiledlabel').text('آموزش های مهارتی و فنی و حرفه ای:');
        } else if (id == 7) {
            $('#otherfiledlabel').text('طرح های اشتغال فعال تحت نظارت:');
        }
        $('#goalf').val(id);
        $('#otherrecipientName1').addClass('goalfiled');

    }



    function editjob() {
        $.ajax('/MonthStatisticsByMVC/statistics/getCurrentDate/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data[0]['Year'] == $('#recentYR').text() && data[0]['Month'] == $('#recentMn').text()) {
                    let y = $('#recentYR').text();
                    let m = $('#recentMn').text();
                    $.ajax('/MonthStatisticsByMVC/job/updatejob/', {
                        type: 'post',
                        dataType: "json",
                        data: {
                            'DNjob1': +$('#DNjob1').val(),
                            'DNjob2': +$('#DNjob2').val(),
                            'DNjob3': +$('#DNjob3').val(),
                            'DNjob4': +$('#DNjob4').val(),
                            'DNjob5': +$('#DNjob5').val(),
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
                                getAllJobes();
                            }
                        },
                    });
                } else {
                    alert('همکار گرامی!! با توجه به اینکه ماه جاری برای ثبت آمار باز شده است شما امکان ویرایش ماه قبل را ندارید.');
                }
            },
        });

    }


    function editotherfieldJob() {
        $.ajax('/MonthStatisticsByMVC/statistics/getCurrentDate/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data[0]['Year'] == $('#recentYR').text() && data[0]['Month'] == $('#recentMn').text()) {
                    let y = $('#recentYR').text();
                    let m = $('#recentMn').text();
                    let value = $('#goalf').val();
                    $.ajax('/MonthStatisticsByMVC/job/updateotherfielJob/', {
                        type: 'post',
                        dataType: "json",
                        data: {
                            'gfield': +$('#goalf').val(),
                            'value': +$('#otherrecipientName1').val(),
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
                                getAllJobes();
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