// Carosello immagini pagina dettaglio articolo
function changeSlide(direction) {
    const images = document.querySelectorAll('.article-carousel-img');
    if (!images.length) return;

    // Trova l'immagine attiva
    let currentIndex = [...images].findIndex(img => img.classList.contains('active'));

    // Rimuove active dall'immagine corrente
    images[currentIndex].classList.remove('active');

    // Calcola il nuovo indice in modo circolare
    currentIndex = (currentIndex + direction + images.length) % images.length;

    // Aggiunge active alla nuova immagine
    images[currentIndex].classList.add('active');
}

