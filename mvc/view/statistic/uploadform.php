<form action="<?= getBaseUrl() ?>upload/uploadPdf" method="post" enctype="multipart/form-data">
    <label for="title">عنوان فایل</label>
    <input id="title" type="text">
    فایل خود را برای آپلود انتخاب کنید.
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input style="border: 1px solid black !important;" type="submit" value="ارسال فایل" name="submit">
</form>