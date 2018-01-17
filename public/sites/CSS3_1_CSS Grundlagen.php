<?php
require "../../php/code.php";
$content = "";
$content .= <<<'EOD'
<h1>CSS Grundlagen</h1>

EOD;
$content .= format_code_inline_p(<<<'EOD'
CSS-Code kann man an verschieden Stellen hinschreiben, aber die meistverbreiteten sind im head-Bereich oder in einem separaten File. Der Einfachheit halber werden wir ihn in den head-Bereich schreiben. Im head-Bereich kommt der CSS-Code in einen <style> Tag. CSS ist wie HTML relativ simpel. Die Grundlegende Syntax sieht so aus:

EOD
);
$content .= format_code_block_p(<<<'EOD'
<style>
  Tagname {
    Attribut: Wert;
    …
    ...
    
  }
</style>

EOD
);
$content .= format_code_inline_p(<<<'EOD'
Zuerst kommt der Name des Tags, den wir anders aussehen lassen wollen, zum Beispiel p, oder h1. Dann kommt eine geschweifte Klammer auf. Darauf folgen alle Änderungen die an der Darstellung gemacht werden sollen. Diese bestehen jeweils aus dem Attribut, zum Beispiel color für die Schriftfarbe, und einem Wert, für die Schriftfarbe könnte man jetzt red oder green hinschreiben. Das Attribut und der Wert sind jeweils durch einen Doppelpunkt getrennt. Am Schluss jedes Attribut-Wert Paars, kommt ein Semikolon. Wir können so viele Änderungen machen wie wir wollen, aber wenn wir alle hingeschrieben haben kommt eine schliessende geschweifte Klammer. In einem <style> Tag kann man so viele Tags bearbeiten wie man will.
Wenn wir jetzt zum Beispiel die Schriftgrösse des Fliesstextes zu 15 Pixeln ändern wollen, dann schreiben wir einfach

EOD
);
$content .= format_code_block_p(<<<'EOD'
<style>
  p {
    font-size: 15px;

  }
</style>

EOD
);
$content .= format_code_inline_p(<<<'EOD'
Jetzt werden alle Paragraphen auf der ganzen Seite in Schriftgrösse 15px angezeigt werden.

EOD
);
$content .= <<<'EOD'
<a href="CSS3_2_Das CSS Boxenmodell.php"><button type="button" class="btn btn-primary">Nächstes</button></a>
EOD
;
$rootoff = "../";
require "../../php/base.php";
?>
