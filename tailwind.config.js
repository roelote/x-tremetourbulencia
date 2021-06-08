const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'oswald': ['Oswald'],
                'fira': ['Fira Sans'],
                'poppins':['Poppins'],
            },
            colors:
            {
                'xtreme': {
                    '50': '#f5f9f6', 
                    '100': '#eaf3ed', 
                    '200': '#cbe0d1', 
                    '300': '#abceb5', 
                    '400': '#6ca97e', 
                    '500': '#2d8447', 
                    '600': '#297740', 
                    '700': '#226335', 
                    '800': '#1b4f2b', 
                    '900': '#164123'
                        }

            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
