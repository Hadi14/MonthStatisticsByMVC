<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emdad | Sign In</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/svg/logo.svg" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/font.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/Custome-style.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/all.min.css">
</head>
<!-- ok -->
<!-- *** -->
<!-- HADI -->

<body id="signin-body">
    <?

    if (isset($_GET['submit'])) {
    }
    ?>
    <div class="layer"></div>
    <?= $out ?>
    <!-- Chart library -->
    <script src="<?= getBaseUrl() ?>plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="<?= getBaseUrl() ?>plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="<?= getBaseUrl() ?>js/script.js"></script>
    <script src="<?= getBaseUrl() ?>js/bootstrap.bundle.min.js"></script>


</body>

</html>