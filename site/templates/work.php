<?php snippet('header') ?>

<div class="main-container">
    <div class="main wrapper cf">
        <h1 class="page-title"><?php echo html($page->title()) ?></h1>
            <?php foreach($page->children()->visible() as $project): ?>
                <div class="preview span-3">
                    <a href="<?php echo $project->url() ?>" class="link"><figure class="thumb cover"><img src="<?php echo $project->images()->find('01-cover.jpg')->url() ?>"></figure></a>
                    <a href="<?php echo $project->url() ?>" class="over"><h2><strong><?php echo $project->title() ?></strong></h2><p>&rarr;</p></a>
              </div>
            <?php endforeach ?>
        <div class="fullspan centered">
            <em>Sometimes I can't to share best work, due to the companies that I work with and their strict NDA. But I'm able to talk about them, so contact me via <a href="#">Skype</a>, <a href="#">email</a> or grab a coffee, if you would like to hear about those.</em>
        </div>

    </div> <!-- #main -->
    <div class="clients wrapper divider centered cf">
        <div class="fullspan">
            <h2>Clients</h2>
            <p>Companies and agencies I worked for as employee or consultant</p>
            <ul class="l-inline">
                <?php foreach($page->images() as $client) : ?>
                 <li><a href="#"><img src="<?php echo $client->url() ?>" /></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <?php snippet('touchpoint') ?>
</div> <!-- #main-container -->


<?php snippet('footer') ?>