/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./dist/**/*.{html,php,js}"],
  theme: {
    colors: {
      white: '#fff',
      brand: {
        primary: '#04b7ef',
      },
      text: {
        primary: '#000',
        secondary: '#767676',
        disabled: '#a1a1a1',
        inverted: {
          primary: '#fff',
          secondary: '#bdbdbd',
          disabled: '#959595',
        },
      },
      action: {
        primary: {
          default: '#04b7ef',
          hover: '#04a5d8',
          active: '#0390bd',
          focus: '#03c3ff',
          disabled: '#a1a1a1',
        },
        secondary: {
          default: '#cccccc',
          hover: '#04a5d8',
          active: '#0390bd',
          focus: '#03c3ff',
          disabled: '#a1a1a1',
        },
        inverted: {
          primary: {
            default: '#f0f0f0',
            hover: '#e8e5e5',
            active: '#cccccc',
            focus: '#f7f7f7',
            disabled: '#f8f8f8',
          },
          secondary: {
            default: '#026482',
            hover: '#01465a',
            active: '#013342',
            focus: '#038bb5',
            disabled: '#b1dae7',
          },
        },
      },
      background: {
        basic: {
          default: '#f9f9f9',
          hover: '#f5f5f5',
          active: '#f0f0f0',
          disabled: '#e7e7e7',
        },
        cover: {
          default: '#ffffff',
          hover: '#f9f9f9',
          active: '#f0f0f0',
          disabled: '#ffffff',
        },
        inverted: {
          primary: {
            default: '#3f3f3f',
          },
          secondary: {
            default: '#04b7ef',
          }
        }
      },
      border: {
        main: {
          default: '#d2d5d6',
          hover: '#04a5d8',
          active: '#0390bd',
          focus: '#03c3ff',
          disabled: '#e7e7e7',
        },
        separator: {
          default: '#ededed',
        },
      },
      emotion: {
        success: {
          default: '#67b529',
          hover: '#4c851e',
          active: '#5a9e24',
          disabled: '#f8f8f8',
        },
        warning: {
          default: '#f4b049',
          hover: '#c07400',
          active: '#ec9e29',
          disabled: '#f8f8f8',
        },
        danger: {
          default: '#cc454d',
          hover: '#840404',
          active: '#c22c2c',
          disabled: '#f8f8f8',
        },
      },
    },
    fontSize: {
      xs: '.75rem',
      sm: '.9375rem',
      base: '1rem',
      md: '1.0625rem',
      lg: '1.25rem',
      xl: '1.375rem',
      '2xl': '2.125rem',
      '3xl': '3rem',
      '4xl': '4rem',
      'display-lg': '4rem', // 64px
      'heading-xl': '3rem', // 48px
      'heading-lg': '2.125rem', // 34px
      'heading-md': '1.375rem', // 22px
      'heading-sm': '1.0625rem', // 17px
      'body-xl': '1.25rem', // 20px
      'body-lg': '1.0625rem', // 17px
      'body-md': '.9375rem', // 15px
      'body-sm': '.75rem', // 12px
    },
    fontFamily: {
      sans: ['"Roboto"', 'sans-serif'],
    },
    screens: {
      xs: '480px',
      sm: '600px',
      md: '900px',
      lg: '1200px',
      xl: '1600px',
    },
    extend: {
      ringColor: (theme) => ({
        DEFAULT: theme('colors.action.primary.default'),
      }),
      backgroundImage: {
        'check': `url("data:image/svg+xml,%3Csvg viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m5.9 11-2.8-2.8-1 1 3.7 3.7 8-8-.9-.9z' fill='%23fff'/%3E%3C/svg%3E")`,
        'radio': `url("data:image/svg+xml,%3Csvg viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m8 13.3c2.9 0 5.3-2.4 5.3-5.3s-2.4-5.3-5.3-5.3-5.3 2.4-5.3 5.3 2.4 5.3 5.3 5.3z' fill='%23fff'/%3E%3C/svg%3E")`,
        'brand-primary-radial': 'radial-gradient(171.42% 96.43% at 70% 80%, #04B7EF 0%, #07C 100%);',
      },
    },
  },
  safelist: [],
  plugins: [],
  corePlugins: {
    container: false,
  },
}

