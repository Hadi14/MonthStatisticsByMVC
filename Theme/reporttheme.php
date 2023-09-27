<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/print.css" media="print">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/font.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/report.css">
    <link rel="stylesheet" href="<?= getBaseUrl() ?>css/<?= $cssname ?>.css">
    <script src="<?= getBaseUrl() ?>js/jquery-3.7.0.js"></script>
    <title>گزارش ماهانه</title>
</head>

<body>
    <div class="container">

        <?= $out ?>
    </div>
    <script src="<?= getBaseUrl() ?>js/commonreport.js"></script>
</body>

</html>