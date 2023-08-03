/** @type {import('tailwindcss').Config} */
const { fontFamily } = require('tailwindcss/defaultTheme')

export default {
    content: ['./resources/**/*.{js,blade.php}'],
    theme: {
        extend: {
            colors: {
                shark: '#6B6B78',
                wasabi: '#C1EE8F',
            },
            fontFamily: {
                poppins: ['Poppins', ...fontFamily.serif],
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
