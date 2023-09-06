/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'pjs': ['Plus Jakarta Sans', 'sans-serif'], // Ensure fonts with spaces have " " surrounding it.
            'mont': ['Montserrat', 'sans-serif']
        },
        extend: {
            backgroundImage: {
                'gradient-blue': "url('/img/BG.svg')"
            },
            colors:{
                'hitam':'#000013'
            },
            animation: {
                marquee: 'marquee 25s linear infinite',
                marquee2: 'marquee2 25s linear infinite',
            },
            keyframes: {
                marquee: {
                    '0%': { transform: 'translateX(0%)' },
                    '100%': { transform: 'translateX(-100%)' },
                },
                marquee2: {
                    '0%': { transform: 'translateX(100%)' },
                    '100%': { transform: 'translateX(0%)' },
                },
            },
        },
    },
    plugins: [],
}

