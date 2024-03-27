<div class="types-of-cancer-main-container">
    <h2>Types of <span>Cancer We Treat</span></h2>
    <span></span>
    <div class="typesofcancer__subcontainer">
        <?php foreach ($typesofCancersWeDo as $eachCancerCard) : ?>
            <div class="typesofCancer__Card">
                <div>
                    <img src="<?php echo $eachCancerCard[0]; ?>" alt="" />
                </div>
                <p><?php echo $eachCancerCard[1]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>