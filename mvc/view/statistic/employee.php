<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">آمار نیروی انسانی ماه اخیر: <span id="recentYR"></span>-<span id="recentMn"></span></h2>
        <div class="row stat-cards">

            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">تعداد نیروهای رسمی ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="e_official" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">تعداد نیروهای غیر رسمی ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="e_company" class="stat-cards-info__title">43,159</p>
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
                <form action="<?= getBaseUrl() ?>employee/insertEmpl/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
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
                                <input required name="E_official" id="E_official" type="number" class="form-control familyrural" placeholder="تعداد ایتام و محسنین">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="E_company" id="E_company" type="number" class="form-control familymen" placeholder="تعداد حامیان">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input readonly required name="E_sum" id="E_sum" type="number" class="form-control familymen" placeholder="تعداد حامیان">
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
                        <th scope="row">تعداد نیروهای رسمی</th>
                        <td><a onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#dryModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد نیروهای غیر رسمی</th>
                        <td><a onclick="editRecord('1')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد کل نیروها</th>
                        <td><a onclick="editRecord('2')" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
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
                        <label id="Emplfiledlabel1" for="otherrecipientName1" class="col-form-label"></label>
                        <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                        <input id="goal" type="hidden">
                    </div>
                    <div class="mb-0">
                        <label id="Emplfiledlabel2" for="otherrecipientName2" class="col-form-label"></label>
                        <input id="otherrecipientName2" name="otherrecipientName1" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="Emplfiledlabel3" for="otherrecipientName3" class="col-form-label"></label>
                        <input id="otherrecipientName3" name="otherrecipientName1" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editEmployee()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<script>
    $(document).ready(function() {
        recentEmplMonth();
        getEmployee();
    });

    function recentEmplMonth() {
        $.ajax('/MonthStatisticsByMVC/employee/getrecentEmplMonth/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#recentYR').text(dValues[3]);
                $('#recentMn').text(dValues[4]);
                $('#e_official').text(dValues[0]);
                $('#e_company').text(dValues[1]);
            },
        });
    }

    function getEmployee() {
        $.ajax('/MonthStatisticsByMVC/employee/getallEmpl/', {
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
            $("<th class='newColumn'>" + dValues[3] + "-" + dValues[4] + "</th>").insertAfter($('thead tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[0] + "</td>").insertAfter($('tbody tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[1] + "</td>").insertAfter($('tbody tr th:nth(1)'));
            $("<td class='newColumn'>" + dValues[2] + "</td>").insertAfter($('tbody tr th:nth(2)'));
        });
    }

    function editRecord(id) {
        let s = String(<?= json_encode($data['Month']); ?>);
        $.ajax('/MonthStatisticsByMVC/employee/getEmplGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'yr': <?= $data['Year']; ?>,
                'mn': s,
            },
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#goal').val(id);
                $('#otherrecipientName1').val(dValues[0]);
                $('#Emplfiledlabel1').text('تعداد کارکنان رسمی:');
                $('#otherrecipientName2').val(dValues[1]);
                $('#Emplfiledlabel2').text('تعداد کارکنان غیر رسمی:');
                $('#otherrecipientName3').val(dValues[2]);
                $('#Emplfiledlabel3').text('تعداد کل حامیان:');

                $('#otherrecipientName1').removeClass('goalfiled');
                $('#otherrecipientName2').removeClass('goalfiled');
                $('#otherrecipientName3').removeClass('goalfiled');
                if (id == 0) {
                    $('#otherrecipientName1').addClass('goalfiled');
                } else if (id == 1) {
                    $('#otherrecipientName2').addClass('goalfiled');
                } else if (id == 2) {
                    $('#otherrecipientName3').addClass('goalfiled');
                }
            }
        });
    }


    function editEmployee() {
        let s = String(<?= json_encode($data['Month']); ?>);
        gfield = $('#goal').val();
        $.ajax('/MonthStatisticsByMVC/employee/updateEkram/', {
            type: 'post',
            dataType: "json",
            data: {
                'em_offic': +$('#otherrecipientName1').val(),
                'em_comp': +$('#otherrecipientName2').val(),
                'em_sum': +$('#otherrecipientName3').val(),
                'yr': <?= $data['Year']; ?>,
                'mn': s,
            },
            success: function(data) {
                alert('بروزرسانی با موفقیت انجام شد.');
                $('.newColumn').remove();
                getEmployee();
            },
        });
    }
</script>