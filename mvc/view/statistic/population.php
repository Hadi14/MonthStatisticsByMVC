<?
if (getaces(2) == 0) {
    exit;
}
?>
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">آمار جمعیتی ماه اخیر: <span id="recentYR"></span>-<span id="recentMn"></span></h2>
        <div class="row stat-cards">

            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">تعداد خانوار روستایی ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="FRural" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">تعداد خانوار شهری ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="bi bi-cash-stack mx-2 stat-cards-icon primary"></i>
                            <p id="FCity" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">تعداد خانوار مرد سرپرست ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid fa-user-nurse  mx-2 stat-cards-icon primary"></i>
                            <p id="FMen" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num"> تعداد خانوار زن سرپرست ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="bi bi-currency-dollar mx-2 stat-cards-icon primary"></i>
                            <p id="FWonem" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">تعداد کل خانوار ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="FAll" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">تعداد کل نفرات ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="bi bi-cash-stack mx-2 stat-cards-icon primary"></i>
                            <p id="PAll" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num">تعداد خانوار سالمند شهری ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid fa-user-nurse  mx-2 stat-cards-icon primary"></i>
                            <p id="FOCity" class="stat-cards-info__title">43,159</p>
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
                        <p class="stat-cards-info__num"> تعداد خانوار سالمند روستایی ماه قبل</p>
                        <div class="d-flex  align-items-center">
                            <i class="bi bi-currency-dollar mx-2 stat-cards-icon primary"></i>
                            <p id="FORural" class="stat-cards-info__title">43,159</p>
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

                <form action="<?= getBaseUrl() ?>statistics/insertPopulation/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
                    <div class="row">

                        <label id="cy" class="currentDate badge rounded-pill text-bg-info col-md-2">سال: <?= $data['Year']; ?></label>
                        <label id="cm" class="currentDate badge rounded-pill text-bg-light col-md-2">ماه: <?= $data['Month']; ?></label>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input required name="familycity" type="number" class="form-control familycity" placeholder="تعداد خانوار شهری">
                            </div>

                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="familyrural" type="number" class="form-control familyrural" placeholder="تعداد خانوار روستایی">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="familymen" type="number" class="form-control familymen" placeholder="تعداد خانوار باسرپرست مرد">
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input required name="familywomen" id="familywomen" type="number" class="form-control familywomen" placeholder="تعداد خانوار باسرپرست زن">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="allfamily" readonly type="number" class="form-control allfamily" placeholder="تعداد کل خانوار">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="allpeople" type="number" class="form-control" placeholder="تعداد کل نفرات">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="familyoldcity" type="number" class="form-control familyoldcity" placeholder="تعداد خانوار سالمند شهری">
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input required name="familyoldrural" type="number" class="form-control familyoldrural" placeholder="تعداد خانوار سالمند روستایی">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="alloldfamily" readonly type="number" class="form-control alloldfamily" placeholder="تعداد کل خانوار سالمند">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="peopleoldcity" type="number" class="form-control peopleoldcity" placeholder="تعداد نفرات سالمند شهری">
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input required name="peopleoldrural" type="number" class="form-control peopleoldrural" placeholder="تعداد نفرات سالمند روستایی">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="alloldpeople" readonly type="number" class="form-control alloldpeople" placeholder="تعداد کل نفرات سالمند">
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
                        <th scope="row">تعداد خانوار شهری</th>
                        <td><a onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#forAllModal"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد خانوار روستایی</th>
                        <td><a onclick="editRecord('1')" data-bs-toggle="modal" data-bs-target="#forAllModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد خانوار باسرپرست زن</th>
                        <td><a onclick="editRecord('2')" data-bs-toggle="modal" data-bs-target="#forAllModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد خانوار باسرپرست مرد</th>
                        <td><a onclick="editRecord('3')" data-bs-toggle="modal" data-bs-target="#forAllModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد کل خانوار</th>
                        <td><a style="color: gray;" disabled><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد کل نفرات</th>
                        <td><a onclick="othereditRecord('5')" data-bs-toggle="modal" data-bs-target="#otherModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد خانوار سالمند شهری</th>
                        <td><a onclick="OldeditRecord('6')" data-bs-toggle="modal" data-bs-target="#forOldModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد خانوار سالمند روستایی</th>
                        <td><a onclick="OldeditRecord('7')" data-bs-toggle="modal" data-bs-target="#forOldModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد کل خانوار سالمند</th>
                        <td><a style="color: gray;" disabled><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد نفرات سالمند شهری</th>
                        <td><a onclick="OldeditRecord('9')" data-bs-toggle="modal" data-bs-target="#forOldModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد نفرات سالمند روستایی</th>
                        <td><a onclick="OldeditRecord('10')" data-bs-toggle="modal" data-bs-target="#forOldModal" href="#"><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">تعداد کل نفرات سالمند</th>
                        <td><a style="color: gray;" disabled><i class="bi bi-pencil-square"></i></a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</main>

<!---------------------------for All Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="forAllModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="forAllModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="forAllfiledlabel1" for="forAllrecipientName1" class="col-form-label">تعداد خانوار شهری:</label>
                        <input id="forAllrecipientName1" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel2" for="recipientName2" class="col-form-label">تعداد خانوار روستایی:</label>
                        <input id="forAllrecipientName2" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel3" for="recipientName3" class="col-form-label">تعداد خانوار باسرپرست زن:</label>
                        <input id="forAllrecipientName3" name="forAllid" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forAllfiledlabel4" for="recipientName4" class="col-form-label">تعداد خانوار باسرپرست مرد:</label>
                        <input id="forAllrecipientName4" name="forAllid" type="text" class="form-control">
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

<!---------------------------for Old Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="forOldModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="forOldModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="forOldfiledlabel1" for="recipient-name1" class="col-form-label"></label>
                        <input id="forOldrecipientName1" name="id" type="text" class="form-control">
                        <input id="gfiled" type="hidden" name="">
                    </div>
                    <div class="mb-0">
                        <label id="forOldfiledlabel2" for="recipient-name1" class="col-form-label"></label>
                        <input id="forOldrecipientName2" name="id" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editOldPopulation()">ویرایش</button>
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
                        <label id="otherfiledlabel" for="recipient-name1" class="col-form-label">تعداد کل نفرات:</label>
                        <input id="otherrecipientName1" name="otherrecipientName" type="text" class="form-control">
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
<script>
    $(document).ready(function() {
        recentMonth();
        getAllPopulation();
    });

    function recentMonth() {
        $.ajax('/MonthStatisticsByMVC/statistics/getrecentmonth/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#recentYR').text(dValues[12]);
                $('#recentMn').text(dValues[13]);
                $('#FRural').text(dValues[1]);
                $('#FCity').text(dValues[0]);
                $('#FMen').text(dValues[2]);
                $('#FWonem').text(dValues[3]);
                $('#FAll').text(dValues[4]);
                $('#PAll').text(dValues[5]);
                $('#FOCity').text(dValues[6]);
                $('#FORural').text(dValues[7]);
            },
        });
    }

    function getAllPopulation() {
        $.ajax('/MonthStatisticsByMVC/statistics/getallpopulation/', {
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
            $("<th class='newColumn'>" + element['Year'] + "-" + element['Month'] + "</th>").insertAfter($('thead tr th:nth(0)'));
            $("<td class='newColumn'>" + element['Hmy_CityFamily'] + "</td>").insertAfter($('tbody tr th:nth(0)'));
            $("<td class='newColumn'>" + element['Hmy_RuralFamily'] + "</td>").insertAfter($('tbody tr th:nth(1)'));
            $("<td class='newColumn'>" + element['Hmy_WomenFamily'] + "</td>").insertAfter($('tbody tr th:nth(2)'));
            $("<td class='newColumn'>" + element['Hmy_MenFamily'] + "</td>").insertAfter($('tbody tr th:nth(3)'));
            $("<td class='newColumn'>" + element['Hmy_AllFamily'] + "</td>").insertAfter($('tbody tr th:nth(4)'));
            $("<td class='newColumn'>" + element['Hmy_AllPop'] + "</td>").insertAfter($('tbody tr th:nth(5)'));
            $("<td class='newColumn'>" + element['Hmy_OldFamCity'] + "</td>").insertAfter($('tbody tr th:nth(6)'));
            $("<td class='newColumn'>" + element['Hmy_OldFamRural'] + "</td>").insertAfter($('tbody tr th:nth(7)'));
            $("<td class='newColumn'>" + element['Hmy_AllOldFamily'] + "</td>").insertAfter($('tbody tr th:nth(8)'));
            $("<td class='newColumn'>" + element['Hmy_OldPopCity'] + "</td>").insertAfter($('tbody tr th:nth(9)'));
            $("<td class='newColumn'>" + element['Hmy_OldPopRural'] + "</td>").insertAfter($('tbody tr th:nth(10)'));
            $("<td class='newColumn'>" + element['Hmy_AllPopOld'] + "</td>").insertAfter($('tbody tr th:nth(11)'));

        });
    }

    function editRecord(id) {
        // let s = String(<? //= json_encode($data['Month']); 
                            ?>);
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        // console.log(y, m);
        $.ajax('/MonthStatisticsByMVC/statistics/getGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                // 'yr': <? //= $data['Year']; 
                            //                     
                            ?>//,
                'yr': y,
                'mn': m,
            },
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#forAllrecipientName1').val(dValues[0]);
                $('#forAllrecipientName2').val(dValues[1]);
                $('#forAllrecipientName3').val(dValues[3]);
                $('#forAllrecipientName4').val(dValues[2]);
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
        }
    }

    function othereditRecord(id) {
        // let s = String(<? //= json_encode($data['Month']); 
                            ?>);
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/statistics/getGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                // 'yr': <? //= $data['Year']; 
                            ?>,
                'yr': y,
                'mn': m,
            },
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#otherrecipientName1').val(dValues[5]);

            },
        });
        $('#otherrecipientName1').addClass('goalfiled');
    }

    function OldeditRecord(id) {
        // let s = String(<? //= json_encode($data['Month']); 
                            ?>);
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/statistics/getGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                // 'yr': <? //= $data['Year']; 
                            ?>,
                'yr': y,
                'mn': m,
            },
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                if (id == 6 || id == 7) {
                    $('#forOldrecipientName1').val(dValues[6]);
                    $('#forOldfiledlabel1').text('تعداد خانوار سالمند شهری:');
                    $('#forOldrecipientName2').val(dValues[7]);
                    $('#forOldfiledlabel2').text('تعداد خانوار سالمند روستایی:');
                    $('#gfiled').val('6');
                } else if (id == 9 || id == 10) {
                    $('#forOldrecipientName1').val(dValues[9]);
                    $('#forOldfiledlabel1').text('تعداد نفرات سالمند شهری:');
                    $('#forOldrecipientName2').val(dValues[10]);
                    $('#forOldfiledlabel2').text('تعداد نفرات سالمند روستایی:');
                    $('#gfiled').val('9');
                }
            },
        });
        $('#forOldrecipientName1').removeClass('goalfiled');
        $('#forOldrecipientName2').removeClass('goalfiled');
        if (id == 6 || id == 9) {
            $('#forOldrecipientName1').addClass('goalfiled');
        } else if (id == 7 || id == 10) {
            $('#forOldrecipientName2').addClass('goalfiled');
        }
    }

    function editAllpopulation() {
        if (+$('#forAllrecipientName1').val() + +$('#forAllrecipientName2').val() != +$('#forAllrecipientName3').val() + +$('#forAllrecipientName4').val()) {
            alert("جمع خانوارشهری و روستایی با خانوار با سرپرست مرد و زن برابر نیست!!!")
            $('#forAllModal').addClass('show');
            // $('#forAllModal').css('display', 'block');
        } else {
            // let s = String(<? //= json_encode($data['Month']); 
                                ?>);
            let m = $('#recentMn').text();
            $.ajax('/MonthStatisticsByMVC/statistics/updateAllPopulation/', {
                type: 'post',
                dataType: "json",
                data: {
                    'familycity': +$('#forAllrecipientName1').val(),
                    'familyrural': +$('#forAllrecipientName2').val(),
                    'familymen': +$('#forAllrecipientName3').val(),
                    'familywomen': +$('#forAllrecipientName4').val(),
                    'yr': $('#recentYR').text(),
                    'mn': m,
                },
                success: function(data) {
                    // console.log(data);
                    alert('بروزرسانی با موفقیت انجام شد.');
                    $('.newColumn').remove();
                    getAllPopulation();
                },
            });
        }
    }

    function editOldPopulation() {
        // let s = String(<? //= json_encode($data['Month']); 
                            ?>);
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/statistics/updateOldPopulation/', {
            type: 'post',
            dataType: "json",
            data: {
                'one': +$('#forOldrecipientName1').val(),
                'two': +$('#forOldrecipientName2').val(),
                'goalFields': +$('#gfiled').val(),
                'yr': $('#recentYR').text(),
                'mn': m,
            },
            success: function(data) {
                // console.log(data);
                alert('بروزرسانی با موفقیت انجام شد.');
                $('.newColumn').remove();
                getAllPopulation();
            },
        });
    }

    function editAllPeoplePopulation() {
        // let s = String(<? //= json_encode($data['Month']); 
                            ?>);
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/statistics/updateAllPeoplePopulation/', {
            type: 'post',
            dataType: "json",
            data: {
                'AllPeople': +$('#otherrecipientName1').val(),
                'yr': $('#recentYR').text(),
                'mn': m,
            },
            success: function(data) {
                // console.log(data);
                alert('بروزرسانی با موفقیت انجام شد.');
                $('.newColumn').remove();
                getAllPopulation();
            },
        });
    }
</script>