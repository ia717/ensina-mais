import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    screens: {
      'mm': '460px',
    },
    extend: {
      // screens: {
      //   'mm': { 'raw': '(min-width: 460px)' },
      // },
      userSelect: {
        'none': 'none',
        'text': 'text',
        'all': 'all',
        'auto': 'auto',
      },
      fontFamily: {
        // Outras customizações podem ir aqui
      },
      backgroundColor: {
        // Outras customizações podem ir aqui
      },
      colors: {
        // Outras customizações podem ir aqui
      },
    },
  },

  plugins: [
    // Plugin para adicionar a classe .user-select-none
    function ({ addUtilities }) {
      const newUtilities = {
        '.user-select-none': {
          '-webkit-user-select': 'none',  // Suporte para Chrome, Safari
          '-moz-user-select': 'none',     // Suporte para Firefox
          '-ms-user-select': 'none',      // Suporte para Internet Explorer/Edge
          'user-select': 'none',          // Padrão
        },
      };

      addUtilities(newUtilities, ['responsive', 'hover']);
    },
    // Plugin oficial de forms do Tailwind
    forms,
  ],

  darkMode: 'selector',
};
