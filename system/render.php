<? class Render
{
    public static function render($filePath, $jsfile = "custom-script", $data = array(), $err = false)
    {
        // echo "<br>renderform";
        if ($jsfile == "") {
            $jsfile = "custom-script";
        }
        extract($data);
        ob_start();
        require_once("mvc/view/" . $filePath);
        $out = ob_get_clean();
        require_once('theme/default.php');
    }
    public static function renderlogin($filePath, $data = array())
    {
        // echo "<br>renderform";

        extract($data);
        ob_start();
        require_once("mvc/view/" . $filePath);
        $out = ob_get_clean();
        require_once('theme/logintheme.php');
    }
    public static function renderReport($filePath,  $data = array(), $cssname)
    {
        extract($data);
        ob_start();
        require_once("mvc/view/" . $filePath);
        $out = ob_get_clean();
        require_once('theme/reporttheme.php');
    }
}
