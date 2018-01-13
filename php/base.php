<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="HTML Development" />
    <meta name="author" content="Marco Selenati" />

    <!-- FAV ICO -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/manifest.json" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="theme-color" content="#ffffff" />

    <title>Lightning-Tutorials</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php
            echo $rootoff;
          ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- highlighting -->
    <link rel="stylesheet"
      href="<?php
            echo $rootoff;
          ?>/styles/solarized-dark.css">
    <style>
      @import url('https://fonts.googleapis.com/css?family=VT323');
      body {
        font-family: 'VT323', monospace;
      }
      span code.hljs {
        display: inline;
      }
      /* from http://getbootstrap.com/docs/4.0/examples/sticky-footer/ */
      /* Sticky footer styles
      -------------------------------------------------- */
      html {
        position: relative;
        min-height: 100%;
      }
      body {
        margin-bottom: 60px; /* Margin bottom by footer height */
      }
      .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 60px; /* Set the fixed height of the footer here */
        line-height: 60px; /* Vertically center the text there */
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-toggleable-md navbar-light">
      <a class="navbar-brand" href="<?php
            echo $rootoff;
          ?>index.php">Lightning-Tutorials</a>
    </nav>
    <main role="main" class="container">
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
  </body>
</html>
