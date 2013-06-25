<?php snippet('header-teaser') ?>

<div class="main-container">
    <div class="main wrapper cf">
        <section class="span-3 intro">
            <h2>About Designabile</h2>
            <p>Designabile is the small creative studio of designer, author, and speaker Francesco Improta. From engaging websites to easy-to-use web and mobile applications, I love to craft beautiful interfaces for all devices.</p>
            <p class="more"><a href="/about">More about me &raquo;</a></p>
        </section>
        <section class="span-3 intro">
            <h2>Design + Code</h2>
            <p>Knowing to design and code we can deal with all of these activities: user experience, user interface design, digital branding and front-end development. </p>
            <p class="more"><a href="/what">What I do &raquo;</a></p>
        </section>
    </div> <!-- #main -->
    <section class="l-inverse featured">
        <div class="wrapper cf">
            <h3>Featured work</h3>
            <?php foreach($pages->find('work')->children()->visible()->limit(2) as $project): ?>
                <div class="preview span-3">
                    <a href="<?php echo $project->url() ?>" class="link"><figure class="thumb cover"><img src="<?php echo $project->images()->find('01-cover.jpg')->url() ?>"></figure></a>
                    <a href="<?php echo $project->url() ?>" class="over"><h2><strong><?php echo $project->title() ?></strong></h2><p>&rarr;</p></a>
              </div>
            <?php endforeach ?>

            <a href="work.php" class="btn btn-large btn-link">View More Projects &rarr;</a>
        </div>
    </section>
</div> <!-- #main-container -->

<?php snippet('footer') ?>