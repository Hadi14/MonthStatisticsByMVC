var wnum = document.getElementById('wnum');
var jnum = document.getElementById('jnum');


wnum.addEventListener('input', () => {
    $('#isum').val(+$(wnum).val() + +$(jnum).val());
})

jnum.addEventListener('input', () => {
    $('#isum').val(+$(wnum).val() + +$(jnum).val());
})