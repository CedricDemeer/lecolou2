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
      '300': 'auto 300px',
      '250': 'auto 250px',
      '150': 'auto 150px',
    },
    extend: {},
  },
  plugins: [],
}

