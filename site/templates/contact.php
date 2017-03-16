<?php snippet('header') ?>
    <div id='title'>Contact</div>
    <div id='contact-wrap'>
        <div id='contacts'>
            <div id='email' class=contact>
                <div class='title'>email</div>
                <a href="mailto:<?= $page->email() ?>"><?= $page->email() ?></a>
            </div>

            <div id='phone' class=contact>
                <div class='title'>phone</div>
                <a href="tel:<?= $page->phone() ?>"><?= $page->phone() ?></a>
            </div>
        </div>
        <div id='contact-description'>
            <p><?php echo $page->contactdescription() ?></p>
        </div>
    </div>
    <div id='locations'>
        <?php  foreach($pages->find('contact')->addresses()->toStructure() as $location): 
            $address = str_replace([',',' '], '+', $location->address());
            $src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyBAE64xZLlf3WfbwBTIEsSjwYjHltLCZWU &q=";
        ?>
            <div class='location'>
                <iframe
                    scrollwheel="false"
                    zoom="false"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBAE64xZLlf3WfbwBTIEsSjwYjHltLCZWU
                &q=<?php echo $address; ?>" allowfullscreen>
                </iframe>
                <div class='location-title'><?php echo $location->name() ?></div>
                <div class='adress'><?php echo $location->address() ?></div>
            </div>
        <?php endforeach; ?>        
    </div>

<?php snippet('footer') ?>