<?php include "templates/include/header.php" ?>
 
<div class="titre-page">
  <h1>Articles récents</h1>
  <hr>
</div>

<section class="articles">
  <div class="container">

  <?php foreach ( $results['articles'] as $article ) { ?>

    <div class="row">
        <article class="col-md-6 offset-3 article-card">
          <div class="row" style="padding: 0px; margin-left: 0px; margin-right: 0px;">
            <figure class="figure">
              <img src="static/images/banner.jpg" alt="" style="width: 100%; height: auto;">
            </figure>
            <div class="description">
              <h2><?php echo htmlspecialchars( $article->title )?></h2> <br/>
              <p><?php echo htmlspecialchars( $article->summary )?><br/>
              <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">Lire plus</a></p>
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
<p><a href="./?action=archive">Article Archive</a></p>

<?php include "templates/include/footer.php" ?>

