document.querySelectorAll('.sobre-mi h4').forEach((header) => {
    header.addEventListener('click', function() {
        this.classList.toggle('active');
    });
});

