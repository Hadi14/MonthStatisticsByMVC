<?
if ($_SESSION['level'] != 0) {
    exit;
}
?>
<h4>تعیین سال جاری برای نمایش در صفحات</h4>
<form action="<?= getBaseUrl() ?>admin/currentyear/" class="insert-form p-5 rounded" method="post">
    <div class="row">
        <div class="col-md-3">
            <select id="year" name="year" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected value="1402">سال 1402</option>
                <option value="1403">سال 1403</option>
                <option value="1404">سال 1404</option>
            </select>
        </div>

        <div class="d-grid gap-2 d-md-block col-md-3">
            <button class="btn btn-primary" type="submit">ثبت</button>
        </div>
</form>
<div class="mt-3"><span>سال جاری فعلی: </span><b id="curYear"></b></div>


<script>
    $(document).ready(function() {
        $.ajax('/MonthStatisticsByMVC/admin/getCurrentYear/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                $('#curYear').text(data[0]['value']);
            },
        });
    });
</script>