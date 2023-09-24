<?
if ($_SESSION['level'] != 0) {
    exit;
}
?>
<form action="" class="insert-form p-5 rounded" method="post">
    <div class="row">
        <div class="col-md-3">
            <select id="year" name="year" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected value="1402">سال 1402</option>
                <option value="1403">سال 1403</option>
                <option value="1404">سال 1404</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="month" id="mon" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected value="01">فروردین</option>
                <option value="02">اردیبهشت</option>
                <option value="03">خرداد</option>
                <option value="04">تیر</option>
                <option value="05">مرداد</option>
                <option value="06">شهریور</option>
                <option value="07">مهر</option>
                <option value="08">آبان</option>
                <option value="09">آذر</option>
                <option value="10">دی</option>
                <option value="11">بهمن</option>
                <option value="12">اسفند</option>
            </select>
        </div>
        <div class="d-grid gap-2 d-md-block col-md-3">
            <button class="btn btn-primary" onclick="insertcurrent()" type="button">ثبت</button>
        </div>
</form>
<!-- <button class="btn btn-primary mt-4" id="alertbtn" type="button">وضعیت</button> -->
<div class="form-check form-switch mt-5">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">فعال سازی/غیرفعال سازی ثبت</label>
</div>
</div>

<script>
    function insertcurrent() {

        // alert($('#year').val() + $('#mon').val());
        $.ajax('/MonthStatisticsByMVC/statistics/insertcurrentdate/', {
            type: 'post',
            dataType: "json",
            data: {
                'cyear': $('#year').val(),
                'cmonth': $('#mon').val(),
            },
            success: function(data) {
                alert('ثبت با موفقیت انجام شد.');
            },
        });
    }

    $(document).ready(function() {
        $('input[type="checkbox"]').click(function() {
            if ($(this).prop("checked") == true) {
                $.ajax('/MonthStatisticsByMVC/statistics/enableinserts/', {
                    type: 'post',
                    dataType: "json",
                    // data: {
                    //     'cyear': $('#year').val(),
                    //     'cmonth': $('#mon').val(),
                    // },
                    success: function(data) {
                        alert('فعالسازی با موفقیت انجام شد.');
                    },
                });
            } else if ($(this).prop("checked") == false) {
                $.ajax('/MonthStatisticsByMVC/statistics/disableinserts/', {
                    type: 'post',
                    dataType: "json",
                    // data: {
                    //     'cyear': $('#year').val(),
                    //     'cmonth': $('#mon').val(),
                    // },
                    success: function(data) {
                        alert('غیرفعالسازی با موفقیت انجام شد.');
                    },
                });
            }
        });
    });



    $(document).ready(function() {
        $.ajax('/MonthStatisticsByMVC/statistics/getinsertsstatus/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                // important. must be write --> "==1" and "==0"
                if (data.status[0] == 1) {
                    $('#flexSwitchCheckDefault').prop('checked', true);
                } else if (data.status[0] == 0) {
                    $('#flexSwitchCheckDefault').removeProp('checked');
                }
            },
        });
    });
</script>