<html>
  <body>
  <h1>Hello,php!</h1>
  <p>
  <?php
  print "Welcome to My site!";
  ?>
  </p>
  <p>
  <?php
  echo "remote:", $_SERVER['REMOTE_ADDR'],"<br />";
  echo "server:", $_SERVER['SERVER_ADDR'],"<br />";
  ?>
  </p>
  </body>
</html>
