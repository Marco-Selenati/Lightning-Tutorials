<?php
$content = <<<'EOD'
<h2>HTML</h2>
<div class="row">
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">HTML Foundation</h4>
      <p class="card-text">Doctype!?</p>
      <a href="sites/site1.php" class="btn btn-primary">Learn !</a>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">HTML Foundation</h4>
      <p class="card-text">Doctype!?</p>
      <a href="sites/site1.php" class="btn btn-primary">Learn !</a>
    </div>
  </div>
  <div class="card">
    <div class="card-block">
      <h4 class="card-title">HTML Foundation</h4>
      <p class="card-text">Doctype!?</p>
      <a href="sites/site1.php" class="btn btn-primary">Learn !</a>
    </div>
  </div>
</div>
EOD;
$content .= <<<'EOD'
<pre><code class="html">
EOD;
$content .= htmlspecialchars(<<<'EOD'
<h2>HTML</h2>
<p>
  <ul>
    <li>
      <a href="sites/site1.php">basic struct</a>
    </li>
    <li>
      <a href="#">basic struct</a>
    </li>
    <li>
      <a href="#">basic struct</a>
    </li>
    <li>
      <a href="#">basic struct</a>
    </li>
  </ul>
</p>
EOD
);
$content .= <<<'EOD'
</code></pre>
EOD;
$rootoff = "";
require 'php/base.php';
?>