<?php



?>

<!-- INFO
   ================================================== -->
<section class="py-7 py-md-9" id="info">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">



            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-md-4 text-center border-right border-gray-300">

                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Date
                </h6>

                <!-- Link -->
                <div class="mb-5 mb-md-0">
                    <a href="#!" class="h4 text-primary">
                        <?php echo $args['eventDate']; ?>
                    </a>
                </div>

            </div>
            <div class="col-12 col-md-4 text-center border-right border-gray-300">

                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Location
                </h6>

                <!-- Link -->
                <div class="mb-5 mb-md-0">
                    <a href="#!" class="h4">
                        <?php echo $args['locationName'];?>
                    </a>
                </div>

            </div>
            <div class="col-12 col-md-4 text-center">

                <!-- Heading -->
                <h6 class="text-uppercase text-gray-700 mb-1">
                    Organizer
                </h6>

                <!-- Link -->
                <a href="#!" class="h4">
                    <?php echo $args['eventOrganizer'];?>
                </a>

            </div>
        </div> <!-- / .row -->
    </div>
</section>