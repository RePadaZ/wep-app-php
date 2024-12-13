document.addEventListener("DOMContentLoaded", () => {

    const element = document.getElementById("clockJavaScript");

    function showClock() {
        element.innerHTML = new Date().toLocaleTimeString();
    }

    setInterval(showClock, 1000);
})