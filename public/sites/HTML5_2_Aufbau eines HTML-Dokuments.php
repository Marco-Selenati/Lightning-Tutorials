<?php
require "../../php/code.php";
$content = "";
$content .= <<<'EOD'
<h1>HTML5</h1>

EOD;
$content .= format_code_inline_p(<<<'EOD'
Um eine HTML-Dokument zu erstellen, öffnet man seinen Editor, ich würde für den Anfang Notepad++ empfehlen, und erstell ein neues Dokument. Dieses speichert man mit irgendeinem Namen ab, man muss aber die Endung .html anhängen. Dann kann man anfangen HTML-Code zu schreiben.
Jedes HTML-Dokument sollte mit der Zeile
<!doctype html>
beginnen, die dem Browser sagt, dass dieses Dokument vom Typ HMTL ist. Danach folgen die html Start und Endtags.

EOD
);
$content .= format_code_block(<<<'EOD'
<!doctype html>
<html>
</html>

EOD
);
$content .= format_p(<<<'EOD'
In diese hinein kommen der head und der body

EOD
);
$content .= format_code_block(<<<'EOD'
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
$content .= format_code_block(<<<'EOD'
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
Dieser <meta> Tag beinhaltet mehrere neue Sachen. Zuerst einmal fällt auf das er keinen Endtag hat. Der meta Tag ist einer von ganz wenigen Tags die keinen Endtag haben, weil sie nicht da sind um ein Stück Text zu beschreiben, sondern einfach irgendetwas aussagen. In diesem Fall sagt uns der Meta-Tag, mit welcher Kodierung dieses Dokument kodiert wurde. UTF-8 ist heutzutage der Standard und deshalb benutzen wir diese Kodierung. Diese Kodierung wird mithilfe eines Attributs mit dem Namen charset übergeben. Grundsätzlich kann jeder Tag ein Attribut haben, aber es macht nicht bei allem Sinn.
Dann können wir noch den title bestimmen. Das machen wir wie oben schon angesprochen mit dem <title> Tag, also zum Beispiel
<title>Testseite</title>
in diesem Fall wird jetzt „Testseite“ im tab oben angezeigt, oder wenn du die Seite als Lesezeichen speicherst.
Damit sind wir schon fertig mit allem, was für eine normale Webseite in den head bereich kommt und wir können mit dem body weitermachen.

EOD
);
$content .= <<<'EOD'
<a href="HTML5_1_HTML5.php"><button type="button" class="btn btn-primary">Vorheriges</button></a>
EOD
;
$content .= <<<'EOD'
<a href="HTML5_3_Text%20einfuegen.php"><button type="button" class="btn btn-primary">Nächstes</button></a>
EOD
;
$rootoff = "../";
require "../../php/base.php";
?>
