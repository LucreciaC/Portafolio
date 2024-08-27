document.addEventListener('DOMContentLoaded', () => {
    const texts = [
        "Analista Programadora.",
        "Desarrolladora Web.",
        "Estudiante."
    ];

    const textElement = document.querySelector('.titulo');
    const typingSpeed = 100; // Velocidad de escritura en ms
    const pauseDuration = 1000; // Pausa entre textos en ms

    let currentIndex = 0;

    function typeText(text, index = 0) {
        if (index < text.length) {
            textElement.textContent = text.substring(0, index + 1);
            setTimeout(() => typeText(text, index + 1), typingSpeed);
        } else {
            setTimeout(() => eraseText(text), pauseDuration);
        }
    }

    function eraseText(text, index = text.length) {
        if (index > 0) {
            textElement.textContent = text.substring(0, index - 1);
            setTimeout(() => eraseText(text, index - 1), typingSpeed);
        } else {
            setTimeout(() => {
                currentIndex = (currentIndex + 1) % texts.length;
                typeText(texts[currentIndex]);
            }, pauseDuration);
        }
    }

    typeText(texts[currentIndex]);
});
