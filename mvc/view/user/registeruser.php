<main class="main users chart-page" id="skip-target">
    <div class="container">

        <!-- ******************** -->
        <div class="row">
            <div class="col-lg-9">

                <form action="<?= getBaseUrl() ?>statistics/insertInsure/" class="insert-form p-5 rounded" method="post">
                    <h3>تعریف کاربر:</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input id="wnum" required name="wnum" type="text" class="form-control Inums" placeholder="نام">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input id="jnum" required name="jnum" type="text" class="form-control Inums" placeholder="نام خانوادگی">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input id="isum" required name="isum" type="text" class="form-control " placeholder="نام کاربری">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="imoney" type="text" class="form-control familymen" placeholder="پسورد">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select id="year" name="year" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected disabled value="-1">سطح دسترسی</option>
                                <option value="2">کاریر ثبت کننده</option>
                                <option value="1">مدیر</option>
                                <option value="0">مدیر اصلی</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="year" name="year" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected disabled value="0">حوزه مربوطه</option>
                                <option value="0">برنامه ریزی</option>
                                <option value="1">فرهنگی</option>
                                <option value="2">مشارکت</option>
                                <option value="3">اشتغال</option>
                                <option value="4">مسکن</option>
                                <option value="5">مالی</option>
                            </select>
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
                        <th scope="col">ردیف</th>
                        <th scope="col">نام</th>
                        <th scope="col">نام خانوادگی</th>
                        <th scope="col">نام کاربری</th>
                        <th scope="col">رمز عبور</th>
                        <th scope="col">سطح دسترسی</th>
                        <th scope="col">حوزه مربوطه</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr> -->
                    <!-- <th scope="row">تعداد زنان سرپرست خانوار</th> -->
                    <!-- <td><a onclick="editRecord('0')" href="#" data-bs-toggle="modal" data-bs-target="#forNumModal"><i class="bi bi-pencil-square"></i></a></td> -->
                    <!-- </tr> -->
                    <!-- <tr> -->
                    <!-- <th scope="row">تعداد مجریان طرح اشتغال</th> -->
                    <!-- <td><a onclick="editRecord('1')" href="#" data-bs-toggle="modal" data-bs-target="#forNumModal"><i class="bi bi-pencil-square"></i></a></td> -->
                    <!-- </tr> -->
                    <!-- <tr> -->
                    <!-- <th scope="row">جمع تعداد</th> -->
                    <!-- <td><a style="color: gray;" disabled href="#" data-bs-toggle="modal" data-bs-target="#dryModal"><i class="bi bi-pencil-square"></i></a></td> -->
                    <!-- </tr> -->
                    <!-- <tr> -->
                    <!-- <th scope="row">مبلغ بیمه های اجتماعی</th> -->
                    <!-- <td><a onclick="editMoneyRecord()" data-bs-toggle="modal" data-bs-target="#dryModal" href="#"><i class="bi bi-pencil-square"></i></a></td> -->
                    <!-- </tr> -->
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
                        <label id="forNumfiledlabel1" for="forNumrecipientName1" class="col-form-label"></label>
                        <input id="forNumrecipientName1" name="wn" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="forNumfiledlabel2" for="forNumrecipientName2" class="col-form-label"></label>
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
                        <label id="dowryfiledlabel1" for="otherrecipientName1" class="col-form-label">تعداد جهیزیه:</label>
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
<script>
    $(document).ready(function() {
        getInsure();
    });



    function getInsure() {
        $.ajax('/MonthStatisticsByMVC/user/getAllUsers/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                // console.log(data);
                fillPageTable(data);
            },
        });
    }

    function fillPageTable(data) {
        let i = 1;
        data.forEach(element => {
            const dValues = Object.values(element);

            let row = "<tr><td class='newColumn'>" + i++ + "</td><td class='newColumn'>" + dValues[3] + "</td><td class='newColumn'>" + dValues[4] + "</td><td class='newColumn'>" + dValues[0] + "</td><td class='newColumn'>" + dValues[1] + "</td><td class='newColumn'>" + dValues[2] + "</td><td class='newColumn'>" + dValues[5] + "</td></tr>";

            $('tbody').append(row);
        });
    }

    // function editRecord(id) {
    //     let s = String(<? //= json_encode($data['Month']); 
                            ?>);
    //     $.ajax('/MonthStatisticsByMVC/statistics/getInsureGoalField/', {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             'yr': <? //= $data['Year']; 
                            ?>,
    //             'mn': s,
    //         },
    //         success: function(data) {
    //             const dValues = Object.values(data[0]);
    //             $('#forNumrecipientName1').val(dValues[0]);
    //             $('#forNumrecipientName2').val(dValues[1]);
    //             if (id == 0) {
    //                 $('#forNumrecipientName1').addClass('goalfiled');
    //                 $('#forNumrecipientName2').removeClass('goalfiled');
    //             } else if (id == 1) {
    //                 $('#forNumrecipientName2').addClass('goalfiled');
    //                 $('#forNumrecipientName1').removeClass('goalfiled');
    //             }
    //         },
    //     });
    // }

    // function editMoneyRecord() {
    //     let s = String(<? //= json_encode($data['Month']); 
                            ?>);
    //     $.ajax('/MonthStatisticsByMVC/statistics/getInsureGoalField/', {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             'yr': <? //= $data['Year']; 
                            ?>,
    //             'mn': s,
    //         },
    //         success: function(data) {
    //             const dValues = Object.values(data[0]);
    //             $('#otherrecipientName1').val(dValues[3]);
    //         },
    //     });
    //     $('#otherrecipientName1').addClass('goalfiled');
    // }

    // function editNumsInsure() {
    //     let s = String(<? //= json_encode($data['Month']); 
                            ?>);
    //     $.ajax('/MonthStatisticsByMVC/statistics/updateNumInsure/', {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             'wn': +$('#forNumrecipientName1').val(),
    //             'jn': +$('#forNumrecipientName2').val(),
    //             'yr': <? //= $data['Year']; 
                            ?>,
    //             'mn': s,
    //         },
    //         success: function(data) {
    //             alert('بروزرسانی با موفقیت انجام شد.');
    //             $('.newColumn').remove();
    //             getInsure();
    //         },
    //     });
    // }

    // function editMoneyInsure() {
    //     let s = String(<? //= json_encode($data['Month']); 
                            ?>);
    //     $.ajax('/MonthStatisticsByMVC/statistics/updateMonyInsure/', {
    //         type: 'post',
    //         dataType: "json",
    //         data: {
    //             'im': +$('#otherrecipientName1').val(),
    //             'yr': <? //= $data['Year']; 
                            ?>,
    //             'mn': s,
    //         },
    //         success: function(data) {
    //             alert('بروزرسانی با موفقیت انجام شد.');
    //             $('.newColumn').remove();
    //             getInsure();
    //         },
    //     });
    // }
</script>