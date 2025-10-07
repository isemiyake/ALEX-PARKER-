<div class="col-md-12 page-body">
              <div class="row">
                <div class="sub-title">
                  <a href="" title="Go to Home Page"
                    ><h2>Back Home</h2></a
                  >
                  <a href="#comment" class="smoth-scroll"
                    ><i class="icon-bubbles"></i
                  ></a>
                </div>

                <div class="col-md-12 content-page">
                  <div class="col-md-12 blog-post">
                    <div>
                      <img src="images/blog/1.jpg" alt="">
                    </div>

                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>
                        <?php echo $post['post_title']; ?>
                      </h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Post Detail Start -->
                    <div class="post-info">
                      <span><?php echo \Core\Helpers\formate($post['post_created_at']);?></span> | <span><?php echo $post['category_name']; ?></span>
                    </div>
                    <!-- Post Detail End -->

                    <p>
                      <?php echo $post['post_text'];?>
                    </p>

                    <!-- Post Blockquote (Italic Style) Start -->
                    <blockquote class="margin-top-40 margin-bottom-40">
                      <p>
                        <?php echo $post['post_quote'];?>
                      </p>
                    </blockquote>
                    <!-- Post Blockquote (Italic Style) End -->

                    <!-- Post Buttons -->
                    <div>
                      <?php
                      $slug = \Core\Helpers\slugify($post['post_title']);?>
                      <a href="posts/<?php echo $post['post_id']; ?>/<?php echo $slug; ?>/edit/form.html" type="button" class="btn btn-primary"
                        >Edit Post</a
                      >
                     <a href="posts/<?php echo $post['post_id']; ?>/<?php echo $slug; ?>/delete.html"
                        type="button"
                        class="btn btn-secondary"
                        role="button">Delete Post</a>
                    </div>
                    <!-- Post Buttons End -->
                     <div id="scroll-down-popup" class="endpage-box">
                    <h4>Read Also</h4>
                    <a href="#"
                      >How to make your company website based on bootstrap framework...</a
                    >
                  </div>
                  </div>
                </div>
              </div>
            </div>