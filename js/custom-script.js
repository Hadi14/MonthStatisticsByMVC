
// var showCatBtns = document.querySelector('#r-t');
// var show = document.querySelector('.cat-rt');
// showCatBtns.addEventListener("click", function () {
//     showCatBtns.classList.toggle('rotated');
//     // alert("sdf");
// });

var show = document.querySelectorAll('.cat-rt');
console.log(show);
show.forEach(element => {
    element.addEventListener('click', (e) => {
        console.log(e);
    })
});