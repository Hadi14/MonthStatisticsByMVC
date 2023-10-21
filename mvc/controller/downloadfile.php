<? class downloadfileController
{
    function downloadPDF($file)
    {
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
    }
}