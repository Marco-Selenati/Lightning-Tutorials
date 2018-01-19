<?php
require "../../php/code.php";
$content = "";
$content .= <<<'EOD'
<h1>Navigation und Links</h1>

EOD;
$content .= format_code_inline_p(<<<'EOD'
Eine Website besteht normalerweise nicht nur aus einer Seite und hat meistens ein Inhaltsverzeichnis. Für das Inhaltsverzeichnis, oder die Navigation gibt es in HTML den <nav> Tag. Dieser kommt in den <body> hinein. Zwischen den Anfang und Endtag vom <nav> kommt dann eine Liste mit den Links zu den einzelnen Seiten. In html gibt es zwei Arten von Listen. Die geordnete Liste (<ol>, ordered List) und die ungeordnete Liste (<ul>, unordered List). Die beiden Listen unterscheiden sich darin, dass die Einträge in der geordneten Liste nummeriert sind und in der ungeordneten nicht. Da unsere Einträge nicht nummeriert sein müssen, werden wir die ungeordnete Liste (<ul>) benutzen. Zwischen die <ul> Tags kommen dann die einzelnen Einträge mit <li> markiert hinein. Zum Beispiel so:

EOD
);
$content .= format_code_block(<<<'EOD'
<nav>
  <ul>
    <li>Eintrag 1</li>
    <li>Eintrag 2</li>
    <li>Eintrag 3</li>
  </ul>
</nav>

EOD
);
$content .= format_code_inline_p(<<<'EOD'
Wenn uns die Seite jetzt anschauen, dann sehen wir zwar ein Inhaltsverzeichnis, aber es passiert nichts, wenn wir auf die Einträge klicken. Das ist, weil die Einträge keine Links zu anderen Seiten sind. Links definieren wir mit dem <a> Tag. Dieser Tag brauch nur 1 Attribut, nämlich das href-Attribut. In das href-Attribut können wir, genau wie in das src-Attribut, einen Pfad angeben. Des Weiteren können wir auch die Adresse einer anderen Webseite angeben, wie zum Beispiel http://www.google.ch. In unserem Fall wollen wir aber auf eine andere Seite von unserer Homepage weiterleiten. Um das zu machen müssen wir aber zuerst überhaupt eine zweite Seite haben. Diese können wir erstellen, indem wir einfach ein zweites html-Dokument in unserem Verzeichnis anlegen und die Grundstruktur eines html-Dokuments dort hineinkopieren. In meinem Fall habe ich dieses Dokument site1.html genannt und werde ab jetzt diesen Namen verwenden. Du kannst es aber nennen wie du willst, und musst nur meinen Namen durch deinen austauschen. Ein Link zu meiner Seite würde so aussehen:
<a href="site1.html">Dies ist der Text den du anklicken kannst um auf site1 zu gelangen</a>
Da wir jetzt wissen, wie man einen Link macht, können wir dies einfach in unsere Navigation einbauen. Sie sieht dann etwa so aus:

EOD
);
$content .= format_code_block(<<<'EOD'
<nav>
  <ul>
    <li><a href="site1.html">Hier geht’s zur Seite 1</a></li>
    <li><a href="site2.html">Diese Seite ist noch nicht implementiert</a></li>
    <li><a href="site3.html">Diese Seite ist noch nicht implementiert</a></li>
  </ul>
</nav>

EOD
);
$content .= <<<'EOD'
<p>
Und damit sind wir mit den HTML Grundlagen fertig. HTML hat aber noch viele weitere Sachen zu bieten, und ist selber auch nur der Grundbaustein für die vielen anderen Technologien des Webs, das heisst du hast noch nicht ausgelernt. Um herauszufinden, wie du deine Webseite anders aussehen lässt, wie ein Word-Dokument wo alles schwarz auf Weiss und linksbündig ist, mach mit unserem CSS Tutorial weiter. Wenn du irgendwelche Fragen hast, oder noch mehr lernen willst, dann gibt es auf <a href="http://www.w3schools.com">w3schools</a> eine gute Referenz zu verschiedensten Technologien des Webs.
</p>
EOD;
$content .= <<<'EOD'
<button type="button" class="btn btn-primary"><a href="HTML5-4-Bilder%20einfuegen.php" style="color:inherit">Vorheriges</a></button>
EOD
;
$sitename = "HTML5-5-Navigation und Links";
require "../../php/base.php";
?>
