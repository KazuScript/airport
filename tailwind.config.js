const withMT = require("@material-tailwind/react/utils/withMT");

module.exports = withMT({
  content: [
    "./resources/js/**/*.{js,jsx,ts,tsx}",
    "./resources/views/**/*.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
});
