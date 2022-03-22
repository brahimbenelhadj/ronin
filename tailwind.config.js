const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "gris": {
                    "100": "#E5E5E5",
                },
                'noir': {
                    '100': "#1C1C1C",
                },
                "rouge": {
                    "100": "#C80A00"
                },
            },
        },

    },
    plugins: [],
}
