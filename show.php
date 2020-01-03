<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="conatiner">
  <div class="container-fluid p-0">
  <div class="row no-gutters">
    <div class="col-md-6 post-wrapper">
      <div class="post featured w-100">
          <div class="content">
            <div class="title">
              <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h3>
            </div>
            <div class="meta">
              <span class="category">
                <i class="fa fa-clock"></i>
               <?php the_date();?>
              </span>
              <span class="comments">
                <i class="fa fa-comment"></i>
                0
              </span>
            </div>
          </div>
        </div>
    </div>   
  </div>
</div>
  </div>
  <?php endwhile; endif; ?>
