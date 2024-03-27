<div class=" patients-experience-main-container">
    <h2>Patients <span>Experience</span></h2>
    <span></span>
    <p>We make sure our patients are empowered to take control of their health and make informed choices. Their words of appreciation keep us going.</p>

    <div class="carousel-container">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <?php $carouselArray = [
            ['assets\Screenshot (11) 1.png', 'Successful hysterectomy Surgery', 'link'],
            ['assets\Screenshot (12) 1.png', 'Successful hysterectomy Surgery', 'link'],
            ['assets\Screenshot (13) 1.png', 'Successful hysterectomy Surgery', 'link'],
        ]; ?>
        <div>
            <?php foreach ($carouselArray as $echCarouselCard) : ?>
                <div>
                    <img src="<?php echo $echCarouselCard[0]; ?>" alt="" />
                    <div class="carousel-text-container">
                        <p><? echo $echCarouselCard[1]; ?></p>
                        <button>
                            <i class="fa-regular fa-circle-play"></i>
                            <span> Watch Full Video</span>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carouselContainer = document.querySelector('.carousel-container');
            const carousel = carouselContainer.querySelector('div');
            const prevBtn = carouselContainer.querySelector('#left');
            const nextBtn = carouselContainer.querySelector('#right');

            prevBtn.addEventListener('click', () => {
                const gapWidth = 0.52 * parseFloat(getComputedStyle(carousel).fontSize);
                const firstCardWidth = calculateCardWidth();
                carousel.scrollLeft -= firstCardWidth + gapWidth;
            });

            nextBtn.addEventListener('click', () => {
                const gapWidth = 0.52 * parseFloat(getComputedStyle(carousel).fontSize); // Convert 1.47rem to pixels
                const firstCardWidth = calculateCardWidth();
                carousel.scrollLeft += firstCardWidth + gapWidth;
            });

            // Function to calculate the width of the first card in the carousel
            const calculateCardWidth = () => {
                const card = carousel.querySelector("div");
                return card ? card.offsetWidth : 0;
            };
        });
    </script>
</div>