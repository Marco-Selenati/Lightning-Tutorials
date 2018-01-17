<?php
require "../../php/code.php";
$content = "";
$content .= <<<'EOD'
<h1>HTML</h1>

EOD;
$content .= format_code_inline_p(<<<'EOD'
HTML ist eine Markup-Sprache. Sie macht nichts anderes wie sagen, was bestimmte Daten genau sind. Bsp.:
<title>Dies ist der Titel</title>
<title> ist ein Starttag und </title> ist ein Endtag. Zusammen sagen sie, dass der Text “Dies ist der Titel” ein title ist. Nicht mehr und nicht weniger. HTML ist der Weg, wie Webseiten übertragen werden. Wenn ein Browser ein HTML-Dokument, was nichts anderes als ein reines Text-File ist, bekommt, dann schaut er all die Tags an und sieht dann, welcher Text was ist. Ein <title> würde dann zum Beispiel als den Text, den man oben auf dem Tab im Browser sieht, interpretiert werden. Andere Beispiele für HTML-Tags sind <h1>, was eine Überschrift 1 ist, oder <p> was ein Paragraph ist. Es gibt viele solche Tags, die alle ein vorbestimmtes Aussehen haben, aber dieses kann mithilfe von CSS angepasst werden. Wir werden CSS aber erst später anschauen.

EOD
);
$content .= <<<'EOD'
<a href="HTML5_2_Aufbau eines HTML-Dokuments.php"><button type="button" class="btn btn-primary">Nächstes</button></a>
EOD
;
$rootoff = "../";
require "../../php/base.php";
?>
