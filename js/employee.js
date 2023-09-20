let official = document.getElementById('E_official');
let company = document.getElementById('E_company');
let sum = document.getElementById('E_sum');


let modaloff = document.getElementById('otherrecipientName1');
let modalcomp = document.getElementById('otherrecipientName2');



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


function ModalEmplsum() {
    let jds = +$('#otherrecipientName1').val();
    let jdl = +$('#otherrecipientName2').val();
    $('#otherrecipientName3').val(jds + jdl);
}



modaloff.addEventListener('input', () => {
    ModalEmplsum();
})

modalcomp.addEventListener('input', () => {
    ModalEmplsum();
})
