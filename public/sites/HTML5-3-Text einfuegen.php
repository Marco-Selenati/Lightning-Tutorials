<?php
require "../../php/code.php";
$content = "";
$content .= <<<'EOD'
<h1>Text einfügen</h1>

EOD;
$content .= format_code_inline_p(<<<'EOD'
In den body kommt der eigentliche Inhalt der Seite, also Sachen wie das Inhaltsverzeichnis, Bilder, Text, usw. Wir werden nun erst einmal mit einem Titel für unsere Seite beginnen, der ganz oben angezeigt werden soll. Das machen wir mit dem h1 Tag. Zum Beispiel
<h1>Meine erste Webseite</h1>
Wenn wir jetzt unser html-Dokument speichern und im Browser öffnen, werden wir feststellen, dass jetzt gross und fett „Meine erste Website“ steht. Dieser Text sieht jetzt so aus, weil wir dem Browser gesagt haben, dass er ein h1, oder Überschrift 1 ist und der Browser hat dann nachgeschaut, wie eine Überschrift 1 dargestellt werden soll und hat den Text so auf dem Bildschirm dargestellt. Wenn wir jetzt ein bisschen Fliesstext anzeigen wollen, dann machen wir das mit dem <p>, oder Paragraph Tag. Zum Beispiel so:
<p>Dies ist ein Stück Fliesstext.<p>
Wenn man jetzt wieder im Browser nachschaut, dann merkt man, dass der Text dieses Mal klein und nicht Fett dargestellt wird. Das ist, weil er ein Paragraph ist und nicht eine Überschrift. HTML-Tags kann man sich ein bisschen wie Formatvorlagen in Word vorstellen, wo man verschiedene Textstücke als Überschriften, oder Text, oder was auch immer markiert und sie dann im ganzen Dokument gleich dargestellt werden. Und genau wie in Word kann man das Aussehen der Formatvorlagen/Tags verändern. Wie wir das genau machen, werden wir im CSS-Teil des Tutorials anschauen.

EOD
);
$content .= <<<'EOD'
<a class="btn btn-primary" href="HTML5-2-Aufbau%20eines%20HTML-Dokuments.php" style="color:inherit">Vorheriges</a>
EOD
;
$content .= <<<'EOD'
<a class="btn btn-primary" href="HTML5-4-Bilder%20einfuegen.php">Nächstes</a>
EOD
;
$sitename = "HTML5-3-Text einfuegen";
require "../../php/base.php";
?>
