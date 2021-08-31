const colors = require('tailwindcss/colors')
module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
      colors: {
          transparent: 'transparent',
          current: 'currentColor',
          gray: colors.coolGray,
          blue: colors.lightBlue,
          red: colors.rose,
          yellow:colors.yellow,
          pink: colors.fuchsia,
          white:colors.white,
          black:colors.black,
          borderColor: {
              light: '#85d7ff',
              DEFAULT: '#D9D9D9',
              dark: '#009eeb',
          },
          searchButton: {
              DEFAULT: '#A6143B',
          },
          grayBackground: {
              DEFAULT: '#E1E1E1',
          },
          btnBlue: {
              DEFAULT: '#E8F8FF',
              dark: '#0C80A6',
              light: '#1DBEF2'
          },
      },
    extend: {
        spacing: {
            '137': '137px',
            '36':'36px',
            '1352':'1352px',
            '536':'536px',
            '30':'1.875rem',
            '128':'32rem',
            '25':'25rem'
        },
        fontFamily:{
            lato:['Lato']
        }
    },
  },
  variants: {
    extend: {
        boxDecorationBreak: ['hover', 'focus'],
    },
  },
  plugins: [
      require('@tailwindcss/custom-forms'),
  ],
}
