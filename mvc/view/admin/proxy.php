<?php
// session_start();

// // ۱. بررسی لاگین کاربر
// if (!isset($_SESSION['user_id'])) {
//     die("دسترسی غیرمجاز: لطفاً ابتدا وارد شوید!");
// }

// ۲. بارگیری تنظیمات از env.php
$config = require __DIR__ . '/../../../app/config/env.php';
$reportServer = $config['report_server'];

// ۳. دریافت و اعتبارسنجی پارامتر گزارش
$reportPath = $_GET['reportPath'] ?? '';
$allowedReports = ['/SalesReport', '/InventoryReport']; // لیست گزارش‌های مجاز
if (!in_array($reportPath, $allowedReports)) {
    die("گزارش درخواستی معتبر نیست!");
}

// ۴. ساخت URL کامل برای Report Server
$apiUrl = $reportServer['url'] . "/api/v2.0/PowerBIReports" . $reportPath;

// ۵. ارسال درخواست به Report Server با CURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "{$reportServer['user']}:{$reportServer['password']}");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); // در محیط تولید فعال باشد

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// ۶. پردازش پاسخ
if ($httpCode === 200) {
    $reportData = json_decode($response, true);
    $embedUrl = $reportData['EmbedUrl'] . "?rs:Embed=true";
    header("Location: $embedUrl");
} else {
    echo "خطا: کد وضعیت $httpCode | " . curl_error($ch);
}

curl_close($ch);
?>