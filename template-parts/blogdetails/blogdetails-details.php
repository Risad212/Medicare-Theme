<?php 
  $options = get_option( 'medicare-options' ); 
  $blog_details_list = $options['blog-details-social'];
  $post_id = get_the_ID(); 
  setup_postdata($post_id);
  $author = get_the_author_meta('display_name', get_post_field('post_author', $post_id));
?>

<section class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-left">
                        <div class="blog-img">
                            <img class="img-fluid" src="media/blog/blog-details.jpg" alt="">
                        </div>
                        <div class="blog-meta-info">
                            <ul class="meta-list">
                                <li class="item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0"
                                        viewBox="0 0 34 34" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M29.6 2h-3v3c0 .6-.5 1-1 1s-1-.4-1-1V2h-16v3c0 .6-.5 1-1 1s-1-.4-1-1V2h-3C2.1 2 1 3.3 1 5v3.6h32V5c0-1.7-1.8-3-3.4-3zM1 10.7V29c0 1.8 1.1 3 2.7 3h26c1.6 0 3.4-1.3 3.4-3V10.7zm8.9 16.8H7.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8H10c.4 0 .8.3.8.8v2.5c-.1.5-.4.8-.9.8zm0-9H7.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8H10c.4 0 .8.3.8.8v2.5c-.1.5-.4.8-.9.8zm8 9h-2.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8h2.5c.4 0 .8.3.8.8v2.5c0 .5-.3.8-.8.8zm0-9h-2.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8h2.5c.4 0 .8.3.8.8v2.5c0 .5-.3.8-.8.8zm8 9h-2.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8h2.5c.4 0 .8.3.8.8v2.5c0 .5-.3.8-.8.8zm0-9h-2.5c-.4 0-.8-.3-.8-.8v-2.5c0-.4.3-.8.8-.8h2.5c.4 0 .8.3.8.8v2.5c0 .5-.3.8-.8.8z"
                                                fill="#05d3b0" opacity="1" data-original="#000000" class=""></path>
                                        </g>
                                    </svg>
                                    <?php echo get_the_date() ?>
                                </li>
                                <li class="item">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="15" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z" fill="#05d3b0" opacity="1" data-original="#000000" class=""></path></g></svg>
                                    <?php echo $author ?>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-title-info">
                            <h2 class="blog-title"><?php the_title(); ?></h2>
                            <p class="blog-discription"><?php the_content(); ?></p>
                        </div>
                        <div class="blog-social">
                            <ul class="social-list">
                                <?php
                                   foreach( $blog_details_list as $blog){
                                      $icon = $blog['blog-details-social-icon'];
                                      $link = $blog['blog-details-social-link']['url'];
                                  ?>
                                     <li class="social-item">
                                      <a href="<?php echo $link ?>">
                                        <i class="<?php echo $icon ?>"></i>
                                      </a>
                                    </li>
                                  <?php 
                                   }
                                 ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-right">
                        <div class="recent-post">
                            <h4 class="title">Recent Posts</h4>
                            <?php 
                              if(have_posts()){
                                  while(have_posts()){
                                    the_post();
                               ?>
                              <div class="single-post">
                                <div class="post-thumnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </a>
                                </div>
                                <div class="recent-posts-info">
                                    <h4 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <span class="post-date"><?php echo get_the_date(); ?></span>
                                </div>
                               </div>
                               <?php
                                }
                                wp_reset_postdata();
                              }
                             ?>
                        </div>
                        <div class="blog-category">
                        <h4 class="category-title">Blog Categories</h4>
                        <ul class="category-list">
                            <?php 
                            $categories = get_categories(); 
                            foreach ($categories as $category): ?>
                                <li class="item"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?> (<?php echo esc_html($category->count); ?>)</a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="populate-tag">
                        <h4 class="tag-title">Popular Tags</h4>
                        <ul class="tag-list">
                            <?php 
                            $tags = get_tags(); // Retrieve all tags
                            if ($tags) : 
                                foreach ($tags as $tag) : ?>
                                    <li class="tag-item"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo esc_html($tag->name); ?></a></li>
                                <?php endforeach; 
                            else : ?>
                                <li class="tag-item">No tags found</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>