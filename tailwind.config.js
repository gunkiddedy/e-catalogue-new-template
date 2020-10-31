module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {
      margin: {
        '-41': '-10.6rem',
        '-42': '-10.7rem',
      },
      height: {
        '30': '7rem',
        '72': '18rem',
        '74': '18.5rem',
        '80': '20rem',
        '88': '22rem'
      }
    },
    fontFamily: {
      'sf-pro': ['SF Pro Display'],
      'omnia': ['Omnia']
    }
  },
  variants: {
    margin: ['responsive', 'hover', 'focus'],
    negativeMargin: ['responsive', 'hover'],
    overflow: ['responsive', 'hover', 'focus'],
    height: ['responsive', 'hover'],
    transitionDuration: ['responsive', 'hover', 'focus']
  },
  plugins: [],
}
