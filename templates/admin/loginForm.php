<?php include "templates/include/header.php" ?>


<section class="articles">
  <div class="container">
    <div class="row">
      <article class="offset-4 col-8 col-lg-8 col-md-8 col-xl-8 ">
        <div class="row">
          <form action="admin.php?action=login" method="post" class="col-7 login-form">
            <h1>Connectez-vous</h1> <hr>
            <input type="hidden" name="login" value="true" />

            <?php if ( isset( $results['errorMessage'] ) ) { ?>
                    <div class="form-group"><?php echo $results['errorMessage'] ?></div>
            <?php } ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="gurupress-form-input" type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
            </div>

            <div class="form-group">
            <label for="password">Password</label>
              <input class="gurupress-form-input" type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
            </div>

            <div class="form-group">
              <input  class="btn btn-primary btn-login" type="submit" name="login" value="Login" />
            </div>

          </form>
        </div>
      </article>
    </div>
  </div>
</section>
<?php include "templates/include/footer.php" ?>

