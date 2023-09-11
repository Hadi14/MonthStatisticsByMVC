

var show = document.querySelectorAll('.cat-rt');
show.forEach(element => {
    element.addEventListener('click', (e) => {
        e.target.childNodes[3].classList.toggle('rotated');
    })
});


var familywomen = document.querySelector('#familywomen');
familywomen.addEventListener('blur', () => {
    if (+($('.familycity').val()) + +($('.familyrural').val()) != +($('.familymen').val()) + +($('.familywomen').val())) {
        alert("جمع خانوار روستایی و شهری با خانوار سرپرست مرد و زن برابر نیست. لطفا مقادیر را اصلاح کنید.");
    }

})


