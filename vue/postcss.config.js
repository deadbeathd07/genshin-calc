import purgeCSSPlugin from "@fullhuman/postcss-purgecss";

export default {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
    "postcss-import": {},
    ...(process.env.NODE_ENV === "production" ? [purgeCSSPlugin] : []),
  },
};
