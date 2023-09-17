<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">آمار جهیزیه ماه اخیر: <span id="recentYR"></span>-<span id="recentMn"></span></h2>
        <div class="row stat-cards">

            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">تعداد زنان سرپرست خانوار ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="dn" class="stat-cards-info__title">43,159</p>
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
                            <p id="dn" class="stat-cards-info__title">43,159</p>
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
                            <p id="dm" class="stat-cards-info__title">43,159</p>
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

                <form action="<?= getBaseUrl() ?>statistics/insertPopulation/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
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
                                <input required name="familyrural" type="number" class="form-control familyrural" placeholder="تعداد زنان سرپرست خانوار">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="familymen" type="number" class="form-control familymen" placeholder="تعداد مجریان طرح های اشتغال">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input readonly required name="familymen" type="number" class="form-control familymen" placeholder="جمع تعداد">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="familymen" type="number" class="form-control familymen" placeholder="مبلغ بیمه های اجتماعی">
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
                        <th scope="row">تعداد جهیزیه</th>
                        <td><a onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#dryModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">مبلغ جهیزیه</th>
                        <td><a onclick="editRecord('1')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
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
                        <label id="dowryfiledlabel1" for="otherrecipientName1" class="col-form-label">تعداد جهیزیه:</label>
                        <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                        <input id="goal" type="hidden">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editDowry()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<script>
    // $(document).ready(function() {
    //     recentMonth();
    //     getdowry();
    // });

    // function recentMonth() {
    //     $.ajax('/MonthStatisticsByMVC/statistics/getrecentdowrymonth/', {
    //         type: 'post',
    //         dataType: "json",
    //         success: function(data) {
    //             // console.log(data[0]);
    //             const dValues = Object.values(data[0]);
    //             $('#recentYR').text(dValues[2]);
    //             $('#recentMn').text(dValues[3]);
    //             $('#dn').text(dValues[0]);
    //             $('#dm').text(dValues[1]);
    //         },
    //     });
    // }

    // function getdowry() {
    //     $.ajax('/MonthStatisticsByMVC/statistics/getalldowry/', {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             year: <?= $data['Year']; ?>
    //         },
    //         success: function(data) {
    //             fillPageTable(data);
    //         },
    //     });
    // }

    // function fillPageTable(data) {
    //     const dValues = Object.values(data[0]);
    //     data.forEach(element => {
    //         $("<th class='newColumn'>" + dValues[2] + "-" + dValues[3] + "</th>").insertAfter($('thead tr th:nth(0)'));
    //         $("<td class='newColumn'>" + dValues[0] + "</td>").insertAfter($('tbody tr th:nth(0)'));
    //         $("<td class='newColumn'>" + dValues[1] + "</td>").insertAfter($('tbody tr th:nth(1)'));
    //     });
    // }

    // function editDowry() {
    //     let s = String(<?= json_encode($data['Month']); ?>);
    //     gfield = $('#goal').val();
    //     $.ajax('/MonthStatisticsByMVC/statistics/updateDowry/' + gfield, {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             'goalf': +$('#otherrecipientName1').val(),
    //             'yr': <?= $data['Year']; ?>,
    //             'mn': s,
    //         },
    //         success: function(data) {
    //             // console.log(data);
    //             alert('بروزرسانی با موفقیت انجام شد.');
    //             $('.newColumn').remove();
    //             getdowry();
    //         },
    //     });
    // }

    // function editRecord(id) {
    //     let s = String(<?= json_encode($data['Month']); ?>);
    //     $.ajax('/MonthStatisticsByMVC/statistics/getDowryGoalField/', {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             'yr': <?= $data['Year']; ?>,
    //             'mn': s,
    //         },
    //         success: function(data) {
    //             // console.log(data[0]);
    //             const dValues = Object.values(data[0]);

    //             $('#goal').val(id);
    //             if (id == 0)
    //                 $('#otherrecipientName1').val(dValues[0]);
    //             else if (id == 1)
    //                 $('#otherrecipientName1').val(dValues[1]);
    //         },
    //     });
    //     $('#otherrecipientName1').addClass('goalfiled');
    // }
</script>