<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <?php get_template_part("includes/nav"); ?>

  <?php while (have_posts()) : the_post(); ?>

    <!-- Page Header-->
    <?php
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id);
    ?>
    <header style="background-image: url('<?php echo $img[0]; ?>')">
      <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="post-heading">
              <h1><?php the_title(); ?></h1>
              </span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Post Content-->
    <article class="mb-4">
      <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-md-10 col-lg-8 col-xl-7">
            <?php the_content(); ?>
            <dl>
              <dt>カテゴリー</dt>
              <?php
              $terms = get_the_terms(get_the_ID(), "item_category");
              foreach ($terms as $term) : ?>
                <!-- カテゴリーへのリンク -->
                <dd><a href="<?php echo get_term_link($term->slug, 'item_category'); ?>"><?php echo htmlspecialchars($term->name); ?></a></dd>
              <?php endforeach; ?>
              <dt>価格</dt>
              <!-- <?php $price = get_post_meta(get_the_ID(), "価格", true); ?> -->
              <dd><?php the_field("価格"); ?></dd>
              <dt>発売日</dt>
              <?php $date = get_post_meta(get_the_ID(), "発売日", true); ?>
              <dd><?php the_field("発売日"); ?></dd>


          </div>
        </div>
      </div>
    </article>
  <?php endwhile; ?>
  <!-- Footer-->
  <footer class="border-top">
    <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#!">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#!">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#!">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
        </div>
      </div>
    </div>
  </footer>
  <?php get_footer(); ?>
</body>

</html>
