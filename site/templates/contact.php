<?php snippet('header') ?>
    <!-- <div id='title'>Contact</div> -->
    <div id='contact-wrap'>
        <div id='contact-description'>
            <p><?php echo $page->contactdescription() ?></p>
        </div>
        <div id='contacts'>
            <div id='email' class=contact>
                <a href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a>
            </div>

            <div id='phone' class=contact>
                <a href="tel:<?= $page->phone() ?>"><?= $page->phone() ?></a>
            </div>
        </div>
    </div>
    <div id='locations'>
        <?php  foreach($pages->find('contact')->addresses()->toStructure() as $location): 
            $address = str_replace([',',' '], '+', $location->address());
            $src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyBAE64xZLlf3WfbwBTIEsSjwYjHltLCZWU &q=";
        ?>
            <div class='location'>
                <div class='location-title'><?php echo $location->name() ?></div>
                <iframe
                    scrollwheel="false"
                    zoom="false"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBAE64xZLlf3WfbwBTIEsSjwYjHltLCZWU
                &q=<?php echo $address; ?>" allowfullscreen>
                </iframe>
            </div>
        <?php endforeach; ?>        
    </div>

<?php snippet('footer') ?>