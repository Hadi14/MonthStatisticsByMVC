
<?
class PageController
{
    function home()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::renderPage('/statistic/home.php', "custom-script");
        }
    }
    function population()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/population.php', "population", $currdt[0]);
        }
    }
    function currentpage()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::renderPage('/statistic/currentpage.php', "currentpage");
        }
    }
    function currentyear()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::renderPage('/statistic/currentYear.php', "currentyear");
        }
    }
    function money()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/money.php', "money", $currdt[0]);
        }
    }
    function dowry()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/dowry.php', "dowry", $currdt[0]);
        }
    }
    function insure()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/insure.php', "insure", $currdt[0]);
        }
    }
    function sandogh()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/sandogh.php', "sandogh", $currdt[0]);
        }
    }
    function farhangi()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/farhangi.php', "farhangi", $currdt[0]);
        }
    }
    function maskan()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/maskan.php', "maskan", $currdt[0]);
        }
    }
    function job()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/job.php', "job", $currdt[0]);
        }
    }
    function income()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/income.php', "income", $currdt[0]);
        }
    }
    function ekram()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/ekram.php', "ekram", $currdt[0]);
        }
    }
    function employee()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/employee.php', "employee", $currdt[0]);
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
            Render::renderPage('/report/reportselectwithnam.php', $currdt[0]);
        }
    }
    /**************************************************************** */
    function reportselect()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/report/reportselect.php', $currdt[0]);
        }
    }
    /**************************************************************** */
    function registeruser()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/user/registeruser.php', $currdt[0]);
        }
    }
    function defineMenu()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::renderPage('/admin/definemenu.php');
        }
    }
    /****************************************************************** */
    function allocationaccess($err = array())
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            // echo $err[0];
            // exit;
            if (isset($err[0])) {
                if ($err[0] == 'error') {
                    Render::renderPage('admin/allocationaccess.php', "custom-script", array(), true);
                }
            } else {
                Render::renderPage('/admin/allocationaccess.php');
            }
        }
    }
    /**************************************************************** */
    function reportselect2month()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            Render::renderPage('/report/reportselecttwomonth.php');
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
    function reporttwoMonByList()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderReport('/report/reporttwomonthListly.php', $currdt[0], "reporttowmonth");
        }
    }
    /**************************************************************** */
    function reporttwoMonListly()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/report/reportselecttwomonthforListCompare.php');
        }
    }
    /**************************************************************** */
    function uploadfile()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/statistic/uploadform.php', "", $currdt[0]);
        }
    }
    /**************************************************************** */
    function notification()
    {
        if (!isset($_SESSION['suname'])) {
            header("Location:" . getBaseUrl() . 'user/login/');
        } else {
            $currdt = StatisticsModel::getcurrdate();
            Render::renderPage('/admin/notification.php', "", $currdt[0]);
        }
    }
}
