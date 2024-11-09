var typed = new Typed(".text", {
    strings: ["Frontend Developer", "Web Developer"],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
});
 // Select the element with the .text class
const textElement = document.querySelector(".text");

// Apply the color and font size styles
textElement.style.color = "#0ef";
textElement.style.fontSize = "30px";