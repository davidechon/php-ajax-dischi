<!-- Live Coding 25052022 -->
<?php
include __DIR__.'/database.php';
// $title = 'Home page';

?>
 
  <main class="container">
    <div class="row">
      <?php forEach($dischi as $disco){  ?>
      <div class="col-3">
        <div class="card" style="width: 18rem;">
        <img src="<?php echo $disco['poster'] ?>" class="card-img-top" alt="<?php echo $disco['title'] ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $disco['title'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $disco['genre'] ?></h6>
            <p class="card-text"><?php echo $disco['author'] ?></p>
            <p class="card-text"><?php echo $disco['year'] ?></p>
          </div>
        </div> <!-- /card -->
      </div> <!-- /col -->
      <?php  } ?>
    </div> <!-- /row -->


  </main>


