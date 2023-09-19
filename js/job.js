let jds = document.getElementById('i_jds');
let jdl = document.getElementById('i_jdl');
let nj = document.getElementById('i_nj');



let DNjob1 = document.getElementById('DNjob1');
let DNjob2 = document.getElementById('DNjob2');
let DNjob4 = document.getElementById('DNjob4');


jds.addEventListener('input', () => {
    sum();
})

jdl.addEventListener('input', () => {
    sum();
})
nj.addEventListener('input', () => {
    jfsum();
})

function sum() {
    let jds = +$('#i_jds').val();
    let jdl = +$('#i_jdl').val();
    let nj = +$('#i_nj').val();

    $('#i_jdsum').val(jds + jdl);
    $('#i_jsum').val(jds + jdl + nj);
}
function jfsum() {
    let jds = +$('#i_jds').val();
    let jdl = +$('#i_jdl').val();
    let nj = +$('#i_nj').val();
    $('#i_jsum').val(jds + jdl + nj);
}


DNjob1.addEventListener('input', () => {
    msum();
})

DNjob2.addEventListener('input', () => {
    msum();
})
DNjob4.addEventListener('input', () => {
    nDsum();
})

function msum() {
    let jds = +$('#DNjob1').val();
    let jdl = +$('#DNjob2').val();
    let nj = +$('#DNjob4').val();

    $('#DNjob3').val(jds + jdl);
    $('#DNjob5').val(jds + jdl + nj);
}
function nDsum() {
    let jds = +$('#DNjob1').val();
    let jdl = +$('#DNjob2').val();
    let nj = +$('#DNjob4').val();
    $('#DNjob5').val(jds + jdl + nj);
}