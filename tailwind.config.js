/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "judul": ['Merriweather'],
        "home": ['Kalam'],
        "keren" : ['Petemoss']
      }
    },
  },
  plugins: [],
}
