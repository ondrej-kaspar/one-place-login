export default {
    plugins: {
        "postcss-nested": {},
        "@tailwindcss/postcss": {},
        autoprefixer: {},
        ...(process.env.MINIFY === "true" ? { cssnano: { preset: "default" } } : {}),
    },
    map: { inline: false },
};