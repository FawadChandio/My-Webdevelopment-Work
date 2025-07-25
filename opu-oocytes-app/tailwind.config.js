/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{js,jsx,ts,tsx}", "./public/index.html"],
  theme: {
    extend: {
      colors: {
        figma: {
          'bg-primary': '#f1f2f5ff',
          'card-main': '#171E3B',
          'card-inner': '#212a4aff',
          'data-box': '#1E2542',
          'text-light': '#E0E7FF',
          'text-muted': '#AAB2C9',
          'icon-blue': '#5DB0FF',
          'gradient-start': '#7B61FF',
          'gradient-end': '#3A2EFF',
        },
      },
      fontFamily: {
        sans: ["Inter", "sans-serif"],
      },
      boxShadow: {
        'figma-card': '0 8px 20px rgba(0, 0, 0, 0.35)',
        'figma-button': '0 4px 12px rgba(113, 85, 252, 0.5)',
      },
      letterSpacing: {
        'tight-05': '-0.005em',
        'normal-0': '0em',
        'wide-05': '0.005em',
        'wide-08': '0.008em',
      },
      lineHeight: {
        '120': '1.2',
        '130': '1.3',
        '140': '1.4',
        '150': '1.5',
      },
      borderRadius: {
        'btn-custom': '0.8rem',
        'card-custom': '1.25rem',
        'pill-custom': '9999px',
      }
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
  ],
};