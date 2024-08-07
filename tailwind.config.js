/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                gruen: "#84B414",
                magenta: "#E10078",
                sprot: "#E73134"
            }
        },
    },
    safelist: [
        "border-magenta",
        "border-gruen"
    ],
    plugins: [],
}

