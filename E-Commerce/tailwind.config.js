/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{vue,js,jsx,tsx}",
  ],
  theme: {
    extend: {},
    // fontFamily: {
    //   'JollyLodger': ['"Jolly Lodger', 'jolly-lodger']
    // },
    // fontFamily_A: {
    //   'Alkatra': ['Alkatra']
    // },
  },
  plugins: [
    require('tailwind-scrollbar-hide')
  ],
}
