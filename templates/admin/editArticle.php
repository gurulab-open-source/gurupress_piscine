<?php include "templates/include/header.php" ?>

<div class="titre-page">
  <h2>Guru press Admin</h2>
  <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="admin.php?action=logout"?>Log out</a></p>
  <hr>
</div>

<h1 style="text-align: center;"><?php echo $results['pageTitle']?></h1>

<div class="container">
  <div class="row">
    <article class="col-md-8 offset-2">
      <div class="row">
        <form action="admin.php?action=<?php echo $results['formAction']?>" method="post" class="new-article-form">
          <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>"/>

          <?php if ( isset( $results['errorMessage'] ) ) { ?>
                  <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
          <?php } ?>

          <div class="form-group">
            <label for="title">Article Title</label>
            <input class="gurupress-form-input-alternative" type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $results['article']->title )?>" />
          </div>

          <div class="form-group">
            <label for="summary">Article Summary</label>
            <textarea class="gurupress-form-input-alternative" name="summary" id="summary" placeholder="Brief description of the article" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars( $results['article']->summary )?></textarea>
          </div>

          <div class="form-group">
            <label for="content">Article Content</label>
            <textarea class="gurupress-form-input-alternative" name="content" id="content" placeholder="The HTML content of the article" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars( $results['article']->content )?></textarea>
          </div>

          <div class="form-group">
            <label for="publicationDate">Publication Date</label>
            <input class="gurupress-form-input-alternative" type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date( "Y-m-d", $results['article']->publicationDate ) : "" ?>" />
          </div>

          <div class="form-group">
            <input class="btn btn-primary btn-login" type="submit" name="saveChanges" value="Save Changes" />
            <input class="btn btn-primary btn-login" type="submit" formnovalidate name="cancel" value="Cancel" style="background-color: #a21b1b;"/>
          </div>
        </form>

      </div>
    </article>
  </div>
</div>

<?php if ( $results['article']->id ) { ?>
      <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>

<?php include "templates/include/footer.php" ?>

