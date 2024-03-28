<?
if (getaces(3) == 0) {
    exit;
}
?>
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">آمار معیشتی ماه اخیر: <span id="recentYR"></span>-<span id="recentMn"></span></h2>
        <div class="row stat-cards">

            <!-- **** -->
            <div class="col-md-6 col-xl-3">
                <article class="stat-cards-item">
                    <div class="stat-cards-info">
                        <p class="stat-cards-info__num">مبلغ معیشت ماه قبل(میلیارد ريال)</p>
                        <div class="d-flex  align-items-center">
                            <i class="fa-solid mx-2 fa-people-roof stat-cards-icon primary"></i>
                            <p id="money" class="stat-cards-info__title">43,159</p>
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
                <form id="ins_frm" action="<?= getBaseUrl() ?>statistics/insertMoney/<?= $data['Year']; ?>/<?= $data['Month']; ?>" class="insert-form p-5 rounded" method="post">
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
                                <input required name="mny" type="number" class="form-control familycity" placeholder="مبلغ معیشت از ابتدای سال(میلیارد ريال)">
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
                        <th scope="row">مبلغ معیشت از ابتدای سال(میلیارد ريال)</th>
                        <td><a class="editbtn" onclick="editRecord()" href="#" data-bs-toggle="modal" data-bs-target="#MoneyModal"><i class="bi bi-pencil-square"></i></a></td>
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
<div class="modal fade" id="MoneyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="otherfiledlabel" for="recipient-name1" class="col-form-label">مبلغ معیشت(میلیارد ريال):</label>
                        <input id="otherrecipientName1" name="otherrecipientName" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editMoney()">ویرایش</button>
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
                <form action="<?= getBaseUrl() ?>admin/rmovMoney/" method="post">
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
        // console.log("OOOsadfsdf");
        recentMonth();
        getmoney();
    });


    // $(document).ready(function() {
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
        $.ajax('/MonthStatisticsByMVC/statistics/getrecentmoneymonth/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                // console.log(data[0]);
                const dValues = Object.values(data[0]);
                $('#recentYR').text(dValues[1]);
                $('#recentMn').text(dValues[2]);
                $('#mny').text(dValues[0]);
            },
        });
    }

    function getmoney() {
        $.ajax('/MonthStatisticsByMVC/statistics/getallmoney/', {
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
            let grec = String(dValues[1]) + String(dValues[2]);
            $("<th class='newColumn'>" + dValues[1] + "-" + dValues[2] + "</th>").insertAfter($('thead tr th:nth(0)'));
            $("<td class='newColumn'>" + dValues[0] + "</td>").insertAfter($('tbody tr th:nth(0)'));
            $("<td class='removetd'><a class='removebtn' onclick=removeRecord(" + grec + ") data-bs-toggle='modal' data-bs-target='#RemoveModal' href='#'><i class='bi bi-trash'></i></a></td>").insertAfter($('tbody tr th:nth(1)'));
        });
    }

    function editMoney() {
        $.ajax('/MonthStatisticsByMVC/statistics/getCurrentDate/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                if (data[0]['Year'] == $('#recentYR').text() && data[0]['Month'] == $('#recentMn').text()) {
                    let y = $('#recentYR').text();
                    let m = $('#recentMn').text();
                    $.ajax('/MonthStatisticsByMVC/statistics/updatemoney/', {
                        type: 'post',
                        dataType: "json",
                        data: {
                            'mny': +$('#otherrecipientName1').val(),
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
                                getmoney();
                            }
                        },
                    });
                } else {
                    alert('همکار گرامی!! با توجه به اینکه ماه جاری برای ثبت آمار باز شده است شما امکان ویرایش ماه قبل را ندارید.');
                }
            },
        });
    }

    function editRecord() {
        let y = $('#recentYR').text();
        let m = $('#recentMn').text();
        $.ajax('/MonthStatisticsByMVC/statistics/getMoneyGoalField/', {
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
                    $('#otherrecipientName1').val(dValues[0]);
                }
            },
        });
        $('#otherrecipientName1').addClass('goalfiled');
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