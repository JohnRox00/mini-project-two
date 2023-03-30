/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'sans': ['ui-sans-serif', 'system-ui','Lobster'],
      'serif': ['ui-serif', 'Georgia','Lobster'],
      'mono': ['ui-monospace', 'SFMono-Regular','Lobster'],
      'display': ['Oswald'],
      'body': ['"Open Sans"','Lobster'],
    }
  },
  plugins: [],
}

