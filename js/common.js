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
                $('tbody tr td a').addClass('disEnable');
            }
        },
    });
});


$(document).ready(function () {
    $.ajax('/MonthStatisticsByMVC/statistics/getinsertsstatus/', {
        type: 'post',
        dataType: "json",
        success: function (data) {
            // important. must be write --> "==1" and "==0"
            if (data.status[0] == 0) {
                $('#ins_frm input').addClass('dis_insrt');
            }
        },
    });
});