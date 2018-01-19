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
<button type="button" class="btn btn-primary"><a href="TEST-1-a.php" style="color:inherit">Vorheriges</a></button>
EOD
;
$sitename = "TEST-2-b";
require "../../php/base.php";
?>
