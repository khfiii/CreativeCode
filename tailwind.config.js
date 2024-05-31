/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: '#5c3463'
            },
            fontFamily: {
                // poppins: ["Poppins", "sans-serif"],
            },
        },
    },
    daisyui: {
        themes: ["light", "dark", "cupcake"],
    },
    plugins: [require("daisyui")],
};
