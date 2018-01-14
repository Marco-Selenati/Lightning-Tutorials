<!DOCTYPE html>
<html lang="de">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="HTML Development" />
    <meta name="author" content="Marco Selenati" />

    <!-- FAV ICO -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=OmyNK9GEpY">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=OmyNK9GEpY">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=OmyNK9GEpY">
    <link rel="manifest" href="/manifest.json?v=OmyNK9GEpY">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=OmyNK9GEpY" color="#5bbad5">
    <link rel="shortcut icon" href="/favicon.ico?v=OmyNK9GEpY">
    <meta name="theme-color" content="#ffffff">

    <title>Lightning-Tutorials</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php
            echo $rootoff;
          ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- highlighting -->
    <link rel="stylesheet"
      href="<?php
            echo $rootoff;
          ?>styles/solarized-dark-tweaked.css">
    <!-- moves the footer down -->
    <link href="<?php
      echo $rootoff;
      ?>css/footer.css" rel="stylesheet">
    <!-- slides -->
    <link href="/css/slippry.css" rel="stylesheet" />
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
      body {
        font-family: 'Open Sans', sans-serif;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light">
      <div class="container">
        <a class="navbar-brand" href="<?php
              echo $rootoff;
            ?>index.php">Lightning-Tutorials</a>
      </div>
    </nav>
    <main class="container">
      <div class="row">
        <div class="col mx-auto">
          <?php
            echo $content;
          ?>
        </div>
      </div>
    </main>
    <footer class="footer">
      <div class="container">
        <span>Mizi</span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="<?php
            echo $rootoff;
          ?>js/bootstrap.min.js"></script>
    <script src="<?php
            echo $rootoff;
          ?>js/highlight.pack.js"></script>
    <!--<script>hljs.initHighlightingOnLoad();</script>-->
    <script>
      $('span code').each(function(i, inline) {
        hljs.highlightBlock(inline);
      });
      $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
      });
    </script>
    <!-- responsive slides -->
    <script src="/js/slippry.min.js"></script>
    <script>
    jQuery('#slider').slippry({
      // general elements & wrapper
      slippryWrapper: '<div class="sy-box pictures-slider" />', // wrapper to wrap everything, including pager

      // options
      adaptiveHeight: false, // height of the sliders adapts to current slide
      captions: false, // Position: overlay, below, custom, false

      // pager
      pager: false,
      
      // controls
      controls: false,
      autoHover: false,

      // transitions
      transition: 'kenburns', // fade, horizontal, kenburns, false
      kenZoom: 140,
      speed: 2000 // time the transition takes (ms)
    });
    </script>
  </body>
</html>
