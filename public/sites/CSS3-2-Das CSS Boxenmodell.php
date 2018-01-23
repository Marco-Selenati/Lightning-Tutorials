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
<div class="embed-responsive embed-responsive-16by9">
    <video controls>
        <source class="embed-responsive-item" src="../video/lernvideo_lightning_tutorials.mp4" type="video/mp4">
        Dein browser supported nicht das video format.
    </video>
</div>
EOD;
$content .= <<<'EOD'
<a class="btn btn-primary" href="CSS3-1-CSS%20Grundlagen.php" style="color:inherit">Vorheriges</a>
EOD
;
$sitename = "CSS3-2-Das CSS Boxenmodell";
require "../../php/base.php";
?>
