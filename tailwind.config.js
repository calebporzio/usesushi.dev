/** @type {import('tailwindcss').Config} */
const { fontFamily } = require('tailwindcss/defaultTheme')

export default {
    content: ['./resources/**/*.{js,blade.php}'],
    theme: {
        extend: {
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
