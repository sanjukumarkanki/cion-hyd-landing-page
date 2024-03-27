<!-- Why CION CANCER CLINICS -->
<div class="why-cion-main-container">
    <h2>WHY CION <span>Cancer Clinics</span></h2>
    <span></span>
    <div class=" why__cion__cardmain__container">
        <?php
        foreach ($whyCionCancerCard as $eachCard) :
        ?>

            <div class="why__cion__card__container">
                <img src="<?php echo $eachCard[0]; ?>" alt="why cion cancer card image" />
                <p><?php echo $eachCard[1]; ?></p>
            </div>
        <?php endforeach; ?>

    </div>
</div>