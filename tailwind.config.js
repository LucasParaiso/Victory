import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
              'orangeYellow': '#F9B307',
              'orangeYellowHover': '#ffffff',
              'gray': '#1A1A1B',
              'gray-black': '#131315',
              'gray-white': '#303037',
            },
        },
    },

    plugins: [forms],
};
