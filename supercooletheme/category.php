<?php
//Header toevoegen
get_header();
//Einde header
?>
<div class="wrapper">
  <main>
    <div>
      <h2>De berichten van de categorie: <em class="zoek-term-in-kop"> <?php single_cat_title(); ?> </em></h2>
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
          echo "<p>Er zijn geen berichten gevonden voor de categorie: " . single_cat_title() ."</p>";
        endif;
        // Einde wordpress loop
      ?>

    </div>
    <aside>
      <?php dynamic_sidebar('widget-aside'); ?>
    </aside>
  </main>
</div>

<?php
  //Footer toevoegen
  get_footer();

  //Einde footer
?>
