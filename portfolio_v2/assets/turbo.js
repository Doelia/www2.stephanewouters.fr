import '../vendor/turbo.es2017-esm.js';
import morphdom from "../vendor/morphdom-esm.js";

// addEventListener("turbo:before-render", (event) => {
//     event.detail.render = (currentElement, newElement) => {
//         morphdom(currentElement, newElement)
//     }
// })

addEventListener("turbo:click", (event) => {
    const el = event.target.parentNode;
    console.log('turbo:click');
    // gsap.fromTo('.content', { y: 50, opacity: 0 }, { y: 0, opacity: 1 });
    gsap.set('.content', { y: 50, opacity: 0 });
})

addEventListener("turbo:frame-load", (event) => {
    console.log('turbo:frame-load');
//     // const el = event.target.parentNode;
     gsap.to('.content', { y: 0, opacity: 1 });
//     // gsap.fromTo('.content', { y: 50, opacity: 0 }, { y: 0, opacity: 1 });
})

