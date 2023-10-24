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

                <form id="noteForm" action="<?= getBaseUrl() ?>admin/inserNotific/" class="insert-form p-5 rounded" method="post">
                    <h3>ثبت نوتیفیکیشن:</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <textarea name="notific" id="notific" cols="50" rows="10"></textarea>
                            </div>
                            <div class="form-check form-switch">
                                <input name="status" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <!-- <input type="checkbox" id="hemayat_chb_insrt" name="status"> -->
                                <label class="form-check-label" for="flexSwitchCheckChecked">وضعیت نمایش نوتیفیکیشن</label>
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
                        <th scope="col">متن</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">ویرایش</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>
</main>
<!---------------------------Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="EditNoteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="forOldModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label for="ModalText" class="col-form-label">متن نوت:</label>
                        <textarea name="txt" id="ModalText" cols="50" rows="10"></textarea>
                        <input id="gfiled" type="hidden" name="">
                    </div>
                    <div class="mb-0">
                        <input id="Modalcheckbox" name="status" class="form-check-input border-dark" type="checkbox">
                        <label class="form-check-label" for="Modalcheckbox">وضعیت نمایش نوتیفیکیشن</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editNote()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->

<script>
    $(document).ready(function() {
        getNotes();
    });

    function getNotes() {
        $.ajax('/MonthStatisticsByMVC/admin/getAllNotes/', {
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
            // console.log(dValues[0]);
            let row = "<tr><td class='newColumn'>" + i++ + "</td><td class='newColumn'>" + dValues[1] + "</td><td class='newColumn'>" + dValues[2] + "</td><td class='newColumn'><a onclick=editRecord('" + encodeURIComponent(dValues[1]) + "') data-bs-toggle='modal' data-bs-target='#EditNoteModal' href='#'><i class='bi bi-pencil-square'></i></a></td></tr>";

            $('tbody').append(row);
        });
    }


    function editRecord(ukey) {
        ukey = decodeURIComponent(ukey); //IMPORTANT --> for space between notes 
        $.ajax('/MonthStatisticsByMVC/admin/getNoteGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'ukey': ukey,
            },
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#ModalText').val(dValues[1]);
                $('#Modalcheckbox').prop('checked', +dValues[2]);
                $('#gfiled').val(dValues[0]);

            },
        });
    }

    function editNote() {
        $.ajax('/MonthStatisticsByMVC/admin/EditNoteRecord', {
            type: 'post',
            dataType: "json",
            data: {
                'txt': $('#ModalText').val(),
                'status': $('#Modalcheckbox').is(":checked"),
                'grecord': $('#gfiled').val(),
            },
            success: function(data) {
                alert('بروزرسانی با موفقیت انجام شد.');
                $('.newColumn').remove();
                getNotes();
            },
        });
    }
</script>