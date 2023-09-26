<? class DownloadController
{
    function downloadWord()
    {
        require_once "vendor/autoload.php";
        $pw = new \PhpOffice\PhpWord\PhpWord();
        $section = $pw->addSection();
        $html = "<h1> Hadi Hashemi </h1>";
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html, false, false);
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment;filename=report.docx");
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($pw, "PDF");
        $objWriter->save("php://output");
    }
}
