
<?
class PageController
{
    function home()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::render('/statistic/home.php', "custom-script");
        }
    }
    function population()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/population.php', "population", $currdt[0]);
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
    function money()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/money.php', "money", $currdt[0]);
        }
    }
}
