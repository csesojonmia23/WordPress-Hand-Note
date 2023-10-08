<?php
/*
* The template for displaying 404 page (not found)
*/ 
get_header(); ?>

  <section id="body_area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 error_page">
            <p>404 Error - Page not Found</p>
            <h1>Oops! Looks Like something was wrong</h1>
            <div class="error_search">
                <?php get_search_form(); ?>
            </div>
            <a href="<?php echo home_url(); ?>" class="homepage">Homepage</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>


<?php
/*===========================================
  404 Area Styling
===========================================*/
// CSS
.error_page {
  padding: 50px 0;
  text-align: center;
}
.error_page h1 {
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  color: #262626;
  margin-bottom: 30px;
  text-transform: uppercase;
}
.error_page p {
  color: var(--pink);
  margin-bottom: 0;
}
.error_page a.homepage {
  background: var(--pink);
  color: #fff;
  margin-bottom: 0;
  text-decoration: none;
  font-size: 18px;
  text-transform: uppercase;
  padding: 10px 25px;
  display: inline-block;
  margin-top: 20px;
  transition: 0.5s;
}
.error_page a.homepage:hover {
  background: #262626;
}
.error_search {
  margin-bottom: 15px;
}
.error_search input[type="text"] {
  background: #fff;
  border: 1px solid #ddd;
  padding: 10px;
}
.error_search input[type="submit"] {
  background: var(--pink);
  border: 1px solid var(--pink);
  padding: 10px;
  margin: 0;
  color: #fff;
  transition: 0.5s;
}
.error_search input[type="submit"]:hover {
  background: #262626;
  border: 1px solid #262626;
}
