function cssLoaded() {
    document.body.style.visibility = 'visible';
}

const dynamicCss = document.getElementById('dynamic-css');
const staticCss = document.getElementById('static-css');

dynamicCss.onload = cssLoaded;
staticCss.onload = cssLoaded;

if (dynamicCss.complete && staticCss.complete) {
    cssLoaded();
}
