  <?php
    get_header();
    ?>

  <!-- Main -->
  <section id="main" class="container">

      <section class="box special">
          <header class="major">
              <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                ?>
      </section>


      <!-- CTA -->
      <section id="cta">

          <h2>Sign up for beta access</h2>
          <p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>

          <form>
              <div class="row gtr-50 gtr-uniform">
                  <div class="col-8 col-12-mobilep">
                      <input type="email" name="email" id="email" placeholder="Email Address" />
                  </div>
                  <div class="col-4 col-12-mobilep">
                      <input type="submit" value="Sign Up" class="fit" />
                  </div>
              </div>
          </form>

      </section>
      <?php get_footer() ?>