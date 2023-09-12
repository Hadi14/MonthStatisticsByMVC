var show = document.querySelectorAll('.cat-rt');
show.forEach(element => {
    element.addEventListener('click', (e) => {
        e.target.childNodes[3].classList.toggle('rotated');
    })
});




