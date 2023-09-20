var wnum = document.getElementById('wnum');
var jnum = document.getElementById('jnum');


wnum.addEventListener('input', () => {
    $('#isum').val(+$(wnum).val() + +$(jnum).val());
})

jnum.addEventListener('input', () => {
    $('#isum').val(+$(wnum).val() + +$(jnum).val());
})


var official = document.getElementById('otherrecipientName1');
var company = document.getElementById('otherrecipientName2');
var modalsum = document.getElementById('otherrecipientName3');

