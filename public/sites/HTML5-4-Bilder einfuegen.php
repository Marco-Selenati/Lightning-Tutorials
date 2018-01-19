<?php
require "../../php/code.php";
$content = "";
$content .= <<<'EOD'
<h1>Bilder einfügen</h1>

EOD;
$content .= format_code_inline_p(<<<'EOD'
Eine Website besteht ja nicht nur aus Text, sondern hat vielfach auch noch Bilder. Diese können wir mit dem <img> Tag in unsere Seite einbinden. Der <img> Tag hat, genau wie der <meta> Tag, keinen Endtag, da er keinen Text beschreibt. Er hat dafür zwei obligatorische Attribute, "src", für die Source (engl. Quelle), und "alt", für einen alternativen Text der von Screen Readerern von blinden Menschen gelesen werden kann, sodass diese auch wissen was das Bild darstellt. In das src-Attribute kommt ein Pfad zur Bild-Datei die wir einfügen wollen. Dieser Pfad kann entweder relativ oder absolut sein. Ein absoluter Pfad währe auf Windows so etwas wie C:/Benutzer/Gast/Dokumente/herzige_Katze.png. Ein relativer Pfad ist ein Pfad der vom Pfad des html-Dokuments ausgeht, indem er geschrieben wurde. Wenn unser html-Dokument im obrigen Beispiel im Gast Ordner wäre, dann wäre der relative Pfad zum Bild Dokumente/herzige_Katze.png. Wenn wir im Dokumente-Ordner währen, dann währe der Pfad sogar nur herzige_Katze.png. Wie wir hier sehen, braucht der relative Pfad ein bisschen mehr Erklärung, ist aber wesentlich einfacher zu gebrauchen. Ich habe mein html-Dokument im Ordner Dokumente und mein Bild auch, deshalb sieht mein <img> Tag so aus:
<img src="herzige_Katze.png" alt="Ein Bild einer herzigen Katze">
Bei dir sind die Attribute vermutlich anders, aber es sollte nicht schwierig sein den Pfad anzugeben, wenn das html-Dokument und das Bild im gleichen Ordner sind.

EOD
);
$content .= <<<'EOD'
<button type="button" class="btn btn-primary"><a href="HTML5-3-Text%20einfuegen.php" style="color:inherit">Vorheriges</a></button>
EOD
;
$content .= <<<'EOD'
<button type="button" class="btn btn-primary"><a href="HTML5-5-Navigation%20und%20Links.php" style="color:inherit">Nächstes</a></button>
EOD
;
$sitename = "HTML5-4-Bilder einfuegen";
require "../../php/base.php";
?>
