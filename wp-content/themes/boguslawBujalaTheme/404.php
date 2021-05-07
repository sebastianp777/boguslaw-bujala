<?php get_header(); ?>
<div id="notfound">
		<div class="container-sm notfound">
			<div class="notfound-404">
        <img class="notfound-404-img notfound-404-img-desktop" src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="">
        <img class="notfound-404-img notfound-404-img-mobile" src="<?php echo get_template_directory_uri(); ?>/img/404-mobile.svg" alt="">
            <?php get_search_form(); ?>

				<h2 class="notfound--h2">Przepraszamy</h2>
        <p class="notfound--p">Strona, której szukamy nie istnieje lub wystąpił inny błąd</p>
			</div>
        <div class="notfound__go-back--div">
        <i class="fas fa-caret-left"></i><a class="btn notfound__go-back" href="<?php echo home_url(); ?>">Wróć na stronę główną</a>
        </div>
		</div>
	</div>



<?php get_footer(); ?>
