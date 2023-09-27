$('#EnableEdit').click(function () {
    if ($(this).prop("checked") == true) {
        $.ajax('/MonthStatisticsByMVC/statistics/enableEdits/', {
            type: 'post',
            dataType: "json",
            success: function (data) {
                alert('فعالسازی ویرایش با موفقیت انجام شد.');
            },
        });
    } else if ($(this).prop("checked") == false) {
        $.ajax('/MonthStatisticsByMVC/statistics/disableEdits/', {
            type: 'post',
            dataType: "json",
            success: function (data) {
                alert('غیرفعالسازی ویرایش با موفقیت انجام شد.');
            },
        });
    }
});



$.ajax('/MonthStatisticsByMVC/statistics/getEnblstatus/', {
    type: 'post',
    dataType: "json",
    success: function (data) {
        // important. must be write --> "==1" and "==0"
        if (data.status[0] == 1) {
            $('#EnableEdit').prop('checked', true);
        } else if (data.status[0] == 0) {
            $('#EnableEdit').removeProp('checked');
        }
    },
});