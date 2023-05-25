/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",],
    theme: {
        extend: {
            colors: {
                'text-gray-900': '#111827',
              },
        },
    },
    plugins: [
        require("tw-elements/dist/plugin.cjs")
    ]
}
