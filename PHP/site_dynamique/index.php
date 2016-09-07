

<?php
$title = "Bienvenue dans notre hotel de luxe";
$description = "Hotel de luxe par exellence, privee , etc... prout prout prout ";
$pageEnCours = "toto";
$slides = array(1,2,3,4,5,6);
$slidesOutput ="";
include "php/_header.php";
foreach ($slides as $key => $slide ){
    $slidesOutput .="<div class=\"slide\">'.$slide.<img src=\"http://loremflickr.com/320/240?random=".$slide."\"></div>";
}
?>
<!-- affiche le slider si je suis sur la home et qu il y a des slides-->
<?php if (!empty($slidesOutput)&& $pageEnCours=="home") :   ?>
    <div id="slider" class="container">
        <h2>Book a Package</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ducimus fugiat id maiores molestiae
            nesciunt sint soluta tenetur voluptate voluptatem. Ad autem doloremque id iste necessitatibus perspiciatis
            quia quo recusandae unde vitae. A hic in minus nemo obcaecati, repellendus sit.</p>
        <div class="slider">
            <?php echo $slidesOutput;?>
        </div>
    </div>
<?php   endif;?>
    <div id="rooms" class="container">
        <h2>Our Room Types</h2>
        <div class="room-types">
            <div class="room">
                <div class="room-img"></div>
                <h3>Standard Double Room</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt distinctio esse minus obcaecati
                    quis tempora voluptates.</p>
                <div class="services">
                    <span class="flaticon-fan"></span>
                    <span class="flaticon-hair-dryer"></span>
                    <span class="flaticon-ironing-board"></span>
                    <span class="flaticon-television"></span>
                    <span class="flaticon-wifi"></span>
                    <span class="flaticon-coffee"></span>
                </div>
            </div>
            <div class="room">
                <div class="room-img"></div>
                <h3>Standard Double Room</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt distinctio esse minus obcaecati
                    quis tempora voluptates.</p>
                <div class="services">
                    <span class="flaticon-fan"></span>
                    <span class="flaticon-hair-dryer"></span>
                    <span class="flaticon-ironing-board"></span>
                    <span class="flaticon-television"></span>
                    <span class="flaticon-wifi"></span>
                    <span class="flaticon-coffee"></span>
                </div>
            </div>
            <div class="room">
                <div class="room-img"></div>
                <h3>Standard Double Room</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt distinctio esse minus obcaecati
                    quis tempora voluptates.</p>
                <div class="services">
                    <span class="flaticon-fan"></span>
                    <span class="flaticon-hair-dryer"></span>
                    <span class="flaticon-ironing-board"></span>
                    <span class="flaticon-television"></span>
                    <span class="flaticon-wifi"></span>
                    <span class="flaticon-coffee"></span>
                </div>
            </div>
            <div class="room">
                <div class="room-img"></div>
                <h3>Standard Double Room</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt distinctio esse minus obcaecati
                    quis tempora voluptates.</p>
                <div class="services">
                    <span class="flaticon-fan"></span>
                    <span class="flaticon-hair-dryer"></span>
                    <span class="flaticon-ironing-board"></span>
                    <span class="flaticon-television"></span>
                    <span class="flaticon-wifi"></span>
                    <span class="flaticon-coffee"></span>
                </div>
            </div>
            <div class="room">
                <div class="room-img"></div>
                <h3>Standard Double Room</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt distinctio esse minus obcaecati
                    quis tempora voluptates.</p>
                <div class="services">
                    <span class="flaticon-fan"></span>
                    <span class="flaticon-hair-dryer"></span>
                    <span class="flaticon-ironing-board"></span>
                    <span class="flaticon-television"></span>
                    <span class="flaticon-wifi"></span>
                    <span class="flaticon-coffee"></span>
                </div>
            </div>
            <div class="room">
                <div class="room-img"></div>
                <h3>Standard Double Room</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt distinctio esse minus obcaecati
                    quis tempora voluptates.</p>
                <div class="services">
                    <span class="flaticon-fan"></span>
                    <span class="flaticon-hair-dryer"></span>
                    <span class="flaticon-ironing-board"></span>
                    <span class="flaticon-television"></span>
                    <span class="flaticon-wifi"></span>
                    <span class="flaticon-coffee"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="text-zone" class="container">
        <img src="img/ombre.png">
        <p>143 City Located Hotels World Wide
            <q>Hospitality, Quality & Good Locations. We only provide you with the best hotels” - John Doe</q>
        </p>
    </div>
<?php include "php/_footer.php"; ?>

