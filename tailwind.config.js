/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./node_modules/preline/dist/*.js",
  ],
  theme: {
    extend: {}
  },
  plugins: [
    require('flowbite/plugin'),
    require('flowbite-typography'),
  ],
}

