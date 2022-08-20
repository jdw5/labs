const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                cabin: ['Cabin', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                primary: '#EF4444',
                primaryHover: '#B91C1C',
                primaryLighter: '#FCA5A5',
                primaryDarker: '#991B1B',
                dark: '#10101a',
                darkMenu: '#111827',
                light: '#F3F4F6',
                lightHover: '#F9FAFB',
                darkHover: '#13131d',
                lightMenu: '#E2E8F0',
                textDark: '#27272A',
                textLight: '#F3F4F6',
                textDarkHover: '#52525B',
                textLightHover: '#D1D5DB',
                placeholder: '#6b7280',
            },

            backgroundSize: {
                '4x' : '400%',
            },

            gridRow: {
                'span-1': 'span 1 / span 1',
                'span-2': 'span 2 / span 2',
                'span-3': 'span 3 / span 3',
            },

            gridColumn: {
                'span-1': 'span 1 / span 1',
                'span-2': 'span 2 / span 2',
                'span-3': 'span 3 / span 3',
            },

            animation: {
                gradient: 'gradient 10s ease infinite',
            },

            keyframes: {
                gradient: {
                    '0%' : { backgroundPosition: '0% 50%' },
                    '50%' : { backgroundPosition: '100% 50%' },
                    '100%' : { backgroundPosition: '0% 50%' },
                },
            },
        },
    },
    darkMode: 'class',

    // variants: {
    //     colors: ['dark'],
    //     textColor: ['dark'],
    //     borderColor: ['dark'],
    //     ringColor: ['dark']
    // }, 

    plugins: [require('@tailwindcss/forms')],
};
