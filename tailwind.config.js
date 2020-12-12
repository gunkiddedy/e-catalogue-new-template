module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    screens: {
      'xs': '320px',
      // => @media (min-width: 375px) { ... }
      
      'sm': '481px',
      // => @media (min-width: 640px) { ... }

      'md': '641px',
      // => @media (min-width: 768px) { ... }

      'lg': '961px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1025px',
      // => @media (min-width: 1280px) { ... }

      'xxl': '1281px',

      // -----------------------------------
      // '2xl': {'max': '1535px'},
      // // => @media (max-width: 1535px) { ... }

      // 'xl': {'max': '1279px'},
      // // => @media (max-width: 1279px) { ... }

      // 'lg': {'max': '1023px'},
      // // => @media (max-width: 1023px) { ... }

      // 'md': {'max': '767px'},
      // // => @media (max-width: 767px) { ... }

      // 'sm': {'max': '639px'},
      // // => @media (max-width: 639px) { ... }

      // -----------------------------------
      // 'xs': {'min': '375px', 'max': '639px'},
      // 'sm': {'min': '640px', 'max': '767px'},
      // 'md': {'min': '768px', 'max': '1023px'},
      // 'lg': {'min': '1024px', 'max': '1279px'},
      // 'xl': {'min': '1280px'},
    },
    extend: {
      margin: {
        '-41': '-10.6rem',
        '-42': '-10.7rem'
      },
      height: {
        '2.25rem': '2.25rem',
        '30': '7rem',
        '41': '10.6rem',
        '72': '18rem',
        '74': '18.5rem',
        '80': '20rem',
        '82': '20.5rem',
        '88': '22rem',
        '106': '26.5rem'
      },
      width: {
        '26-persen': '26%'
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
    transitionDuration: ['responsive', 'hover', 'focus'],
    fontFamily: ['responsive', 'hover', 'focus'],
    animation: ['responsive', 'hover', 'focus'],
    rotate: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    padding: ['hover', 'focus', 'responsive'],
    fontSize: ['hover', 'focus'],
    extend: {
      padding: ['hover', 'focus', 'responsive'],
    }
  },
  plugins: [],
}
