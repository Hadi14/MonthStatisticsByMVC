var fix = document.getElementById('fix');
var wc = document.getElementById('wc');
var buyc = document.getElementById('buyc');
var buyr = document.getElementById('buyr');
var crtc = document.getElementById('crtc');
var crtr = document.getElementById('crtr');
var tbm = document.getElementById('tbm');
var tsep = document.getElementById('tsep');
var tbmaskan = document.getElementById('tbmaskan');


fix.addEventListener('input', () => {
    sum();
})

wc.addEventListener('input', () => {
    sum();
})
buyc.addEventListener('input', () => {
    sum();
})
buyr.addEventListener('input', () => {
    sum();
})
crtc.addEventListener('input', () => {
    sum();
})
crtr.addEventListener('input', () => {
    sum();
})
tbm.addEventListener('input', () => {
    sum();
})
tsep.addEventListener('input', () => {
    sum();
})
tbmaskan.addEventListener('input', () => {
    sum();
})


function sum() {
    let fix = +$('#fix').val();
    let wc = +$('#wc').val();
    let buyc = +$('#buyc').val();
    let buyr = +$('#buyr').val();
    let crtc = +$('#crtc').val();
    let crtr = +$('#crtr').val();
    let tbm = +$('#tbm').val();
    let tsep = +$('#tsep').val();
    let tbmskn = +$('#tbmaskan').val();
    $('#sum').val(fix + wc + buyc + buyr + crtc + crtr + tbm + tsep + tbmskn);
}
