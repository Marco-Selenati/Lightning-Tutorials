<?php
$content = <<<'EOD'
<h2>HTML</h2>
<div class="row">
    <div class="card">
      <div class="card-block">
        <h4 class="card-title"> </h4>
        <p class="card-text">ssss<p>
        <a href="sites/site1.php" class="btn btn-primary">asdf</a>
      </div>
    </div>
  </a>
</div>
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