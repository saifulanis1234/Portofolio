/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: 'class', // Mengaktifkan dark mode berbasis class
    theme: {
        extend: {
            colors: {
                navy: {
                    800: '#112240',
                    900: '#0a192f',
                },
                electric: '#0ea5e9', // Electric Blue
            },
            fontFamily: {
                jakarta: ['"Plus Jakarta Sans"', 'sans-serif'],
            }
        },
    },
    plugins: [],
}