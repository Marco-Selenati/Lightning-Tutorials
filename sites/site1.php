<?php
$content = <<<'EOD'
<h1>HTML</h1>
<p class="lead">
  HTML Basics
</p>
<pre><code>
EOD;
$content .= htmlspecialchars(<<<'EOD'
<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>
  </body>
</html>
EOD
);
$content .= <<<'EOD'
</code></pre>
EOD;
$rootoff = "../";
require '../php/base.php';
?>