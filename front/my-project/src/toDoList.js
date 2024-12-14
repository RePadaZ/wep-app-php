document.addEventListener("DOMContentLoaded", () => {
    "use strict";
    document.getElementById("clickButton").addEventListener("click", () => {
        // Create a new list item when clicking on the "Add" button
        const li = document.createElement("LI");
        const inputValue = document.getElementById("myInput").value;
        const t = document.createTextNode(inputValue);
        li.appendChild(t);
        if (inputValue === '') {
            alert("You must write something!");
        } else {
            document.getElementById("myUL").appendChild(li);
        }
        document.getElementById("myInput").value = "";

        const span = document.createElement("SPAN");
        const text = document.createTextNode("\u00D7");
        span.className += "custom-close-style";
        li.className = "list-group-item text-center bg-dark text-light custom-pointer-style";
        span.appendChild(text);
        li.appendChild(span);

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function () {
                let div = this.parentElement;
                div.style.display = "none";
            }
        }
    })

    const myNovelist = document.querySelectorAll("li.custom-pointer-style");
    const close = document.getElementsByClassName("custom-close-style");
    let i;

    // Create a "close" button and append it to each list item
    for (i = 0; i < myNovelist.length; i++) {
        const span = document.createElement("SPAN");
        const text = document.createTextNode("\u00D7");
        span.className = "custom-close-style";
        span.appendChild(text);
        myNovelist[i].appendChild(span);
    }

    // Click on a close button to hide the current list item
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function () {
            let div = this.parentElement;
            div.style.display = "none";
        }
    }

    // Add a "checked" symbol when clicking on a list item
    const list = document.getElementById('myUL');
    list.addEventListener('click', function (ev) {
        if (ev.target.tagName === 'LI') {
            ev.target.classList.toggle("custom-checked-style");
        }
    }, false);
})