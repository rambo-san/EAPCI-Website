module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        headblue : '#24B4E8',
        coreblue : '#9ADBEF',
        darkblue : '#2C6173',
        bgwhite : '#FCFCFA',

      },
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
