 <div id="main">
      <div class="container">
        <div class="row">
          <!-- About Me (Left Sidebar) Start -->
          <?php include_once '../app/views/templates/partials/_leftSidebar.php'?>
          <!-- About Me (Left Sidebar) End -->

          <!-- Blog Post (Right Sidebar) Start -->
          <div class="col-md-9">
            <!-- Content Dynamique Start -->
            <?php echo $content; ?>
            <!-- Content Dynamique End -->

            <!-- Footer Start -->
            <?php include_once '../app/views/templates/partials/_footer.php'?>
            <!-- Footer End -->
          </div>
          <!-- Blog Post (Right Sidebar) End -->
        </div>
      </div>
    </div>