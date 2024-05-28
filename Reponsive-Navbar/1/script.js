// let items = document.querySelector(".items");
// let hamburger = document.querySelector('.hamburger')

// hamburger.addEventListener('click', ()=> {
    
// })

let bgToggle = document.querySelector('.dark-light-toggle');
let iconToggle = document.querySelector('.dark-light-toggle i');

bgToggle.addEventListener("click", () => {
    document.body.classList.toggle('dark')
    if(iconToggle.classList.contains('ri-moon-fill')){
        iconToggle.classList.replace('ri-moon-fill', 'ri-sun-fill');
    }
    else {
        iconToggle.classList.replace('ri-sun-fill', 'ri-moon-fill');
    }
})