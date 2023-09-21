
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
    function dowry()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/dowry.php', "dowry", $currdt[0]);
        }
    }
    function insure()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/insure.php', "insure", $currdt[0]);
        }
    }
    function sandogh()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/sandogh.php', "sandogh", $currdt[0]);
        }
    }
    function farhangi()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/farhangi.php', "farhangi", $currdt[0]);
        }
    }
    function maskan()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/maskan.php', "maskan", $currdt[0]);
        }
    }
    function job()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/job.php', "job", $currdt[0]);
        }
    }
    function income()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/income.php', "income", $currdt[0]);
        }
    }
    function ekram()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/ekram.php', "ekram", $currdt[0]);
        }
    }
    function employee()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/employee.php', "employee", $currdt[0]);
        }
    }
    function report()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderReport('/report/reportwn.php', $currdt[0]);
        }
    }
    function reportselect()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/report/reportselect.php', $currdt[0]);
        }
    }
}
