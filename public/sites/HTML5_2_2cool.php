<?php
require "../../php/code.php";
$content = "";
$content .= <<<'EOD'
<h1>HTML-Dokument</h1>
<p class="lead">
  Aufbau eines HTML-Dokuments
</p>

EOD;
$content .= format_code_inline_p(<<<'EOD'
Jedes HTML-Dokument sollte mit der Zeile
<!doctype html>
beginnen, die dem Browser sagt, dass dieses Dokument vom Typ HMTL ist. Danach folgen die html Start und Endtags.

EOD
);
$content .= format_code_block_p(<<<'EOD'
<!doctype html>
<html>
</html>

EOD
);
$content .= format_code_inline_p(<<<'EOD'
In diese hinein kommen der head und der body

EOD
);
$content .= format_code_block_p(<<<'EOD'
<!doctype html>
<html>
  <head>
  </head>
  <body>
  </body>
</html>

EOD
);
$content .= format_code_inline_p(<<<'EOD'
Im head werden gewisse Informationen die für die ganze Seite gelten gespeichert, wie zum Beispiel der <title>, oder die Kodierung. In den body kommt der eigentliche Inhalt der Seite, also alle <h1> und <p> Tags.

EOD
);
$content .= format_code_block_p(<<<'EOD'
<!doctype html>
<html>
  <head>
    <meta charset=”utf-8”>
  </head>
  <body>
  </body>
</html>

EOD
);
$content .= format_code_inline_p(<<<'EOD'
Dieser <meta> Tag beinhaltet mehrere neue Sachen. Zuerst einmal fällt auf das er keinen Endtag hat. Der meta Tag ist einer von ganz wenigen Tags die keinen Endtag haben, weil sie nicht da sind um ein Stück Text zu beschreiben, sondern einfach irgendetwas aussagen. In diesem Fall sagt uns der Meta-Tag, mit welcher Kodierung dieses Dokument kodiert wurde. UTF-8 ist heutzutage der Standard und deshalb benutzen wir diese Kodierung. Diese Kodierung wird mithilfe eines Attributs mit dem Namen charset übergeben. Grundsätzlich kann jeder Tag ein Attribut haben, aber es macht nicht bei allen Sinn.
EOD
);
$content .= <<<'EOD'
<a href="HTML5_1_yey html.php"><button type="button" class="btn btn-primary">Vorheriges</button></a>
EOD
;
$rootoff = "../";
require "../../php/base.php";
?>
