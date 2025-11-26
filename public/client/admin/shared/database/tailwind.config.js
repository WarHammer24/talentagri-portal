module.exports = {
  content: [
    "./public/**/*.{php,html}",
    "./client/**/*.{php,html}",
    "./admin/**/*.{php,html}",
    "./shared/**/*.{php,html}"
  ],
  theme: {
    extend: {
      colors: {
        agri: {
          dark: "#1F7A47",
          mid: "#4CAF50",
          light: "#D4EEDD",
          gold: "#C7A76C"
        }
      },
      fontFamily: {
        sans: ["Inter", "sans-serif"]
      },
      boxShadow: {
        agri: "0 2px 10px rgba(31,122,71,0.15)"
      }
    }
  },
  plugins: []
}

