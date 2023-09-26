<?
if ($_SESSION['level'] != 0) {
    exit;
}
?>
<form action="<?= getBaseUrl() ?>page/reporttwoMon" class="insert-form p-5 rounded" method="post">
    <div class="row">
        <div class="col-md-3">
            <select id="year" name="year" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected value="1402">سال 1402</option>
                <option value="1403">سال 1403</option>
                <option value="1404">سال 1404</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="month1" id="mon1" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option disabled selected value="00">انتخاب ماه اول</option>
                <option value="01">فروردین</option>
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
        <div class="col-md-3">
            <select name="month2" id="mon2" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option disabled selected value="00">انتخاب ماه دوم</option>
                <option value="01">فروردین</option>
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
            <button class="btn btn-primary" type="sbmite">دریافت گزارش</button>
        </div>
</form>