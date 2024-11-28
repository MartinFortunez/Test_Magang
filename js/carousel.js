document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const items = document.querySelectorAll('.highlight-item');
    const prevBtn = document.querySelector('.carousel-button.prev');
    const nextBtn = document.querySelector('.carousel-button.next');
    
    const itemWidth = items[0].offsetWidth + 30;   
    const trackWidth = itemWidth * items.length;
    
    let index = 0;
    

    track.style.width = `${trackWidth}px`;
    

    nextBtn.addEventListener('click', function () {
        index++;
        if (index > items.length - 1) {
            index = 0;
        }
        updateCarousel();
    });

    prevBtn.addEventListener('click', function () {
        index--;
        if (index < 0) {
            index = items.length - 1;
        }
        updateCarousel();
    });
    

    function updateCarousel() {
        const offset = -index * itemWidth;
        track.style.transform = `translateX(${offset}px)`;
    }
});
