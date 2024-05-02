module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily: {
      'pop': ['Poppins', 'sans-serif'],
      'yesava': ['Yeseva One', 'serif'],
      'ser': ['sans-serif'],
    },
    extend: {
      colors: {
        headblue: '#24B4E8',
        coreblue: '#9ADBEF',
        darkblue: '#2C6173',
        activeblue: '#6CBAD1',
        activeblack: '#1E363F',
        bgwhite: '#FCFCFA',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
