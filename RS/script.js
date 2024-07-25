document.addEventListener("DOMContentLoaded", function() {
    const textElement = document.querySelector(".typing-text");
    const text = "This website is currently unavailable.";
    let index = 0;

    function type() {
        if (index < text.length) {
            textElement.innerHTML += text.charAt(index);
            index++;
            setTimeout(type, 100);
        }
    }

    type();
});
