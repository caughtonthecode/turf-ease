import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                VisAgeOutline:['VisAgeOutline'],
                NatoSans:["Noto Sans", "sans-serif"],
                Audiowide:["Audiowide", "sans-serif"],
                Poppins:["Poppins", "sans-serif"],
                Roboto:["Roboto", "sans-serif"],
                OpenSans:["Open Sans", "sans-serif"]
            },
        },
    },

    plugins: [forms],
};
