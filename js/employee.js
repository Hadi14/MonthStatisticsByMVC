let official = document.getElementById('E_official');
let company = document.getElementById('E_company');
let sum = document.getElementById('E_sum');


official.addEventListener('input', () => {
    emplsum();
})

company.addEventListener('input', () => {
    emplsum();
})


function emplsum() {
    let jds = +$('#E_official').val();
    let jdl = +$('#E_company').val();

    $('#E_sum').val(jds + jdl);
}