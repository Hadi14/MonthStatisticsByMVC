<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">تخصیص دسترسی به کاربران :</h2>
        <!-- ******************** -->
        <div class="row">
            <div class="col-lg-9">
                <form action="<?= getBaseUrl() ?>admin/insertAlloc/" class="insert-form p-5 rounded" method="post">
                    <div class="row">
                        <div class="col-md-3">
                            <select id="user_nm" name="user_nm" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option disabled selected value="0">نام کاربر</option>
                                <script>
                                    $.ajax('/MonthStatisticsByMVC/user/getAllUsers/', {
                                        type: 'post',
                                        dataType: "json",
                                        success: function(data) {
                                            data.forEach(element => {
                                                const dValues = Object.values(element);
                                                let row = "<option  value='" + dValues[0] + "'>" + dValues[0] + "</option>";
                                                $('#user_nm').append(row);
                                            });
                                        },
                                    });
                                </script>
                            </select>
                        </div>
                        <div class="mb-0">
                            <input type="checkbox" id="hemayat_chb_insrt" name="hemayat_chb_insrt">
                            <label for="hemayat_chb_insrt" class="col-form-label"><b>منو اصلی حمایت</b></label>
                        </div>
                        <div class="mb-0 px-4">
                            <input type="checkbox" id="popu_chb_insrt" name="popu_chb_insrt">
                            <label for="popu_chb_insrt" class="col-form-label">منو جمعیت</label>
                        </div>
                        <div class="mb-0 px-4">
                            <input type="checkbox" id="money_chb_insrt" name="money_chb_insrt">
                            <label for="money_chb_insrt" class="col-form-label">منو معیشت</label>
                        </div>
                        <div class="mb-0 px-4">
                            <input type="checkbox" id="dowry_chb_insrt" name="dowry_chb_insrt">
                            <label for="dowry_chb_insrt" class="col-form-label">منو جهیزیه</label>
                        </div>
                        <div class="mb-2 px-4">
                            <input type="checkbox" id="insure_chb_insrt" name="insure_chb_insrt">
                            <label for="insure_chb_insrt" class="col-form-label">منو بیمه های اجتماعی</label>
                        </div>
                        <div class="mb-0">
                            <input type="checkbox" id="sandogh_chb_insrt" name="sandogh_chb_insrt">
                            <label for="sandogh_chb_insrt" class="col-form-label">منو صندوق امدادولایت</label>
                        </div>
                        <div class="mb-0">
                            <input type="checkbox" id="farhangi_chb_insrt" name="farhangi_chb_insrt">
                            <label for="farhangi_chb_insrt" class="col-form-label">منو فرهنگی</label>
                        </div>
                        <div class="mb-0">
                            <input type="checkbox" id="maskan_chb_insrt" name="maskan_chb_insrt">
                            <label for="maskan_chb_insrt" class="col-form-label">منو مسکن</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="job_chb_insrt" name="job_chb_insrt">
                            <label for="job_chb_insrt" class="col-form-label">منو اشتغال</label>
                        </div>
                        <div class="mb-0">
                            <input type="checkbox" id="mosharekat_chb_insrt" name="mosharekat_chb_insrt">
                            <label for="mosharekat_chb_insrt" class="col-form-label"><b>منو اصلی مشارکت</b></label>
                        </div>
                        <div class="mb-0 px-4">
                            <input type="checkbox" id="income_chb_insrt" name="income_chb_insrt">
                            <label for="income_chb_insrt" class="col-form-label">منو درآمدهای مشارکت</label>
                        </div>
                        <div class="mb-2 px-4">
                            <input type="checkbox" id="ekram_chb_insrt" name="ekram_chb_insrt">
                            <label for="ekram_chb_insrt" class="col-form-label">منو اکرام</label>
                        </div>
                        <div class="mb-0">
                            <input type="checkbox" id="employee_chb_insrt" name="employee_chb_insrt">
                            <label for="employee_chb_insrt" class="col-form-label">منو نیروی انسانی</label>
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
                        <th scope="col">نام کاربری</th>
                        <th scope="col">حمایتی</th>
                        <th scope="col">جمعیت</th>
                        <th scope="col">معیشت</th>
                        <th scope="col">جهیزیه</th>
                        <th scope="col">بیمه های اجتماعی</th>
                        <th scope="col">صندوق</th>
                        <th scope="col">فرهنگی</th>
                        <th scope="col">مسکن</th>
                        <th scope="col">اشتغال</th>
                        <th scope="col">مشارکت</th>
                        <th scope="col">درآمدهای مشارکت</th>
                        <th scope="col">اکرام</th>
                        <th scope="col">نیروی انسانی</th>
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
<div class="modal fade" id="AllocModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="menufiledlabel1" for="otherrecipientName1" class="col-form-label">نام کاربر</label>
                        <input readonly id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <input type="checkbox" id="hemayat_chb" name="hemayat_chb">
                        <label for="hemayat_chb" class="col-form-label"><b>منو اصلی حمایت</b></label>
                    </div>
                    <div class="mb-0 px-3">
                        <input type="checkbox" id="popu_chb" name="popu_chb">
                        <label for="popu_chb" class="col-form-label">منو جمعیت</label>
                    </div>
                    <div class="mb-0 px-3">
                        <input type="checkbox" id="money_chb" name="money_chb">
                        <label for="money_chb" class="col-form-label">منو معیشت</label>
                    </div>
                    <div class="mb-0 px-3">
                        <input type="checkbox" id="dowry_chb" name="dowry_chb">
                        <label for="dowry_chb" class="col-form-label">منو جهیزیه</label>
                    </div>
                    <div class="mb-2 px-3">
                        <input type="checkbox" id="insure_chb" name="insure_chb">
                        <label for="insure_chb" class="col-form-label">منو بیمه های اجتماعی</label>
                    </div>
                    <div class="mb-0">
                        <input type="checkbox" id="sandogh_chb" name="sandogh_chb">
                        <label for="sandogh_chb" class="col-form-label">منو صندوق امدادولایت</label>
                    </div>
                    <div class="mb-0">
                        <input type="checkbox" id="farhangi_chb" name="farhangi_chb">
                        <label for="farhangi_chb" class="col-form-label">منو فرهنگی</label>
                    </div>
                    <div class="mb-0">
                        <input type="checkbox" id="maskan_chb" name="maskan_chb">
                        <label for="maskan_chb" class="col-form-label">منو مسکن</label>
                    </div>
                    <div class="mb-2">
                        <input type="checkbox" id="job_chb" name="job_chb">
                        <label for="job_chb" class="col-form-label">منو اشتغال</label>
                    </div>
                    <div class="mb-0">
                        <input type="checkbox" id="mosharekat_chb" name="mosharekat_chb">
                        <label for="mosharekat_chb" class="col-form-label"><b>منو اصلی مشارکت</b></label>
                    </div>
                    <div class="mb-0 px-3">
                        <input type="checkbox" id="income_chb" name="income_chb">
                        <label for="income_chb" class="col-form-label">منو درآمدهای مشارکت</label>
                    </div>
                    <div class="mb-2 px-3">
                        <input type="checkbox" id="ekram_chb" name="ekram_chb">
                        <label for="ekram_chb" class="col-form-label">منو اکرام</label>
                    </div>
                    <div class="mb-0">
                        <input type="checkbox" id="employee_chb" name="employee_chb">
                        <label for="employee_chb" class="col-form-label">منو نیروی انسانی</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editAccess()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<script>
    $(document).ready(function() {
        getAllocations();
    });

    function getAllocations() {
        $.ajax('/MonthStatisticsByMVC/admin/getAllAlocn/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                fillPageTable(data);
            },
        });
    }

    function fillPageTable(data) {
        let i = 1;
        data.forEach(element => {
            const dValues = Object.values(element);

            let row = "<tr><td class='newColumn'>" + i++ + "</td><td class='newColumn'>" + dValues[0] + "</td><td class='newColumn'>" + dValues[1] + "</td><td class='newColumn'>" + dValues[2] + "</td><td class='newColumn'>" + dValues[3] + "</td><td class='newColumn'>" + dValues[4] + "</td><td class='newColumn'>" + dValues[5] + "</td><td class='newColumn'>" + dValues[6] + "</td><td class='newColumn'>" + dValues[7] + "</td><td class='newColumn'>" + dValues[8] + "</td><td class='newColumn'>" + dValues[9] + "</td><td class='newColumn'>" + dValues[10] + "</td><td class='newColumn'>" + dValues[11] + "</td><td class='newColumn'>" + dValues[12] + "</td><td class='newColumn'>" + dValues[13] + "</td><td class='newColumn'><a onclick=editRecord(" + "'" + dValues[0] + "'" + ") data-bs-toggle='modal' data-bs-target='#AllocModal' href='#'><i class='bi bi-pencil-square'></i></a></td></tr>";

            $('tbody').append(row);
        });
    }

    function editRecord(ukey) {
        // console.log(ukey);
        $.ajax('/MonthStatisticsByMVC/admin/getAccessGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'ukey': ukey,
            },
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#otherrecipientName1').val(ukey);
                $('#hemayat_chb').prop('checked', +dValues[1]);
                $('#popu_chb').prop('checked', +dValues[2]);
                $('#money_chb').prop('checked', +dValues[3]);
                $('#dowry_chb').prop('checked', +dValues[4]);
                $('#insure_chb').prop('checked', +dValues[5]);
                $('#sandogh_chb').prop('checked', +dValues[6]);
                $('#farhangi_chb').prop('checked', +dValues[7]);
                $('#maskan_chb').prop('checked', +dValues[8]);
                $('#job_chb').prop('checked', +dValues[9]);
                $('#mosharekat_chb').prop('checked', +dValues[10]);
                $('#income_chb').prop('checked', +dValues[11]);
                $('#ekram_chb').prop('checked', +dValues[12]);
                $('#employee_chb').prop('checked', +dValues[13]);
            },
        });
    }

    function editAccess() {
        // console.log($('#employee_chb').prop("checked"));
        $.ajax('/MonthStatisticsByMVC/admin/EditAccessRecord', {
            type: 'post',
            dataType: "json",
            data: {
                'un': $('#otherrecipientName1').val(),
                'hemayat_chb': $('#hemayat_chb').prop("checked"),
                'popu_chb': $('#popu_chb').prop("checked"),
                'money_chb': $('#money_chb').prop("checked"),
                'dowry_chb': $('#dowry_chb').prop("checked"),
                'insure_chb': $('#insure_chb').prop("checked"),
                'sandogh_chb': $('#sandogh_chb').prop("checked"),
                'farhangi_chb': $('#farhangi_chb').prop("checked"),
                'maskan_chb': $('#maskan_chb').prop("checked"),
                'job_chb': $('#job_chb').prop("checked"),
                'mosharekat_chb': $('#mosharekat_chb').prop("checked"),
                'income_chb': $('#income_chb').prop("checked"),
                'ekram_chb': $('#ekram_chb').prop("checked"),
                'employee_chb': $('#employee_chb').prop("checked"),
            },
            success: function(data) {
                alert('بروزرسانی با موفقیت انجام شد.');
                $('.newColumn').remove();
                getAllocations();
            },
        });
    }
</script>