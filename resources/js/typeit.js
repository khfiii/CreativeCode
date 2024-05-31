import TypeIt from "typeit";


document.addEventListener('alpine:init', ()=>{
    Alpine.directive('typeit', (el, { value, modifiers, expression }, { Alpine, effect, cleanup }) => {

         const instance = new TypeIt(el, {
            speed: 70,
            loop: false,
            startDelay:value,
          })
          .move(null, { to: "END" })
          .go();

    })



});
