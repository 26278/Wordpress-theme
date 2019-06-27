<?php
//Header toevoegen
get_header();
//Einde header
?>
<div class="wrapper">
  <main>
    <div>
      <h2>De zoekresultaten voor <em class="zoek-term-in-kop"> <?= get_search_query(); ?> </em></h2>
      <?php
      //De wordpress loop
      if( have_posts() ) :
        while (have_posts() ) : the_post()
      ?>

      <!--  Container toevoegen-->
      <article class="bericht">
        <a href="<?php the_permalink() ?>">
          <h3><?php the_title() ?></h3>
        </a>
        <?php the_content() ?>
      </article>
      <!--  Einde container-->


      <?php endwhile;
        else :
          echo '<p>Er zijn geen berichten gevonden voor de zoekterm: <em> class="zoek-term-in-kop">' . get_search_query(); .'</em></p>';
        endif;
        // Einde wordpress loop
      ?>

    </div>
    <aside>
      <?php dynamic_sidebar('widget_aside'); ?>
    </aside>
  </main>
</div>

<?php
  //Footer toevoegen
  get_footer();

  //Einde footer
?>
