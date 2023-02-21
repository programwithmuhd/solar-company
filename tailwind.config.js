/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1F283C',
        secondary: {
          logo: '#FFB700',
          slogan: '#00B0DF',
          body: '#F8F8F8'
        }
      }
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
