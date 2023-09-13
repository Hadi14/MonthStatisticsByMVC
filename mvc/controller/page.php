
<?
class PageController
{
    function home()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::render('/statistic/home.php', "population");
        }
    }
    function population()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            // dump($currdt[0]);

            // $un = $_SESSION['suname'];
            // $data['records'] = StatisticsModel::allPopulation("1402", $un);
            // dump($data['records']);
            // echo "<script>alert($('#year').val())</script>";
            Render::render('/statistic/population.php', "custom-script", $currdt[0]);
        }
    }
    function currentpage()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::render('/statistic/currentpage.php', "currentpage");
        }
    }
}
