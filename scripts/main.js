console.log()
const text = "Why not choose the developer thats Extra'Ordinary'?";
let index = 0;

function typeWriter() {
    if (index < text.length) {
        document.getElementById("typing-text").innerHTML += text.charAt(index);
        index++;
        setTimeout(typeWriter, 100); // Adjust typing speed (milliseconds)
    }
}

// Start the typing animation
typeWriter();
