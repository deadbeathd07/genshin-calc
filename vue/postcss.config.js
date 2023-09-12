import purgeCSSPlugin from "@fullhuman/postcss-purgecss";

export default {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
    postcssImport: {},
    ...(process.env.NODE_ENV === "production" ? [purgeCSSPlugin] : []),
  },
};
