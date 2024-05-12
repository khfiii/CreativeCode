/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors:{
                primary : '#5c3463',
                danger : '#840808',
                green : '#265332',
                blue : '#7480ff'
                // white : 'white'
            },
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    daisyui: {
        themes: ["dark"],
      },
    plugins: [require("daisyui")],
};
