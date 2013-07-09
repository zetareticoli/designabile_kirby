<?php snippet('header') ?>

<div class="main-container">
    <div class="main">
        <section class="wrapper cf section-studio">
            <h1 class="page-title"><?php echo html($page->subtitle()) ?></h1>
            <div class="span-3">
                <?php echo kirbytext($page->intro()) ?>
                <p><a href="what.php" >Learn more on what I do &raquo;</a></p>
            </div>
            <div class="span-3">
            	<?php $image = $page->images()->find('studio-tall.jpg') ?>
            	<figure><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /> </figure>
            </div>

        </section>
        <div class="divider"></div>
       <section class="wrapper cf section-about"> 
            <h2>little about me</h1>
            <div class="span-2">
                <?php $image = $page->images()->find('about.png') ?>
                <figure class="about-photo"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /> </figure>
            </div>
            <div class="span-4">
                <?php echo kirbytext($page->bio()) ?>
                <section class="span">
                    <h3>Published Articles</h3>
                    <dl>
                        <dt><a href="http://www.html.it/articoli/un-design-efficace-principi-e-proporzione-divina-1/">The divine proportion in web design</a></dt>
                        <dd> HTML.IT | <span>italian</span>
                            <em>(2009)</em>
                        </dd>
                        <dt><a href="http://www.uxmagazine.it/user-experience-design/la-curva-dellesperienza/">The experience curve</a></dt>
                        <dd> UXMagazine | <span>italian</span>
                            <em>(2009)</em>
                        </dd>
                        <dt><a href="http://www.html.it/articoli/progettare-un-prototipo-1/">How to prototype</a></dt>
                        <dd> HTML.IT | <span>italian</span>
                            <em>(2009)</em>
                        </dd>
                        <dt><a href="http://www.html.it/articoli/progettare-interfacce-unintroduzione-1/">Interface Design</a></dt>
                        <dd> HTML.IT | <span>italian</span>
                            <em>(2009)</em>
                        </dd>
                        <dt><a href="http://www.uxmagazine.it/user-experience-design/504/">Take advantage of the conventions in design</a></dt>
                        <dd> UXMagazine | <span>italian</span>
                            <em>(2009)</em>
                        </dd>
                        <dt><a href="http://www.html.it/articoli/widget-multifunzione-con-tab-1/">Create a simple tab widget</a></dt>
                        <dd> HTML.IT | <span>italian</span>
                            <em>(2009)</em>
                        </dd>
                        <dt><a href="http://www.html.it/articoli/scrivere-codice-css-due-approcci-1/">Writing efficient CSS code</a></dt>
                        <dd> HTML.IT | <span>italian</span>
                            <em>(2009)</em>
                        </dd>
                        <dt><a href="http://www.html.it/articoli/5-soluzioni-css-per-ie6-1/">CSS Solutions for IE6</a></dt>
                        <dd> HTML.IT | <span>italian</span>
                            <em>(2009)</em>
                        </dd>
                    </dl>
                </section>
                <section class="span">
                    <h3>Book</h3>
                    <?php $image = $page->images()->find('book.jpg') ?>
                    <figure><img src="<?php echo $image->url() ?>" alt="<?php echo $image->title() ?>" /> </figure>
                    <dl>
                        <dt><a href="#">CSS3 Solutions</a></dt>
                        <dd>Apress <em>(2012)</em>
                        </dd>
                    </dl>
                </section>
            </div> 
        </section>

    </div> <!-- #main -->
    <?php snippet('touchpoint') ?>

</div> <!-- #main-container -->

<?php snippet('footer') ?>