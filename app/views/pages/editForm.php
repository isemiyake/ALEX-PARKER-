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
                    <!-- Post Headline Start -->
                    <div class="post-title">
                      <h1>Edit Post Form</h1>
                    </div>
                    <!-- Post Headline End -->

                    <!-- Form Start -->
                     <?php $slug = \Core\Helpers\slugify($post['post_title']);?>
                    <form action="posts/<?php echo $post['post_id']?>/<?php echo $slug; ?>/edit/update.html" method="post">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input
                          type="text"
                          name="title"
                          id="title"
                          class="form-control"
                          placeholder="Enter your title here"
                          value="<?php echo $post['post_title']?>"
                        />
                      </div>
                      <div class="form-group">
                        <label for="text">Text</label>
                        <textarea
                          id="text"
                          name="text"
                          class="form-control"
                          rows="5"
                          placeholder="Enter your text here"
                        ><?php echo $post['post_text']?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1"> Image</label>
                        <input type="file" name="image" class="form-control-file btn btn-primary" id="exampleFormControlFile1">
                      </div>
                      <div class="form-group">
                        <label for="text">Quote</label>
                        <textarea
                          id="quote"
                          name="quote"
                          class="form-control"
                          rows="5"
                          placeholder="Enter your quote here"
                        ><?php echo $post['post_quote']?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="text">Category</label>
                        <select
                          id="category"
                          name="category_id"
                          class="form-control"
                        >
                          <option selected>
                            <?php echo $post['category_name']; ?>
                          </option>
                              <?php include_once '../app/models/categoriesModel.php';
                            $categories = \App\Models\CategoriesModel\findAll($connexion);
                            foreach($categories as $categorie):?>
                            <?php if ($categorie['id'] !== $post['category_id']) : ?>
                          <option value="<?php echo $categorie['id']; ?>"><?php echo $categorie['name']; ?></option>

                            <?php endif; ?>
                        
                            <?php endforeach; ?>
                        </select>
                      </div>
                      <div>
                        <input
                          class="btn btn-primary"
                          type="submit"
                          value="submit"
                        />
                        <input
                          class="btn btn-secondary"
                          type="reset"
                          value="reset"
                        />
                      </div>
                     </form>
                    <!-- Form End -->
                  </div>
                </div>
              </div>
            </div>