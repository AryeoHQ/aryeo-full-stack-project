const defaultTheme = require('tailwindcss/defaultTheme')

let colors = require('tailwindcss/colors')

module.exports = {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Nunito', ...defaultTheme.fontFamily.sans]
      },
      colors: {
        yellow: colors.amber,
        green: colors.emerald,
        purple: colors.violet
      }
    }
  },
  plugins: [require('@tailwindcss/forms')]
}
