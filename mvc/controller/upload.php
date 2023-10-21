<head>
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/bootstrap.rtl.min.css">
    <script src="<?= getBaseUrl() ?>js/jquery-3.7.0.js"></script>
</head>
<? class uploadController
{

    function uploadPdf()
    {
        $db = Db::getInstance();
        $sql = "select count from filecount ";
        $record = $db->query($sql);
        // dump($record[0]['count']);


        $target_dir = "uploads/";
        // dump($_FILES);
        $pureName = basename($_FILES["fileToUpload"]["name"]);
        $sepName = explode('.', $pureName);
        // dump($sepName[0] . $record[0]['count'] . '.pdf');
        $fileName = $sepName[0] . $record[0]['count'] . '.pdf';


        $target_file = $target_dir . $fileName;
        // dump($target_file);

        $sql = "update filecount set count=" . $record[0]['count'] + 1;
        $newrecord = $db->modify($sql);


        // $sql = "select count from filecount ";
        // $record = $db->query($sql);
        // dump($record[0]['count']);


        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if (!($_FILES["fileToUpload"]["name"])) {
            echo "Sorry, No file selected. Please Select a file.";
            $uploadOk = 0;
        }





        // exit;
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 20000000) {
            echo  $_FILES['fileToUpload']['size'] .  "******Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "pdf"
            // && $imageFileType != "png" && $imageFileType != "jpeg"  && $imageFileType != "gif"
        ) {
            echo "Sorry, only PDF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        /****************************************** */
        echo "<br>";
        $dirpath  = __DIR__ . "/../../uploads";
        $files = scandir($dirpath);
        // dump($files);
        foreach ($files as $file) {
            // $rest = substr($file, 0, -4);
            // echo $rest;
            // $rest = explode('.', $file);
            // dump($rest);
            $filePath = __DIR__ . "\/..\/..\/uploads" . '/' . $file;
            if (is_file($filePath)) {
                $rest = str_replace(' ', '&nbsp;', $file);
                $path = __DIR__ . "/../../uploads/" . $file;
                // echo "<a class='dl'  href='#' onclick='down()'>" . $file . "</a>";
                echo "<a class='dl'  href='" . getBaseUrl() . "upload/downloadPDF/$file' >" . $file . "</a>" . "&nbsp;&nbsp;&nbsp;" . "<a class='del'  href='" . getBaseUrl() . "upload/RemovePDF/$file' >Delete</a>" . "&nbsp;&nbsp;&nbsp;" . "<a data-bs-toggle='modal' data-bs-target='#renameModal' class='del'  onclick=LoadnameFile('$rest') href='' >Rename</a>";
                echo "<br>";
            }
        }
    }


    function downloadPDF($file)
    {

        // echo $file[0];
        // echo "<br>";

        $fileNm =  rawurldecode($file[0]);

        $fileName = basename($fileNm);
        $filePath = __DIR__ . "/../../uploads/$fileNm";
        /***************************************** */
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        /********************************************** */
        readfile($filePath);
        // exit;
    }
    function RemovePDF($file)
    {
        $fileNm =  rawurldecode($file[0]);
        echo $fileNm;
        echo "<br>";
        $path = __DIR__ . "/../../uploads/$fileNm";
        echo file_exists($path) . "<br>";
        @unlink($path);
        // if (@unlink($path)) {
        //     // header("Location: page.php?msg=success");
        //     echo "Success";
        // } else {
        //     // header("Location: page.php?msg=fail&reason=cannot-delete");
        //     echo "Fail";
        // }
    }
    function renamePDF()
    {
        $n = $_POST['oldname'];
        // $m = str_replace('&nbsp;', '*', $n);
        // $m = preg_replace('/\s+/u', '%20', $n);
        // echo $m;
        $path = __DIR__ . "/../../uploads/";
        $oldname = preg_replace('/\s+/u', ' ', $n);
        $old = $path .   $oldname;
        $new = $path . $_POST['newName'] . ".pdf";
        // echo  $_POST['oldname'] . "<br>";
        // echo $oldname . "<br>";
        // echo $old . "<br>";


        if (file_exists($old))
            echo "<br>**********Exist**********";
        // if (file_exists($new))
        //     echo "<br>**********Exist**********";
        rename($old, $new);
    }
}
?>
<!--------------------------- other Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="renameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">ویرایش نام فایل</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= getBaseUrl() ?>upload/renamePDF">
                    <div class="mb-0">
                        <label id="otherfiledlabel" for="recipient-name1" class="col-form-label">نام فایل:</label>
                        <input id="otherrecipientName1" name="newName" type="text" class="form-control">
                        <input id="oldname" name="oldname" type="hidden">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="ویرایش">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<script>
    function LoadnameFile(res) {
        $('#otherrecipientName1').val(res.substr(0, res.length - 4));
        $('#oldname').val(res);
        console.log($('#oldname').val());
    }
</script>
<script src="<?= getBaseUrl() ?>js/bootstrap.bundle.min.js"></script>