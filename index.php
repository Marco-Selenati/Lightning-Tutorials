<?php
$content = <<<'EOD'
<h2>HTML</h2>
          <p>
              HTML is .
          </p>
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
              HTML is .
          </p>
          <p>
            <ul>
              <li>
                <a href="#">basic struct</a>
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