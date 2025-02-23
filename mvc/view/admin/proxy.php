<?php
session_start();

// بررسی لاگین کاربر در وب‌اپلیکیشن
// if (!isset($_SESSION['user_id'])) {
//     die("دسترسی غیرمجاز: کاربر لاگین نشده است!");
// }

// بررسی منشأ درخواست
// $allowedReferer = "https://172.19.66.154";
// if (!isset($_SERVER['HTTP_REFERER']) || strpos($_SERVER['HTTP_REFERER'], $allowedReferer) === false) {
//     die("دسترسی غیرمجاز!");
// }





// exit;
// بارگیری تنظیمات امنیتی
$config = require __DIR__ . '/../../app/config/env.php';
$reportServerUrl = $config['report_server']['url'];
$serviceAccount = $config['report_server']['user'];
$servicePassword = $config['report_server']['password'];

// دریافت پارامتر گزارش
$reportPath = isset($_GET['reportPath']) ? $_GET['reportPath'] : '';
if (empty($reportPath)) {
    die("پارامتر گزارش نامعتبر است!");
}

// ایجاد درخواست به Power BI Report Server
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $reportServerUrl . "/api/v2.0/PowerBIReports" . $reportPath);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$serviceAccount:$servicePassword");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // فعال در محیط تولید!

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($httpCode === 200) {
    $reportData = json_decode($response, true);
    $embedUrl = $reportData['EmbedUrl'] . "?rs:Embed=true";
    header("Location: $embedUrl");
} else {
    echo "خطا: کد وضعیت $httpCode";
}

curl_close($ch);
