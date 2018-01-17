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
<a href="CSS3_1_CSS Grundlagen.php"><button type="button" class="btn btn-primary">Vorheriges</button></a>
EOD
;
$rootoff = "../";
require "../../php/base.php";
?>
