/** @type {import('tailwindcss').Config} */
export default {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    extend: {
      fontFamily:{
        'f': ['Pacifico', 'cursive'],
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

