document.addEventListener('DOMContentLoaded', () => {

    const form = document.querySelector('#form');

    document.getElementById('form').onsubmit = (event) => {
        event.preventDefault()
        const text = document.getElementById('text-send').style.display = 'flex';

        let xml = new XMLHttpRequest();

        xml.open("POST", "message.PHP", true);
        xml.onload = () => {
            if (xml.status == 200) {
                let response = xml.response;
            }
        }
        let formData = new FormData(form);
        xml.send(formData);
    }

})

