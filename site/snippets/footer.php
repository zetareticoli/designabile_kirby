  <footer>
      <div class="wrapper">
          <div class="footer-primary">
              <p>Interaction&nbsp;Design, Web&nbsp;Design &amp; Digital&nbsp;Branding </p>
              <p>Based in <a href="/contact/">Rome</a></p>
          </div>
          <ul class="footer-contacts">
              <li><a href="mailto:hello@designabile.com">hello@designabile.com</a></li>
              <li><p>+39 349-2514866</p></li>
              <ul class="footer-social cf">
                  <li><a href="http://twitter.com/zetareticoli/" title="Twitter" target="_blank"><i class="ss-icon">twitter</i></a></li>
                  <li><a href="http://insta.zetareticoli.com/" title="Instagram" target="_blank"><i class="ss-icon">dribbble</i></a></li>
                  <li><a href="http://insta.zetareticoli.com/" title="Instagram" target="_blank"><i class="ss-icon">behance</i></a></li>
                  <li><a href="http://insta.zetareticoli.com/" title="Instagram" target="_blank"><i class="ss-icon">linkedin</i></a></li>
              </ul>
          </ul>
          <div class="footer-secondary">
              <p class="footer-copyright"><small><?php echo kirbytext($site->copyright()) ?></small></p>
          </div>
      </div>
  </footer>

  <?php include_once("analyticstracking.php") ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
  <?php echo js('assets/js/responsive-nav.js') ?>
  <?php echo js('assets/js/main.js') ?>
</body>

</html>