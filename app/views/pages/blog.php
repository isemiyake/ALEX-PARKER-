  <div class="col-md-12 page-body">
              <div class="row">
                <div class="col-md-12 content-page">
                  <!-- ADD A POST -->
                  <div>
                    <a href="?addForm" type="button" class="btn btn-primary"
                      >Add a Post</a
                    >
                  </div>
                  <!-- ADD A POST END -->
                  <?php foreach($posts as $post): ?>
          
                  <!-- Blog Post Start -->
                  <div class="col-md-12 blog-post row">
                    <div class="post-title">
                      <a href="?post_id=<?php echo $post['post_id']; ?>"
                        ><h1>
                          <?php echo $post['post_title']; ?>
                        </h1>
                      </a>
                    </div>
                    <div class="post-info">
                      <span>
                        <?php echo \Core\Helpers\format($post['post_created_at']);?>
                      </span> 
                      | 
                      <span>
                        <?php echo $post['category_name'] ;?>
                      </span>
                    </div>
                    <p>
                      <?php echo \Core\Helpers\truncate($post['post_text']); ?>
                    </p>
                    <a
                      href="?post_id=<?php echo $post['post_id']; ?>"
                      class="button button-style button-anim fa fa-long-arrow-right"
                      ><span>Read More</span></a>
                  </div>
              
                   <?php endforeach; ?>
                  <nav aria-label="Page navigation example" style="text-align: center;">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>

                </div>
              </div>
            </div>