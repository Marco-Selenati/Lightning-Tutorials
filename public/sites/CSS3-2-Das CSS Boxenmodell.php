<?php
require "../../php/code.php";
$content = "";
$content .= <<<'EOD'
<h1>Das CSS Boxenmodell</h1>

EOD;
$content .= format_p(<<<'EOD'
Da das CSS Boxenmodel ein bisschen schwierig ist, in Worten zu erklären, haben wir ein Video vorbereitet, das dir hoffentlich hilft es besser zu verstehen.

EOD
);
$content .= <<<'EOD'
<p>video</p>
EOD;
$content .= <<<'EOD'
<a class="btn btn-primary" href="CSS3-1-CSS%20Grundlagen.php" style="color:inherit">Vorheriges</a>
EOD
;
$sitename = "CSS3-2-Das CSS Boxenmodell";
require "../../php/base.php";
?>
