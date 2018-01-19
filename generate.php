<?php
// this file is executed from the command line
// to generate the /public/sites sites
// they are generated from the /sites_content files
// the parser uses these keywords:
// *** to seperate individual segments
// _TEXT_ gets wrapped in a p element
// _BCODE code gets formatted in block form
// _CODE_ code gets formatted in inline beween can be text
// _HTML_ contains html elements
// _NAME_ the name of the site / the name thats displayed in the navigation
$files = scandir('sites_content/');
// unsets .. and .
unset($files[1]);
unset($files[0]);
// array topics
// HTML5 key
// array is value
// 1 index
//  "sitename" value
//  "sourcefilename" value
//  "filename" value
$topics = [];

foreach($files as $file) {
    $filename = pathinfo('sites_content/'.$file)['filename'];
    // topic is the category of the article
    $topic = explode('_', $filename)[0];
    // the index of the article in the topic
    $index = explode('_', $filename)[1];
    $name = explode('_', $filename)[2];

    $topics[$topic][$index]["sitename"] = $name;
    $topics[$topic][$index]["filename"] = str_replace('_', '-', $filename);
    $topics[$topic][$index]["sourcefilename"] = $filename;

}

// first loop saves data
// second loop uses the data to generate
// links from site to site

foreach($topics as $topic_name => $topic) {
    foreach($topic as $site) {
        $out = fopen("public/sites/".$site["filename"].".php", "w");
        $in = file_get_contents('sites_content/'.$site["sourcefilename"]);
        $index = explode('_', $site["sourcefilename"])[1];
        $topic = explode('_', $site["sourcefilename"])[0];
    
        // tells us which file is currently being parsed
        echo '*', $site["sourcefilename"], "\n";
        $txt = '<?php'."\n".'require "../../php/code.php";'."\n".'$content = "";'."\n";
        $txt .= site_generate($in, $index, $topics[$topic]);
        $txt .= '$sitename = "'.$site["filename"].'";'."\n".'require "../../php/base.php";'."\n".'?>'."\n";
        fwrite($out, $txt);

    }

}

echo 'indexes', "\n";
print_r($topics);

$txt = "";

// creates the index file
$txt .= file_get_contents("php/index_start.html");
foreach($topics as $topic_name => $topic) {
    $txt .= '<h2>'.$topic_name.'</h2>'."\n";
    $txt .= '<div class="card-deck">'."\n";
    foreach($topic as $site) {
        $txt .= '<div class="card text-center">'."\n".'<div class="card-block">'."\n";
        $txt .= '<h4 class="card-title">'.$site["sitename"].'</h4>';
        $txt .= '<a href="sites/'.href($site["filename"]).'.php" class="btn btn-primary">Lerne !</a>';
        $txt .= '</div>'."\n".'</div>'."\n";

    }
    
    $txt .= '</div>'."\n";

}
$txt .= file_get_contents("php/index_end.html");

// open the index file
$out = fopen("public/index.php", "w");

fwrite($out, $txt);// write the new content to the index file

// creates php source code from the given file
// is is the replacement for a c preprocessor
// because sadly php dosen't have one
function site_generate($source, $index, $sites) {
    $output = "";
    $tokens = explode("***", $source);
    foreach($tokens as $token) {
        $output .= '$content .= ';
        $tokenid = substr($token, 0, 6);
        if($tokenid == "_TEXT_") {
            echo '_TEXT___'."\n";
            $output .= "format_p(";

        } else if($tokenid == "_BCODE") {
            echo '_BCODE__'."\n";
            $output .= "format_code_block(";
            
        } else if($tokenid == "_CODE_") {
            echo '_CODE___'."\n";
            $output .= "format_code_inline_p(";

        } else if($tokenid == "_HTML_") {
            echo '_HTML___'."\n";
            $output .= "<<<'EOD'";
            $output .= substr($token, 6);
            $output .= "\n".'EOD;'."\n";
            
        } else {
            $output .= '"";'."\n";
            echo 'NOT FOUND !!!!!'."\n"."\n";
            continue;

        }
        
        if($tokenid != "_HTML_") {
            $output .= "<<<'EOD'";
            $output .= substr($token, 6);
            $output .= "\n".'EOD'."\n".');'."\n";

        }

    }

    // add the buttons for forward and backwards
    echo "-i ", $index, "\n";
    if($index > 1) {
        $output .= '$content .= ';
        $output .= "<<<'EOD'\n";
        $output .= '<button type="button" class="btn btn-primary"><a href="'.href($sites[$index - 1]["filename"]).'.php" style="color:inherit">Vorheriges</a></button>';
        $output .= "\n".'EOD'."\n".';'."\n";
    
    }
    if($index < count($sites)) {
        $output .= '$content .= ';
        $output .= "<<<'EOD'\n";
        $output .= '<button type="button" class="btn btn-primary"><a href="'.href($sites[$index + 1]["filename"]).'.php" style="color:inherit">Nächstes</a></button>';
        $output .= "\n".'EOD'."\n".';'."\n";

    }
    return $output;

}

function href($filename) {
    $filename = str_replace(' ', '%20', $filename);
    $filename;
    return $filename;

}
?>