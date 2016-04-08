<?php


$greeting = get_field('greeting');
$description_niche = get_field('description_niche');
$read_more_link = get_field('read_more_link');


 ?>
 <!--====================================
 =            Niche Overview            =
 =====================================-->

        <div class="panel panel-default hero-spacer rounded-corners">
            <div class="panel-heading">
                <h2><?php echo $greeting; ?></h2>
            </div>
            <div class="panel-body">
                <p><?php echo $description_niche; ?></p>
                <p><a href="<?php echo $read_more_link; ?>" class="btn btn-primary btn-large">Read More</a>
                </p>
            </div>

        </div>
