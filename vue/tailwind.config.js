/** @type {import('tailwindcss').Config} */
export default {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  corePlugins: {
    preflight: false,
  },
  prefix: "tw-",
  theme: {
    extend: {
      colors: {
        "product-orange": "#F07211",
        "product-yellow": "#EE8C11",
        "product-ivory": "#F1E7B7",
        "product-blue": "#30AEB0",
        "product-dark-blue": "#162838",
      },
    },
  },
  plugins: [],
};
