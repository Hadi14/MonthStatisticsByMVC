
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

            $un = $_SESSION['suname'];
            $data['records'] = StatisticsModel::allPopulation("1402", $un);
            // dump($data['records']);
            // echo "ok" . "<script>alert($('#year').val())</script>";

            Render::render('/statistic/population.php');
        }
        echo "ok" . "<script>let n = document.getElementById('year').value;
       alert(n);
        </script>";
    }
}
