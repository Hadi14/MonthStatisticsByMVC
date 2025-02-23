<?
if ($_SESSION['level'] != 0) {
    exit;
}

?>
<main class="main users chart-page" id="skip-target">
    <div class="container">

        <!-- ******************** -->
        <div class="row">
            <div class="col-lg-9">

                <form id="noteForm" action="<?= getBaseUrl() ?>admin/inserNotific/" class="insert-form p-5 rounded" method="post">
                    <h3>ثبت نوتیفیکیشن:</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 ">
                            <div class="input-group mb-2">
                                <span class="input-group-text">
                                    <i class="fa fa-file-text"></i>
                                </span>
                                <textarea name="notific" id="notific" cols="50" rows="10"></textarea>
                            </div>
                            <div class="form-check form-switch">
                                <input name="status" class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                <label class="form-check-label" for="flexSwitchCheckChecked">وضعیت نمایش نوتیفیکیشن</label>
                            </div>
                        </div>

                        <div class="pt-4">
                            <input name="submit" type="submit" value="ارسال" class="btn btn-primary  w-100 f-800">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ردیف</th>
                        <th scope="col">متن</th>
                        <th scope="col">وضعیت</th>
                        <th scope="col">ویرایش</th>
                        <th scope="col">حذف</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>
    </div>
</main>
<!---------------------------Edit modal  ------------------------------------------------------------------------->
<div class="modal fade" id="EditNoteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="forOldModalLabel">ویرایش اطلاعات رکورد</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-0">
                        <label for="ModalText" class="col-form-label">متن نوت:</label>
                        <textarea name="txt" id="ModalText" cols="50" rows="10"></textarea>
                        <input id="gfiled" type="hidden" name="">
                    </div>
                    <div class="mb-0">
                        <input id="Modalcheckbox" name="status" class="form-check-input border-dark" type="checkbox">
                        <label class="form-check-label" for="Modalcheckbox">وضعیت نمایش نوتیفیکیشن</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal" onclick="editNote()">ویرایش</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<!--------------------------------- Remove Modal ----------------------------------------------------------->
<div class="modal fade" id="RemoveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" dir="rtl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="otherModalLabel">عملیات حذف</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= getBaseUrl() ?>admin/rmovNote/" method="post">
                    <label for="">آیا از حذف رکورد مطمئن هستید؟</label>
                    <input id="goalrec" type="hidden" name="goalrec">
                    <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" value="بله">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خیر</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!--------------------------------- End of Modal ----------------------------------------------------------->
<!--------------------------------- POWERBI REPORT ----------------------------------------------------------->
<!-- <h3>hadi kiani</h3> -->
<?
// function getReportUrl($reportPath)
// {

//     $reportServerUrl = "http://172.19.66.154:8010/Reports/api/v2.0/PowerBIReports";
//     $username = "hadi";
//     $password = "@h61259";
//     $url = $reportServerUrl . "PowerBIReports(Path='$reportPath')/Export(PBIX)";

//     $ch = curl_init($url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
//     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);

//     $response = curl_exec($ch);
//     $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//     curl_close($ch);

//     if ($httpCode === 200) {
//         return $response;
//     } else {
//         return "Error: Unable to fetch report.";
//     }
//  }
// $reportPath = "/NewHemayat";
// $reportData = getReportUrl($reportPath);


/******************************* لیست کل گزارشها************************************************** */
// $reportServerUrl = "http://172.19.66.154:8010/Reports/api/v2.0/PowerBIReports";
// $username = "hadi";
// $password = "@h61259";
// $ch = curl_init($reportServerUrl);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
// curl_setopt($ch, CURLOPT_VERBOSE, true); // لاگ گیری را فعال کنید
// $response = curl_exec($ch);
// $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// $curlError = curl_error($ch);
// curl_close($ch);
// echo "HTTP Code: " . $httpCode . "<br>";
// echo "Response: " . $response . "<br>";
// echo "cURL Error: " . $curlError;

/****************************************** لیست نام گزارشها *************************************** */
// $reportServerUrl = "http://172.19.66.154:8010/Reports/api/v2.0/PowerBIReports";
// $username = "hadi";
// $password = "@h61259";

// $ch = curl_init($reportServerUrl);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// $response = curl_exec($ch);
// $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
// curl_close($ch);

// if ($httpCode === 200) {
//     $reports = json_decode($response, true);
//     foreach ($reports["value"] as $report) {
//         echo "Report Name: " . $report["Name"] . "<br>";
//         echo "Embed URL: <a href='" . $report["Path"] . "' target='_blank'>" . $report["Path"] . "</a><br><br>";
//     }
// } else {
//     echo "Error fetching reports.";
// }
/******************************************************************************************************* */




$reportServerUrl = "http://172.19.66.154:8010/Reports/powerbi/NewHemayat";
$username = "hadi";
$password = "@h61259";

// ابتدا یک درخواست ارسال می‌کنیم تا احراز هویت انجام شود
$ch = curl_init($reportServerUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");  // احراز هویت با نام کاربری و رمز عبور
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);  // استفاده از NTLM برای احراز هویت
curl_setopt($ch, CURLOPT_COOKIEJAR, "/tmp/cookies.txt");  // ذخیره کوکی‌ها
curl_setopt($ch, CURLOPT_COOKIEFILE, "/tmp/cookies.txt");  // استفاده از کوکی‌ها در درخواست‌های بعدی
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  // غیرفعال کردن بررسی SSL (اگر از SSL استفاده نمی‌شود)
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  // غیرفعال کردن بررسی SSL Host
curl_setopt($ch, CURLOPT_VERBOSE, true);  // فعال کردن نمایش لاگ کامل برای دیباگ کردن

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);  // گرفتن کد وضعیت HTTP
$curlError = curl_error($ch);  // گرفتن ارور در صورت بروز خطا
curl_close($ch);

if ($httpCode === 200) {
    echo "Report fetched successfully: <br>" . $response;
} else {
    echo "Error fetching report: " . $curlError . " (HTTP Code: $httpCode)";
}
?>

<iframe src="<?= $reportServerUrl ?>" width="100%" height="600px" frameborder="0"></iframe>


<!--------------------------------- POWERBI REPORT ----------------------------------------------------------->

<script>
    $(document).ready(function() {
        getNotes();
    });

    function getNotes() {
        $.ajax('/MonthStatisticsByMVC/admin/getAllNotes/', {
            type: 'post',
            dataType: "json",
            success: function(data) {
                // console.log(data);
                fillPageTable(data);
            },
        });
    }

    function fillPageTable(data) {
        let i = 1;
        data.forEach(element => {
            const dValues = Object.values(element);
            // console.log(dValues[0]);
            let row = "<tr><td class='newColumn'>" + i++ + "</td><td class='newColumn'>" + dValues[1] + "</td><td class='newColumn'>" + dValues[2] + "</td><td class='newColumn'><a onclick=editRecord('" + encodeURIComponent(dValues[1]) + "') data-bs-toggle='modal' data-bs-target='#EditNoteModal' href='#'><i class='bi bi-pencil-square'></i></a></td><td class='newColumn'><a onclick=removeRecord('" + dValues[0] + "') data-bs-toggle='modal' data-bs-target='#RemoveModal' href='#'><i class='bi bi-trash'></i></a></td></tr>";

            $('tbody').append(row);
        });
    }


    function editRecord(ukey) {
        ukey = decodeURIComponent(ukey); //IMPORTANT --> for space between notes 
        $.ajax('/MonthStatisticsByMVC/admin/getNoteGoalField/', {
            type: 'post',
            dataType: "json",
            data: {
                'ukey': ukey,
            },
            success: function(data) {
                const dValues = Object.values(data[0]);
                $('#ModalText').val(dValues[1]);
                $('#Modalcheckbox').prop('checked', +dValues[2]);
                $('#gfiled').val(dValues[0]);

            },
        });
    }

    function editNote() {
        $.ajax('/MonthStatisticsByMVC/admin/EditNoteRecord', {
            type: 'post',
            dataType: "json",
            data: {
                'txt': $('#ModalText').val(),
                'status': $('#Modalcheckbox').is(":checked"),
                'grecord': $('#gfiled').val(),
            },
            success: function(data) {
                alert('بروزرسانی با موفقیت انجام شد.');
                $('.newColumn').remove();
                getNotes();
            },
        });
    }

    function removeRecord(id) {

        $('#goalrec').val(id);

        // console.log(id);

        // $.ajax('/MonthStatisticsByMVC/admin/rmovNote', {
        //     type: 'post',
        //     dataType: "json",
        //     data: {
        //         'goalrec': id,
        //     },
        //     success: function(data) {
        //         alert('عملیات حذف با موفقیت انجام شد.');
        //         $('.newColumn').remove();
        //         getNotes();
        //     },
        // });
    }
</script>