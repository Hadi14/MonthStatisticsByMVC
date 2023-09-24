<?
if ($_SESSION['level'] != 0) {
    exit;
}
?>
<main class="main users chart-page" id="skip-target">
    <div class="container">

        <!-- ******************** -->
        <div class="row">
            <div class="col-lg-9">

                <form action="<?= getBaseUrl() ?>user/insertUsr/" class="insert-form p-5 rounded" method="post">
                    <h3>تعریف کاربر:</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input id="usr_name" required name="usr_name" type="text" class="form-control Inums" placeholder="نام">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input id="usr_family" required name="usr_family" type="text" class="form-control Inums" placeholder="نام خانوادگی">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input id="usr_un" required name="usr_un" type="text" class="form-control " placeholder="نام کاربری">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input id="usr_pass" required name="usr_pass" type="text" class="form-control familymen" placeholder="پسورد">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <select id="usr_level" name="usr_level" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected disabled value="-1">سطح دسترسی</option>
                                <option value="2">کاریر ثبت کننده</option>
                                <option value="1">مدیر</option>
                                <option value="0">مدیر اصلی</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select id="usr_scope" name="usr_scope" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected disabled value="0">حوزه مربوطه</option>
                                <option value="برنامه ریزی">برنامه ریزی</option>
                                <option value="فرهنگی">فرهنگی</option>
                                <option value="مشارکت">مشارکت</option>
                                <option value="اشتغال">اشتغال</option>
                                <option value="مسکن">مسکن</option>
                                <option value="مالی">مالی</option>
                                <option value="حمایت">حمایت</option>
                                <option value="صندوق">صندوق</option>
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
                        <th scope="col">ویرایش</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>
</main>
<!--------------------------- other Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="dowryfiledlabel1" for="userrecipientName1" class="col-form-label">نام</label>
                        <input id="userrecipientName1" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="dowryfiledlabel2" for="userrecipientName2" class="col-form-label">نام خانوادگی</label>
                        <input id="userrecipientName2" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="dowryfiledlabel3" for="userrecipientName3" class="col-form-label">نام کاربری</label>
                        <input readonly id="userrecipientName3" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="dowryfiledlabel4" for="userrecipientName4" class="col-form-label">رمز عبور</label>
                        <input id="userrecipientName4" type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <select id="level" name="year" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected disabled value="-1">سطح دسترسی</option>
                            <option value="2">کاریر ثبت کننده</option>
                            <option value="1">مدیر</option>
                            <option value="0">مدیر اصلی</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="uscope" name="year" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected disabled value="0">حوزه مربوطه</option>
                            <option value="برنامه ریزی">برنامه ریزی</option>
                            <option value="فرهنگی">فرهنگی</option>
                            <option value="مشارکت">مشارکت</option>
                            <option value="اشتغال">اشتغال</option>
                            <option value="مسکن">مسکن</option>
                            <option value="مالی">مالی</option>
                            <option value="حمایت">حمایت</option>
                            <option value="صندوق">صندوق</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editUser()">ویرایش</button>
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

            let row = "<tr><td class='newColumn'>" + i++ + "</td><td class='newColumn'>" + dValues[3] + "</td><td class='newColumn'>" + dValues[4] + "</td><td class='newColumn'>" + dValues[0] + "</td><td class='newColumn'>" + dValues[1] + "</td><td class='newColumn'>" + dValues[2] + "</td><td class='newColumn'>" + dValues[5] + "</td><td class='newColumn'><a onclick=editRecord(" + "'" + dValues[0] + "'" + ") data-bs-toggle='modal' data-bs-target='#userModal' href='#'><i class='bi bi-pencil-square'></i></a></td></tr>";

            $('tbody').append(row);
        });
    }

    function editRecord(ukey) {
        $.ajax('/MonthStatisticsByMVC/user/getUsrGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'ukey': ukey,
            },
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#userrecipientName1').val(dValues[3]);
                $('#userrecipientName2').val(dValues[4]);
                $('#userrecipientName3').val(dValues[0]);
                $('#userrecipientName4').val(dValues[1]);
                $('#level').val(dValues[2]);
                $('#uscope').val(dValues[5]);
            },
        });
    }

    function editUser() {
        // console.log($('#userrecipientName3').val());
        $.ajax('/MonthStatisticsByMVC/user/EditUserRecord', {
            type: 'post',
            dataType: "json",
            data: {
                'nam': $('#userrecipientName1').val(),
                'fam': $('#userrecipientName2').val(),
                'un': $('#userrecipientName3').val(),
                'pass': $('#userrecipientName4').val(),
                'level': $('#level').val(),
                'scope': $('#uscope').val(),
            },
            success: function(data) {
                alert('بروزرسانی با موفقیت انجام شد.');
                $('.newColumn').remove();
                getInsure();
            },
        });
    }
</script>