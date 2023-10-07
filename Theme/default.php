<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emdad Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>img/bootstrap-icons-1.11.1/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/font.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/Custome-style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/all.min.css">
    <script src="<?= getBaseUrl() ?>js/jquery-3.7.0.js"></script>
    <script src="<?= getBaseUrl() ?>js/currentpage.js"></script>
</head>

<body>

    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">



        <!-- ! Sidebar *********************************************-->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head">
                    <a href="/" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        <!-- <span class="icon logo" aria-hidden="true"></span> -->
                        <i class="bi bi-buildings"></i>
                        <div class="logo-text">
                            <span class="logo-title">آمار ماهیانه </span>
                            <span class="logo-subtitle">داشبورد مدیریتی</span>
                        </div>

                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a class="active" href="<?= getBaseUrl() ?>user/login/"><span class="icon home" aria-hidden="true"></span>صفحه اصلی</a>
                        </li>
                        <li class="hemayat_LI">
                            <a class="show-cat-btn cat-rt" href="##">
                                <span class="icon document" aria-hidden="true"></span>حوزه حمایت
                                <span class="category__btn transparent-btn r-t" id="" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li class="hemayat_LI_Pop">
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/population">آمار جمعیتی</a>
                                </li>
                                <li class="hemayat_LI_Mny">
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/money"> آمار معیشت</a>
                                </li>
                                <li class="hemayat_LI_Dwry">
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/dowry">جهیزیه</a>
                                </li>
                                <li class="hemayat_LI_Insur">
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/insure">بیمه های اجتماعی</a>
                                </li>
                            </ul>
                        </li>


                        <li class="sandogh_LI">
                            <a class="show-cat-btn cat-rt" href="##">
                                <span class="icon folder" aria-hidden="true"></span>صندوق امدادولایت
                                <span class="category__btn transparent-btn r-t" id="" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="<?= getBaseUrl() ?>page/sandogh">صندوق امدادولایت</a>
                                </li>
                            </ul>
                        </li>


                        <li class="fargangi_LI">
                            <a class="show-cat-btn cat-rt " href="##">
                                <span class="icon bi bi-book" aria-hidden="true"></span>فرهنگی
                                <span class="category__btn transparent-btn r-t" id="" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu ">
                                <li>
                                    <a href="<?= getBaseUrl() ?>page/farhangi">ثبت آمار فرهنگی</a>
                                </li>
                            </ul>
                        </li>



                        <li class="maskan_LI">
                            <a class=" show-cat-btn cat-rt" href="##">
                                <span class="icon image" aria-hidden="true"></span>مسکن و ساختمان
                                <span class="category__btn transparent-btn r-t" id="" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="<?= getBaseUrl() ?>page/maskan">ثبت آمار مسکن</a>
                                </li>

                            </ul>
                        </li>
                        <li class="job_LI">
                            <a class="show-cat-btn cat-rt" href="##">
                                <span class="icon paper" aria-hidden="true"></span>اشتغال و خودکفایی
                                <span class="category__btn transparent-btn r-t" id="" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="<?= getBaseUrl() ?>page/job">ثبت آمار اشتغال</a>
                                </li>

                            </ul>
                        </li>
                        <li class="mosharekat_LI">
                            <a class="show-cat-btn cat-rt" href="##">
                                <span class="icon paper" aria-hidden="true"></span> مشارکت های مردمی
                                <span class="category__btn transparent-btn r-t" id="" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li class="mosharekat_LI_Inc">
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/income">ثبت آمار درآمدها</a>
                                </li>
                                <li class="mosharekat_LI_Ekrm">
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/ekram">ثبت آمار اکرام</a>
                                </li>

                            </ul>
                        </li>
                        <li class="employee_LI">
                            <a class="show-cat-btn cat-rt" href="##">
                                <span class="icon paper" aria-hidden="true"></span>نیروی انسانی
                                <span class="category__btn transparent-btn r-t" id="" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a href="<?= getBaseUrl() ?>page/employee">ثبت آمار نیروی انسانی</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="###">
                                <span class="icon message" aria-hidden="true"></span>
                                تست </a>
                            <span class="msg-counter">7</span>
                        </li>
                    </ul>
                    <span class="system-menu__title mt-5">پنل مدیر سیستم</span>
                    <ul class="sidebar-body-menu admin_menu">
                        <li>
                            <a href="#"><span class="icon edit" aria-hidden="true"></span>تعریف و ویرایش کاربران</a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon category" aria-hidden="true"></span>تعاریف
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/registeruser">تعریف کاربر</a>
                                </li>
                                <li>
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/currentpage">ماه جاری ثبت</a>
                                </li>
                                <li>
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/defineMenu">تعریف منوها</a>
                                </li>
                                <li>
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/allocationaccess">تخصیص دسترسی</a>
                                </li>
                                <li>
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/uploadfile">آپلود فایل</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="##">
                                <span class="icon user-3" aria-hidden="true"></span>گزارشات
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="sr-only">Open list</span>
                                    <span class="icon arrow-down" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/reportselect">گزارش ماهیانه</a>
                                </li>
                                <li>
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/reportselectwithname">گزارش ماهیانه (نام)</a>
                                </li>
                                <li>
                                    <a class="submenu" href="<?= getBaseUrl() ?>page/reportselect2month">گزارش دوماهه</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-footer">
                <a href="##" class="sidebar-user">
                    <span class="sidebar-user-img">
                        <picture>
                            <source srcset="<?= getBaseUrl() ?>img/avatar/avatar-illustrated-03.webp" type="image/webp"><img src="<?= getBaseUrl() ?>img/avatar/avatar-illustrated-03.png" alt="User name">
                        </picture>
                    </span>
                    <div class="sidebar-user-info">
                        <span class="sidebar-user__title">Enginner</span>
                        <span class="sidebar-user__subtitle">Support manager</span>
                    </div>
                </a>
            </div>
        </aside>
        <!-- End Sidebar *-*****************************************************-->



        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">
                        <div class="search-wrapper">
                            <i data-feather="search" aria-hidden="true"></i>
                            <input type="text" placeholder="جستجو ...." required>
                        </div>
                        <div class="namelable">
                            <div>
                                <?
                                echo "حوزه: " . "<b>" . $_SESSION['scope'] . "</b>";
                                echo " - <b>" . $_SESSION['name'] . ' ' . $_SESSION['family'] . "</b>" . ' ' . 'خوش آمدید.';
                                ?>
                            </div>
                            <div class="nowdate">
                                <? echo  'امروز: ' . jdate('l j F Y')  ?>
                            </div>
                        </div>
                    </div>

                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>
                        <div class="lang-switcher-wrapper">
                            <button class="lang-switcher transparent-btn" type="button">
                                فا
                                <i data-feather="chevron-down" aria-hidden="true"></i>
                            </button>
                            <ul class="lang-menu dropdown">
                                <li><a href="##">English</a></li>
                                <li><a href="##">فارسی</a></li>
                            </ul>
                        </div>
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>
                        <div class="notification-wrapper">
                            <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                                <span class="sr-only">To messages</span>
                                <span class="icon notification active" aria-hidden="true"></span>
                            </button>
                            <ul class="users-item-dropdown notification-dropdown dropdown">
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon info">
                                            <i data-feather="check"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">System just updated</span>
                                            <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                                                here.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon danger">
                                            <i data-feather="info" aria-hidden="true"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">The cache is full!</span>
                                            <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                                                interfere ...</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="##">
                                        <div class="notification-dropdown-icon info">
                                            <i data-feather="check" aria-hidden="true"></i>
                                        </div>
                                        <div class="notification-dropdown-text">
                                            <span class="notification-dropdown__title">New Subscriber here!</span>
                                            <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="link-to-page" href="##">Go to Notifications page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <source srcset="<?= getBaseUrl() ?>img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="<?= getBaseUrl() ?>img/avatar/avatar-illustrated-02.png" alt="User name">
                                    </picture>
                                </span>
                            </button>

                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li><a href="##">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span>پروفایل</span>
                                    </a></li>
                                <li>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#changePassModal">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>تنظیمات</span>
                                    </a>
                                </li>
                                <li><a class="log-out danger" href="<?= getBaseUrl() ?>user/logoute">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span>خروج</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!--Main !-->
            <main class="main users chart-page" id="skip-target">
                <div class="container">
                    <?= $out ?>
                </div>
            </main>
            <!--Footer !-->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p>2023 © Hadi Hashemi - <a href="#" target="_blank" rel="noopener noreferrer">Emdad Statistics</a></p>
                    </div>
                    <ul class="footer-end">
                        <li><a href="##">Instagram</a></li>
                        <li><a href="##">Telegram</a></li>
                        <li><a href="##">Eitta</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <!--------------------------- change Pass modal  ------------------------------------------------------------------------->
    <div class="modal fade" id="changePassModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" dir="rtl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="otherModalLabel">تغییر رمز:</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <form>
                        <div class="mb-0">
                            <label id="dowryfiledlabel1" for="otherrecipientName1" class="col-form-label">رمز فعلی:</label>
                            <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-body py-0">
                    <form>
                        <div class="mb-0">
                            <label id="dowryfiledlabel1" for="otherrecipientName1" class="col-form-label">رمز جدید:</label>
                            <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-body py-0">
                    <form>
                        <div class="mb-0">
                            <label id="dowryfiledlabel1" for="otherrecipientName1" class="col-form-label">تکرار رمز جدید:</label>
                            <input id="otherrecipientName1" name="otherrecipientName1" type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-dismiss="modal" onclick="changePassword()">تغییر رمز</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------- End of Modal ----------------------------------------------------------->
    <!-- Chart library -->
    <script src="<?= getBaseUrl() ?>plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="<?= getBaseUrl() ?>plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="<?= getBaseUrl() ?>js/script.js"></script>
    <script src="<?= getBaseUrl() ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= getBaseUrl() ?>js/common.js"></script>
    <script src="<?= getBaseUrl() ?>js/<?= $jsfile ?>.js"></script>

</body>

</html>

<?
$arr = getallaces();
if ($arr === "") {
?>
    <script>
        alert("هیچگونه دسترسی برای شما تعریف نشده است به مدیر سیستم مراجعه کنید.");
        $('.hemayat_LI').css('display', 'none');
        $('.sandogh_LI').css('display', 'none');
        $('.fargangi_LI').css('display', 'none');
        $('.maskan_LI').css('display', 'none');
        $('.job_LI').css('display', 'none');
        $('.mosharekat_LI').css('display', 'none');
        $('.employee_LI').css('display', 'none');
        $('.admin_menu').css('display', 'none');
        $('.system-menu__title').css('display', 'none');
    </script>
<?
    exit;
}
if ($arr[2] == 0 && $arr[3] == 0 && $arr[4] == 0 && $arr[5] == 0) {
?>
    <script>
        $('.hemayat_LI').css('display', 'none');
    </script>
    <? } else {
    if ($arr[2] == 0) { ?>
        <script>
            $('.hemayat_LI_Pop').css('display', 'none');
        </script>
    <? }
    if ($arr[3] == 0) { ?>
        <script>
            $('.hemayat_LI_Mny').css('display', 'none');
        </script>
    <? }
    if ($arr[4] == 0) { ?>
        <script>
            $('.hemayat_LI_Dwry').css('display', 'none');
        </script>
    <? }
    if ($arr[5] == 0) { ?>
        <script>
            $('.hemayat_LI_Insur').css('display', 'none');
        </script>
    <? }
}
if ($arr[6] == 0) { ?>
    <script>
        $('.sandogh_LI').css('display', 'none');
    </script>
<? }
if ($arr[7] == 0) { ?>
    <script>
        $('.fargangi_LI').css('display', 'none');
    </script>
<? }
if ($arr[8] == 0) { ?>
    <script>
        $('.maskan_LI').css('display', 'none');
    </script>
<? }
if ($arr[9] == 0) { ?>
    <script>
        $('.job_LI').css('display', 'none');
    </script>
<? }
if ($arr[11] == 0 && $arr[12] == 0) { ?>
    <script>
        $('.mosharekat_LI').css('display', 'none');
    </script>
    <? } else {
    if ($arr[11] == 0) {
    ?>
        <script>
            $('.mosharekat_LI_Inc').css('display', 'none');
        </script>
    <? }
    if ($arr[12] == 0) { ?>
        <script>
            $('.mosharekat_LI_Ekrm').css('display', 'none');
        </script>
    <? }
}
if ($arr[13] == 0) { ?>
    <script>
        $('.employee_LI').css('display', 'none');
    </script>
<? } ?>
<?
if ($_SESSION['level'] != 0) {
?>
    <script>
        $('.system-menu__title').css('display', 'none');
        $('.admin_menu').css('display', 'none');
    </script>
<?
}
?>


<script>
    function changePassword() {

    }
</script>