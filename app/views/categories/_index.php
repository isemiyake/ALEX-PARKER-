<ul class="menu-link">
                  <?php include_once '../app/models/categoriesModel.php';
                  $categories = \App\Models\CategoriesModel\findAll($connexion);
                  foreach($categories as $categorie):?>
                  <li><a href="./"><?php echo $categorie['name'] ; ?></a></li>
                  <?php endforeach; ?>
                </ul>