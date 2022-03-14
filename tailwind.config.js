const defaultTheme = require('tailwindcss/defaultTheme')

const color = require('tailwindcss/colors')

module.exports = {
  // purge:[
  //   './**/*.php',
  //   './**/*.html',
  //   './src/**/*.php',
  //   './src/**/*.vue',
  // ],
  content: [
    './public/**/*.{php,html}',
    './src/**/*.{js,vue}',
  ],
  theme: {
    extend: {
      fontFamily:{
        sans: ['Nunito', ...defaultTheme.fontFamily.sans],
      },
    },
    colors: {
      // Build your palette here
      transparent: 'transparent',
      current: 'currentColor',
      white: color.white,
      black: color.black,
      blueGray: color.slate,
      coolGray: color.gray,
      gray: color.gray,
      trueGray: color.neutral,
      warmGray: color.stone,
      red: color.red,
      orange: color.orange,
      amber: color.amber,
      yellow: color.yellow,
      lime: color.lime,
      green: color.green,
      emerald: color.emerald,
      teal: color.teal,
      cyan: color.cyan,
      sky: color.sky,
      blue: color.blue,
      indigo: color.indigo,
      violet: color.violet,
      purple: color.purple,
      fuchsia: color.fuchsia,
      pink: color.pink,
      rose: color.rose,

      /* Alternative names for some colours */
      primary: color.blue,
      secondary: color.purple,
      tertiary: color.gray,
      danger: color.red,
      warning: color.amber,
      info: color.slate,
      success: color.green,
    },
    linearGradientColors: theme => theme('colors'),
    radialGradientColors: theme => theme('colors'),
    conicGradientColors: theme => theme('colors'),
  },

  variants: {
    extend: {
      opacity: ['disabled'],
    },

  },
  plugins: [require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
    require('tailwindcss-gradients'),
    require('tailwindcss-elevation')(['responsive']),],
}
