Refactored SCSS (Option A: scalable structure)

How to use:
1) Replace your theme folder's /src/scss/ with the /src/scss/ from this ZIP.
2) Run:
   npm run buildSingle
   (or npm run build)
3) Your CSS will be generated into /dist/css/main.css (or /dist/css/style.min.css if you compile that target).

Single source of truth:
- Edit src/scss/settings/_tokens.scss to change colors, fonts, spacing, breakpoints, radii, etc.

Notes:
- Headings use Ubuntu (H1 weight 400, H2-H6 weight 300)
- Body uses Roboto (weights constrained to 300/400/700)
- Font files are referenced from ../../assets/fonts/
