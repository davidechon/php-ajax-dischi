<!-- Live Coding 25052022 -->
<?php
include __DIR__.'/database.php';
// $title = 'Home page';

?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"></script>
  <!-- Vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <title>Php Ajax Dischi</title>
</head>
<body>

  <main class="container">
    <div class="row">
      <?php forEach($dischi as $disco){  ?>
      <div class="col-3">
        <div class="card">
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
  <script src="script/script.js"></script>
</body>
</html>

