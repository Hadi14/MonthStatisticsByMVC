<? class DownloadController
{
    function downloadWord()
    {


        header("Content-Type: application/vnd.msword");

        header("content-disposition: attachment;filename=sampleword.docx");

        // header("Expires: 0"); //no-cache
        // header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); //no-cache


        // require_once 'vendor/autoload.php';
        // $phpWord = new \PhpOffice\PhpWord\PhpWord();
        // $section = $phpWord->addSection();
        // $section->addText(
        //     '"Learn from yesterday, live for today, hope for tomorrow. '
        //         . 'The important thing is not to stop questioning." '
        //         . '(Albert Einstein)'
        // );
        // $section->addText(
        //     '"Great achievement is usually born of great sacrifice, '
        //         . 'and is never the result of selfishness." '
        //         . '(Napoleon Hill)',
        //     array('name' => 'Tahoma', 'size' => 10)
        // );
        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // $objWriter->save('helloWorld.docx');


        // require_once 'vendor/autoload.php';
        // $pw = new \PhpOffice\PhpWord\PhpWord();
        // $section = $pw->addSection();
        // $html = "<h1> Hadi Hashemi </h1>";
        // \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
        // header("Content-Type: application/octet-stream");
        // header("Content-Disposition: attachment;filename=report.docx");
        // $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($pw, "PDF");
        // $objWriter->save("php://output");
    }
}
