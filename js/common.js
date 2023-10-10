var show = document.querySelectorAll('.cat-rt');
show.forEach(element => {
    element.addEventListener('click', (e) => {
        e.target.childNodes[3].classList.toggle('rotated');
    })
});

$(document).ready(function () {
    $.ajax('/MonthStatisticsByMVC/statistics/getEdtstatus/', {
        type: 'post',
        dataType: "json",
        success: function (data) {
            // important. must be write --> "==1" and "==0"
            if (data.status[0] == 0) {
                $('tbody tr td a.editbtn').addClass('disEnable');
                $('#disEditNote').append('<i class="bi bi-exclamation-circle-fill"></i>')
                $('#disEditNote').append('<spsan>عملیات ویرایش غیر فعال می باشد به مدیر سیستم مراجعه کنید.</spsan>')
            }
        },
    });
});
/************************************************************** */
$(document).ready(function () {
    $.ajax('/MonthStatisticsByMVC/statistics/getRemvstatus/', {

        ???
        type: 'post',
        dataType: "json",
        success: function (data) {
            // important. must be write --> "==1" and "==0"
            if (data.status[0] == 0 && data.level[0] == '2') {
                $('tbody tr td a.removebtn').addClass('disRemove');
            }
        },
    });
});
/**************************************************************/

$(document).ready(function () {
    $.ajax('/MonthStatisticsByMVC/statistics/getinsertsstatus/', {
        type: 'post',
        dataType: "json",
        success: function (data) {
            // important. must be write --> "==1" and "==0"
            if (data.status[0] == 0) {
                $('#ins_frm input').addClass('dis_insrt');
                $('#disInsertNote').append('<i class="bi bi-exclamation-circle-fill"></i>')
                $('#disInsertNote').append('<spsan>عملیات درج غیر فعال می باشد به مدیر سیستم مراجعه کنید.</spsan>')

            }
        },
    });
});

$('.modal.fade').on('hidden.bs.modal', function (e) {
    $(this)
        .find("input[type=text],textarea,select")
        .val('')
        .end()
        .find("input[type=checkbox], input[type=radio]")
        .prop("checked", "")
        .end();
})