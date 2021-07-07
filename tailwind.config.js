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
                // 'fira': ['Fira Sans'],
                'poppins':['Poppins'],
                'roboto':['Roboto'],
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
                                },
                        'xtreme-y':{
                            '50': '#fffdf2', 
                            '100': '#fffbe6', 
                            '200': '#fff5bf', 
                            '300': '#ffef99', 
                            '400': '#ffe24d', 
                            '500': '#ffd600', 
                            '600': '#e6c100', 
                            '700': '#bfa100', 
                            '800': '#998000', 
                            '900': '#7d6900'
                        }

                    },
            container: {
                center: true,
              },

              maxHeight: {
                116: "29rem",
                /*464px*/
                125: "31.25rem",
                /*500px*/
                140: "35rem",
                /*560px*/
                150: "37.5rem",
                /*600px*/
                190: "47.5rem",
                /*760px*/
            },
            height: {
                116: "29rem",
                /*464px*/
                125: "31.25rem",
                /*500px*/
                140: "35rem",
                /*560px*/
                150: "37.5rem",
                /*600px*/
                200: "50rem",
                /*800px*/
                250: "62.5rem",
                /*800px*/
            },
            minHeight: {
                18: "4.5rem",
                /*72*/
                33: "8.125rem",
                /*132px*/
                62: "15.5rem",
                /*248px*/
                96: "24rem",
                /*384px*/
                150: "37.5rem",
                /*600px*/
            },
            margin: {
                '-100%': '-100%'
            },

            cursor: {
                auto: 'auto',
                default: 'default',
                pointer: 'pointer',
                text: 'text',
               'not-allowed': 'not-allowed',
               crosshair: 'crosshair',
               'zoom-in': 'zoom-in',
              }


        },
    },

    variants: {
        extend: {
            // opacity: ['disabled'],
            display: ["group-hover"],
            opacity: ["group-hover"],
            translate: ["group-hover"],
            transform: ["group-hover"],
            width: ["group-hover", "hover"],
            height: ["group-hover", "hover"],
            padding: ["group-hover", "hover"],
            animation: ["group-hover", "hover"],
            scale: ["group-hover", "hover"],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
