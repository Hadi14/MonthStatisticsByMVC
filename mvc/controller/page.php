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
            $data['records']=StatisticsModel::allPopulation($year,$month,$un);
            Render::render('/statistic/population.php');
        }
    }
}
