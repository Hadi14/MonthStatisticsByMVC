<?
if ($_SESSION['level'] != 0) {
    exit;
}
?>
<main class="main users chart-page" id="skip-target">
    <div class="container">
        <h2 class="main-title">تعریف منوها:</h2>
        <!-- ******************** -->
        <div class="row">
            <div class="col-lg-9">
                <form action="<?= getBaseUrl() ?>admin/insertMenu/" class="insert-form p-5 rounded" method="post">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input required name="mname" type="text" class="form-control familyrural" placeholder="نام منو">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <input required name="mcode" type="number" class="form-control familymen" placeholder="کد منو">
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
                        <th scope="col">ردیف</th>
                        <th scope="col">نام منو</th>
                        <th scope="col">کد منو</th>
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
<div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label id="menufiledlabel1" for="otherrecipientName1" class="col-form-label">نام منو</label>
                        <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                    </div>
                    <div class="mb-0">
                        <label id="menufiledlabel2" for="otherrecipientName2" class="col-form-label">کد منو</label>
                        <input readonly id="otherrecipientName2" name="otherrecipientName2" type="text" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editMenus()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<script>
    $(document).ready(function() {
        getMenus();
    });



    function getMenus() {
        $.ajax('/MonthStatisticsByMVC/admin/getAllMenus/', {
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

            let row = "<tr><td class='newColumn'>" + i++ + "</td><td class='newColumn'>" + dValues[0] + "</td><td class='newColumn'>" + dValues[1] + "</td><td class='newColumn'><a onclick=editRecord(" + dValues[1] + ") data-bs-toggle='modal' data-bs-target='#menuModal' href='#'><i class='bi bi-pencil-square'></i></a></td></tr>";

            $('tbody').append(row);
        });
    }

    function editRecord(ukey) {
        $.ajax('/MonthStatisticsByMVC/admin/getMnuGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'ukey': ukey,
            },
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#otherrecipientName1').val(dValues[0]);
                $('#otherrecipientName2').val(dValues[1]);
            },
        });
    }

    function editMenus() {
        // console.log($('#userrecipientName3').val());
        $.ajax('/MonthStatisticsByMVC/admin/EditMenuRecord', {
            type: 'post',
            dataType: "json",
            data: {
                'nam': $('#otherrecipientName1').val(),
                'cod': $('#otherrecipientName2').val(),

            },
            success: function(data) {
                alert('بروزرسانی با موفقیت انجام شد.');
                $('.newColumn').remove();
                getMenus();
            },
        });
    }
</script>