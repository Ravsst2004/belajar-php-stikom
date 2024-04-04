/** @type {import('tailwindcss').Config} */

const glob = require("glob");
module.exports = {
  content: [...glob.sync("./*.php"), "./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        poppins: "Poppins",
      },
    },
  },
  plugins: [],
};
