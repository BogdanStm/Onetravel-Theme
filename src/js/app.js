import {menu} from './menu';

window.onload=function(){
    menu();
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
    
}