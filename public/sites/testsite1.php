<?php
require "../../php/code.php";
$content = "";
$content .= format_code_inline_p(<<<'EOD'#define text;



#define text_end;

EOD
);
$content .= format_code_block_p(<<<'EOD'#define code;



#define code_end;
EOD
);
$rootoff = "../";
require "../../php/base.php";
?>
