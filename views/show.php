<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Publication - <?php echo $date ?></title>
  <link rel="stylesheet" href="./views/styles.css">

</head>

<body>
  <article>
    <h1><?php echo $title; ?></h1>


    <p class="author">
      ލިޔުނީ <?php echo $author; ?>

      <br>
      <br>
      <span>ޝާއިއުކުރެވުނީ
        <?php echo $date; ?> </span></p>

    <div class="line"></div>


    <div class="content">
      <?php echo $content; ?>
    </div>
  </article>

</body>

</html>