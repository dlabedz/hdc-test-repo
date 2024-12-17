const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme))
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        },
        extend: {
            colors: {
              'theme-white':'#FAFAFA',
              'theme-black':'#151515',
              'theme-gray':'#454849',
              'theme-dark-gray':'#1F1F1F',
              'theme-light-gray':'#EEEEEE',
              'theme-teal':'#008095',
              'theme-medium-blue':'#00ACC8',
              'theme-light-blue':'#66CCDD',
              'theme-green':'#c9e500',
            }
        },
        fontFamily: {
            'sans': ['proxima-nova','ui-sans-serif', 'system-ui'],
            'serif': ['linotype-didot','ui-serif', 'Georgia'],
            'mono': ['ui-monospace', 'SFMono-Regular'],
        },
        backgroundColor: theme => ({
            'dark-gray': '#1F1F1F',
            'theme-white': '#FAFAFA',
            'light-gray': '#EEEEEE',
        })
    },
    plugins: [
        tailpress.tailwind
    ]
};
