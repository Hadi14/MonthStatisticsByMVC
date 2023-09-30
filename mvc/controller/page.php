
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
    /**************************************************************** */
    function report()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderReport('/report/reportnoname.php', $currdt[0], "reportwithoutn");
        }
    }
    /**************************************************************** */
    function reportwithusername()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderReport('/report/reportwithname.php', $currdt[0], "reportwithn");
        }
    }
    /**************************************************************** */
    function reportselectwithname()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/report/reportselectwithnam.php', $currdt[0]);
        }
    }
    /**************************************************************** */
    function reportselect()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/report/reportselect.php', $currdt[0]);
        }
    }
    /**************************************************************** */
    function registeruser()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/user/registeruser.php', $currdt[0]);
        }
    }
    function defineMenu()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::render('/admin/definemenu.php');
        }
    }
    function allocationaccess()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::render('/admin/allocationaccess.php');
        }
    }
    /**************************************************************** */
    function reportselect2month()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::render('/report/reportselecttwomonth.php');
        }
    }
    /**************************************************************** */
    function reporttwoMon()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderReport('/report/reporttwomonth.php', $currdt[0], "reporttowmonth");
        }
    }
    /**************************************************************** */
    function uploadfile()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::render('/statistic/uploadform.php', "", $currdt[0]);
        }
    }
}
