/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    './resources/views/**/*.html',
  ],
  theme: {
    extend: {
      fontFamily: {
        times: ['"Times New Roman"', 'serif'],
        poppins: ['Poppins', 'sans-serif'],
        quentin: ['Quentin', 'sans-serif'],
        quent: ['Quentin', 'sans-serif'],
      },
      colors: {
        secondary: 'var(--secondary-color, #C75D68)',
      },
    },
  },
  plugins: [],
}

