<?php snippet('header') ?>

<div class="main-container">
    <div class="main">
        <div class="wrapper">
            <h1 class="page-title"><?php echo html($page->subtitle()) ?></h1>
            <p class="lead"><?php echo html($page->lead()) ?></p>
            <section class="grid services cf">
                <div class="grid-unit service-info">
                    <a href="#" class="info-default info-link"><h2>Interaction<br> Design</h2></a>
                    <div class="info-over"><p>Focus on how people use a digital product</p> <ul><li>Sketching</li><li>Wireframes</li><li>Live Prototypes</li></ul></div>
                </div>
                <div class="grid-unit service-info">
                    <a href="#" class="info-default info-link"><h2>Visual<br> Direction</h2></a>
                    <div class="info-over"><p>Making interfaces look clean and beautiful</p><ul><li>UI Design</li><li>Style Guides</li><li>Style Tiles</li></ul></div>
                </div>
                <div class="grid-unit service-info">
                    <a href="#" class="info-default info-link"><h2>Responsive <br>Design</h2></a>
                    <div class="info-over"><p>Design for all devices</p><img src="assets/images/icon-responsive.png" /></div>
                </div>
                <div class="grid-unit service-info">
                    <a class="info-default info-link"><h2>Front-end<br> Development</h2></a>
                    <div class="info-over"><p>Modern technologies for modern browsers</p><img src="assets/images/icon-frontend.png" /></div>
                </div>
                <div class="grid-unit service-info">
                    <a class="info-default info-link"><h2>Digital <br> Branding</h2></a>
                    <div class="info-over"><p>Create successful branding identities</p><ul><li>Logo Design</li><li>Brand Identity</li></ul></div>
                </div>
                <div class="grid-unit service-info">
                    <a class="info-default info-link"><h2>Cms <br>Integration</h2></a>
                    <div class="info-over"><p>Work with major and widespread CMS</p><img src="assets/images/icon-cms.png" /></div>
                </div>
            </section>
            <section class="approach divider centered">
                <h2>Method & Approach</h2>
                <p>My approach to design is <strong>iterative</strong>: I get going quickly, listen to what client says, sharing deliverables as soon as possible and craft things in the right time.</p>
                <p class="lead">Great design takes time</p>
                <p>I don’t believe in spending time on guess work and taking projects needed by yesterday.</p>
            </section>
        </div>
        <?php snippet('touchpoint') ?>
    </div> <!-- #main -->
    
</div> <!-- #main-container -->

<?php snippet('footer') ?>