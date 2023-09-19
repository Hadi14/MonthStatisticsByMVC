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

                <form action="<?= getBaseUrl() ?>job/insertjob/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
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
                <thead>
                    <tr>
                        <th scope="col">عنوان/ماه</th>
                        <th scope="col">ویرایش</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">اشتغال مستقیم از طریق کاریابی</th>
                        <td><a onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#JobModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">اشتغال مستقیم از طریق پرداخت تسهیلات</th>
                        <td><a onclick="editRecord('1')" data-bs-toggle="modal" data-bs-target="#JobModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">جمع اشتغال مستقیم</th>
                        <td><a style="color: gray;" disabled><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">اشتغال غیر مستقیم ایجاد شده</th>
                        <td><a onclick="editRecord('3')" data-bs-toggle="modal" data-bs-target="#JobModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">جمع کل اشتغال (مستقیم و غیر مستقیم)</th>
                        <td><a style="color: gray;" disabled><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">مبلغ کل تسهیلات پرداخت شده (میلیارد ریال)</th>
                        <td><a onclick="otherEditRecord('5')" data-bs-toggle="modal" data-bs-target="#otherModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">آموزش های مهارتی و فنی و حرفه ای </th>
                        <td><a onclick="otherEditRecord('6')" data-bs-toggle="modal" data-bs-target="#otherModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">طرح های اشتغال فعال تحت نظارت </th>
                        <td><a onclick="otherEditRecord('7')" data-bs-toggle="modal" data-bs-target="#otherModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
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
                        <label id="forAllfiledlabel1" for="forAllrecipientName1" class="col-form-label">اشتغال مستقیم از طریق کاریابی:</label>
                        <input id="forAllrecipientName1" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel2" for="recipientName2" class="col-form-label">اشتغال مستقیم از طریق پرداخت تسهیلات:</label>
                        <input id="forAllrecipientName2" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel3" for="recipientName3" class="col-form-label">جمع اشتغال مستقیم:</label>
                        <input readonly id="forAllrecipientName3" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel4" for="recipientName3" class="col-form-label">اشتغال غیر مستقیم ایجاد شده:</label>
                        <input id="forAllrecipientName4" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel5" for="recipientName3" class="col-form-label">جمع کل اشتغال(مستقیم و غیر مستقیم):</label>
                        <input readonly id="forAllrecipientName5" name="forAllid" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editAllpopulation()">ویرایش</button>
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
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editAllPeoplePopulation()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
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
        const dValues = Object.values(data[0]);
        data.forEach(element => {
            $("<th class='newColumn'>" + dValues[8] + "-" + dValues[9] + "</th>").insertAfter($('thead tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[0] + "</td>").insertAfter($('tbody tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[1] + "</td>").insertAfter($('tbody tr th:nth(1)'));
            $("<td class='newColumn'>" + dValues[2] + "</td>").insertAfter($('tbody tr th:nth(2)'));
            $("<td class='newColumn'>" + dValues[3] + "</td>").insertAfter($('tbody tr th:nth(3)'));
            $("<td class='newColumn'>" + dValues[4] + "</td>").insertAfter($('tbody tr th:nth(4)'));
            $("<td class='newColumn'>" + dValues[5] + "</td>").insertAfter($('tbody tr th:nth(5)'));
            $("<td class='newColumn'>" + dValues[6] + "</td>").insertAfter($('tbody tr th:nth(6)'));
            $("<td class='newColumn'>" + dValues[7] + "</td>").insertAfter($('tbody tr th:nth(7)'));
        });
    }


    function editRecord(id) {
        let s = String(<?= json_encode($data['Month']); ?>);
        $.ajax('/MonthStatisticsByMVC/job/getJobGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'yr': <?= $data['Year']; ?>,
                'mn': s,
            },
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#forAllrecipientName1').val(dValues[0]);
                $('#forAllrecipientName2').val(dValues[1]);
                $('#forAllrecipientName3').val(dValues[2]);
                $('#forAllrecipientName4').val(dValues[3]);
                $('#forAllrecipientName5').val(dValues[4]);
            },
        });
        $('#forAllrecipientName1').removeClass('goalfiled');
        $('#forAllrecipientName2').removeClass('goalfiled');
        $('#forAllrecipientName3').removeClass('goalfiled');
        $('#forAllrecipientName4').removeClass('goalfiled');
        if (id == 0) {
            $('#forAllrecipientName1').addClass('goalfiled');
            // $("#forAllrecipientName1").focus();
        } else if (id == 1) {
            $('#forAllrecipientName2').addClass('goalfiled');
            // $('#forAllrecipientName2').focus();
        } else if (id == 2) {
            $('#forAllrecipientName3').addClass('goalfiled');
            // $('#forAllrecipientName3').focus();
        } else if (id == 3) {
            $('#forAllrecipientName4').addClass('goalfiled');
            // $('#forAllrecipientName4').focus();
        } else if (id == 4) {
            $('#forAllrecipientName5').addClass('goalfiled');
            // $('#forAllrecipientName4').focus();
        }
    }

    function otherEditRecord(id) {
        let s = String(<?= json_encode($data['Month']); ?>);
        $.ajax('/MonthStatisticsByMVC/job/getJobGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'yr': <?= $data['Year']; ?>,
                'mn': s,
            },
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#otherrecipientName1').val(dValues[id]);

            },
        });
        if (id == 5) {
            $('#otherfiledlabel').text('مبلغ کل تسهیلات پرداخت شده (میلیارد ریال):');
        } else if (id == 6) {
            $('#otherfiledlabel').text('آموزش های مهارتی و فنی و حرفه ای:');
        } else if (id == 7) {
            $('#otherfiledlabel').text('طرح های اشتغال فعال تحت نظارت:');
        }
        $('#otherrecipientName1').addClass('goalfiled');

    }



    // function editAllpopulation() {
    //     if (+$('#forAllrecipientName1').val() + +$('#forAllrecipientName2').val() != +$('#forAllrecipientName3').val() + +$('#forAllrecipientName4').val()) {
    //         alert("جمع خانوارشهری و روستایی با خانوار با سرپرست مرد و زن برابر نیست!!!")
    //         $('#forAllModal').addClass('show');
    //         // $('#forAllModal').css('display', 'block');
    //     } else {
    //         let s = String(<?= json_encode($data['Month']); ?>);
    //         $.ajax('/MonthStatisticsByMVC/statistics/updateAllPopulation/', {
    //             type: 'post',
    //             dataType: "json",
    //             data: {
    //                 'familycity': +$('#forAllrecipientName1').val(),
    //                 'familyrural': +$('#forAllrecipientName2').val(),
    //                 'familymen': +$('#forAllrecipientName3').val(),
    //                 'familywomen': +$('#forAllrecipientName4').val(),
    //                 'yr': <?= $data['Year']; ?>,
    //                 'mn': s,
    //             },
    //             success: function(data) {
    //                 // console.log(data);
    //                 alert('بروزرسانی با موفقیت انجام شد.');
    //                 $('.newColumn').remove();
    //                 getAllPopulation();
    //             },
    //         });
    //     }
    // }

    // function editOldPopulation() {
    //     let s = String(<?= json_encode($data['Month']); ?>);
    //     $.ajax('/MonthStatisticsByMVC/statistics/updateOldPopulation/', {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             'one': +$('#forOldrecipientName1').val(),
    //             'two': +$('#forOldrecipientName2').val(),
    //             'goalFields': +$('#gfiled').val(),
    //             'yr': <?= $data['Year']; ?>,
    //             'mn': s,
    //         },
    //         success: function(data) {
    //             // console.log(data);
    //             alert('بروزرسانی با موفقیت انجام شد.');
    //             $('.newColumn').remove();
    //             getAllPopulation();
    //         },
    //     });
    // }

    // function editAllPeoplePopulation() {
    //     let s = String(<?= json_encode($data['Month']); ?>);
    //     $.ajax('/MonthStatisticsByMVC/statistics/updateAllPeoplePopulation/', {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             'AllPeople': +$('#otherrecipientName1').val(),
    //             'yr': <?= $data['Year']; ?>,
    //             'mn': s,
    //         },
    //         success: function(data) {
    //             // console.log(data);
    //             alert('بروزرسانی با موفقیت انجام شد.');
    //             $('.newColumn').remove();
    //             getAllPopulation();
    //         },
    //     });
    // }
</script>