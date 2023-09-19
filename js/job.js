let jds = document.getElementById('i_jds');
let jdl = document.getElementById('i_jdl');
let nj = document.getElementById('i_nj');

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