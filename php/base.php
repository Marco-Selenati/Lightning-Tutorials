<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="HTML Development">
    <meta name="author" content="Marco Selenati">

    <title>Lightning-Tutorials</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php
            echo $rootoff;
          ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- highlighting -->
    <link rel="stylesheet"
      href="<?php
            echo $rootoff;
          ?>highlighterjs/styles/solarized-dark.css">
    <style>
      @import url('https://fonts.googleapis.com/css?family=VT323');
      body {
        font-family: 'VT323', monospace;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light">
      <a class="navbar-brand" href="<?php
            echo $rootoff;
          ?>index.php">Lightning-Tutorials</a>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto">
          <?php
            echo $content;
          ?>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="<?php
            echo $rootoff;
          ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php
            echo $rootoff;
          ?>highlighterjs/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>
