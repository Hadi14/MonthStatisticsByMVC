
<?
class PageController
{
    function home()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::render('/statistic/home.php');
        }
    }
    function population()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $sc = "<script>document.writeln($('#year').val());</script>";
            $un = $_SESSION['suname'];
            $data['records'] = StatisticsModel::allPopulation($sc, $un);
            dump($data['records']);
            echo $sc;
            Render::render('/statistic/population.php');
        }
    }
}
