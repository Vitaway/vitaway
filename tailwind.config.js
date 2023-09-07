/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
        fontFamily: {
            'merri': ['"Merriweather"', 'serif'],
            'patua': ['"Patua One"', 'cursive']
        },
    },
    plugins: [
        require('flowbite/plugin'),
        // require('@tailwindcss/line-clamp')
    ],
}
