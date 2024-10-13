/** @type {import('tailwindcss').Config} */
export default {
  content: ['./resources/**/*.{js,jsx,ts,tsx,blade.php}'],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}

