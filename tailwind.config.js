/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/*.{php,html,js}", "./public/include/*.{php,html,js}", "./public/js/*.{php,html,js}"],
  theme: {
    fontFamily: {
      sans: ['Giddyup', 'sans-serif'],
      serif: ['Giddyup', 'serif'],
    },
    backgroundSize: {
      'auto': 'auto',
      'cover': 'cover',
      'contain': 'contain',
      '300': 'auto 20rem',
      '250': 'auto 16rem',
      '150': 'auto 10rem',
    },
    extend: {},
  },
  plugins: [],
}

