module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                sf: {
                    pink: "#dd163b",
                    "dark-gray": "#181c23",
                    "slate-gray": "#292e38",
                    "slate-green": "#328721",
                    "slate-blue": "#22a2b1",
                    blue: "#1464d2",
                    "blue-slime": "#0fdef2",
                    "slime-gray": "#454d5e",
                },
            },
            fontFamily: {
                sf: ["Montserrat"],
                // body: ["Trueno"],
            },
        },
    },

    plugins: [
        // ...
        require("tailwind-scrollbar"),
    ],
};
