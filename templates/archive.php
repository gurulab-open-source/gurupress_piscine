<?php include "templates/include/header.php" ?>

      
<div class="titre-page">
        <h1>Articles archivés</h1>
        <hr>
      </div>

      <section class="articles">
      <div class="container">

<?php foreach ( $results['articles'] as $article ) { ?>

  <div class="row">
      <article class="offset-2 col-9 col-lg-9 col-md-9 col-xl-9 article">
        <div class="row">
          <figure class="col-5 col-lg-5 col-md-5 col-xl-5 figure">
            <img src="static/images/thumb.jpg" alt="" width="280" height="380">
          </figure>
          <div class="col-7 description">
            <h2><?php echo htmlspecialchars( $article->title )?></h2> <br>
            <p><?php echo htmlspecialchars( $article->summary )?><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">Lire plus</a></p>
            <div class="pied-article">
              <p class="auteur">By GuruPress</p>
              <p class="heure"><?php echo date('j F', $article->publicationDate)?></p>
            </div>
          </div>
        </div>
      </article>
    </div>
    <br>

<?php } ?>

</div>


</section>



      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>

      <p><a href="./">Return to Homepage</a></p>

<?php include "templates/include/footer.php" ?>

