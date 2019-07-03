<?php include "templates/include/header.php" ?>
<section class="container-fluid article-description">
  <div class="row">
    <div class="col-md-8 offset-2 panel-body">
        <figure><img  alt="image" style="width: 100%; height: auto;" src="static/images/banner.jpg"/></figure>
        <span class="article-title"> <h1><?php echo htmlspecialchars( $results['article']->title )?></h1> </span> <br>
        <p><?php echo $results['article']->content?></p>
        <div class="pull-right" style="margin-top: 32px; width: 300px; text-align: right;"><address>Ecrit par <a href="#">admin</a> le <time><?php echo date('j F Y', $results['article']->publicationDate)?></time></address></div>
    </div>
  </div>
</section>

<br>
<p><a href="./">Return to Homepage</a></p>
<?php include "templates/include/footer.php" ?>

