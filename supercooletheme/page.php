<?php
//Header toevoegen
get_header();
//Einde header
?>
<div class="wrapper">
  <main>
    <div>
      <?php
      //De wordpress loop
      if( have_posts() ) :
        while (have_posts() ) : the_post()
      ?>

      <!--  Container toevoegen-->
      <article class="bericht">
          <h2><?php the_title() ?></h2>
        <?php the_content() ?>
      </article>
      <!--  Einde container-->


      <?php endwhile;
        else :
          echo '<p>Er zijn geen berichten gevonden</p>';
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
