var familywomen = document.querySelector('#familywomen');

familywomen.addEventListener('blur', () => {
    if (+($('.familycity').val()) + +($('.familyrural').val()) != +($('.familymen').val()) + +($('.familywomen').val())) {
        alert("جمع خانوار روستایی و شهری با خانوار سرپرست مرد و زن برابر نیست. لطفا مقادیر را اصلاح کنید.");
    } else {
        $('.allfamily').val(+($('.familycity').val()) + +($('.familyrural').val()));
    }
})

var alloldfamily = document.querySelector('.familyoldrural');
alloldfamily.addEventListener('blur', () => {
    $('.alloldfamily').val(+($('.familyoldcity').val()) + +($('.familyoldrural').val()));
})

var alloldpop = document.querySelector('.peopleoldrural');
alloldpop.addEventListener('blur', () => {
    $('.alloldpeople').val(+($('.peopleoldcity').val()) + +($('.peopleoldrural').val()));
})
