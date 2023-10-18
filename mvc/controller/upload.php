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
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
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



        // $dirpath = "../../uploads";
        // $files = scandir($dirpath);
        // foreach ($files as $file) {
        //     $filePath = "../../uploads" . '/' . $file;
        //     if (is_file($filePath)) {
        //         echo $file . "<br>";
        //     }
        // }
        // echo getcwd() . "<hr>";

        $dir = __DIR__ . "/../../uploads";
        // Sort in ascending order - this is default
        $a = scandir($dir);

        // Sort in descending order
        // $b = scandir($dir, 1);

        dump($a);

        // print_r($b);
    }
}
