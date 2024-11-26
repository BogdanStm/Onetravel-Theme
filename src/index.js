function $eec774d25d64c5a2$export$b1e5508a851be14d() {
    const navbar = document.getElementById("nav");
    const menuBtn = document.getElementById("menu-btn");
    const menuClose = document.getElementById("menu-close");
    const menuCloseIcon = document.getElementById("menu-close--icon");
    const primaryMenu = document.getElementById("menu-primary-menu");
    const menuOverlay = document.getElementById("menu");
    // function menuCloseBtn() {
    //     menuClose.addEventListener('click', (e) => {
    //         e.preventDefault();
    //         primaryMenu.classList.remove('active-overlay');
    //         const activeSubMenu = document.querySelectorAll('.sub-menu.active');
    //         activeSubMenu.forEach(activeElem => {
    //             activeElem.classList.remove('active');
    //         });
    //     })
    // }
    // function menuOpenBtn() {
    //     menuBtn.addEventListener('click', (e) => {
    //         e.preventDefault();
    //         primaryMenu.classList.add('active-overlay');
    //         menuCloseIcon.style.left = '450px';
    //         let menu = window.matchMedia("(max-width: 899px)")
    //         let query = '120px';
    //         responsiveMenu(menu, query);
    //         menu.addListener(responsiveMenu);
    //     })
    //     menuClose.addEventListener('click', (e) => {
    //         e.preventDefault();
    //         primaryMenu.classList.remove('active-overlay');
    //         menuCloseIcon.style.left = '-50px';
    //         menuCloseIcon.style.transitionDelay = '0s';
    //     })
    // }
    function subMenuShow() {
        document.querySelectorAll(".menu-item-has-children").forEach((elem)=>{
            const subMenu = elem.querySelector(".sub-menu");
            elem.addEventListener("mouseover", (ev)=>{
                ev.preventDefault();
                const activeSubMenu = document.querySelectorAll(".sub-menu.active");
                subMenu.classList.add("active");
            });
            elem.addEventListener("mouseout", (ev)=>{
                ev.preventDefault();
                const activeSubMenu = document.querySelectorAll(".sub-menu.active");
                activeSubMenu.forEach((activeElem)=>{
                    activeElem.classList.remove("active");
                });
                subMenu.classList.remove("active");
            });
        });
    }
    const presedinte = document.getElementById("presedinte-content");
    const presedintBtn = document.getElementById("presedinte-btn");
    presedintBtn.addEventListener("click", (e)=>{
        presedinte.classList.add("active");
    });
    // function responsiveMenu(menu, query) {
    //     if(menu.matches) {
    //         menuCloseIcon.style.left = query;
    //     }
    //     window.addEventListener("scroll", e => {
    //         navbar.classList.toggle('sticky', window.scrollY > 400);
    //     });
    // }
    subMenuShow();
// menuOpenBtn();
// menuCloseBtn();
}


window.onload = function() {
    (0, $eec774d25d64c5a2$export$b1e5508a851be14d)();
// const animationEnter = (container) => {
//     return gsap.from(container, { autoAlpha: 0, duration: 1, clearProps: 'all', ease: 'power2.out'});
// }
// const animationLeave = (container) => {
//     return gsap.to(container, { autoAlpha: 0, duration: 1, clearProps: 'all', ease: 'power2.out'});
// }
// barba.init({
//     transitions: [{
//         once({next}) {
//             animationEnter(next.container);
//         },
//         leave: ({current}) => animationLeave(current.container),
//         enter({next}) {
//             animationEnter(next.container);
//         }
//     }],
// });
// barba.hooks.after(() => {
//     menu();
//     biteShow();
//     theme();
// });
};


//# sourceMappingURL=index.js.map
