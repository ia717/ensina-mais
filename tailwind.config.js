import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './node_modules/flowbite/**/*.js'
  ],

  theme: {
    extend: {
      userSelect: {
        'none': 'none',
        'text': 'text',
        'all': 'all',
        'auto': 'auto',
      },
      fontFamily: {
        poppins: ['poppins', 'sans-serif']
      },
      backgroundColor: {
        // Outras customizações de cores podem ir aqui
      },
      colors: {
        // Outras customizações de cores podem ir aqui
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
      // removi o forms, se precisar podemos colocar dnv, mas o daisyui nao vai funcionar - ian
    forms,
    require('flowbite/plugin')
  ],
  darkMode:'selector', // or 'media' or 'class'

};