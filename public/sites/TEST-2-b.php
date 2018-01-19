<?php
require "../../php/code.php";
$content = "";
$content .= format_code_inline_p(<<<'EOD'
#define text;



#define text_end;

EOD
);
$content .= format_code_block(<<<'EOD'
#define code;



#define code_end;
EOD
);
$content .= <<<'EOD'
<a class="btn btn-primary" href="TEST-1-a.php" style="color:inherit">Vorheriges</a>
EOD
;
$sitename = "TEST-2-b";
require "../../php/base.php";
?>
