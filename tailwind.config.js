/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
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
  plugins: [],
}
