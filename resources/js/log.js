document.addEventListener('alpine:init', ()=>{
    Alpine.directive('log', (el, {expression, value, modifiers})=>{
        const data = ['zidan', 'kahfi', 'bambang'];
        const emptyData = '[]';

        console.log(Array.isArray(emptyData));
    })

})
