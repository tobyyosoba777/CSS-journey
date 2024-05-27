const misc = document.querySelector('.misc a');
const navItems = document.querySelector(".items");

misc.addEventListener("click", () => {
    navItems.classList.toggle('active');
})

