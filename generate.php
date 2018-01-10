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
$files = scandir('sites_content/');
// unsets .. and .
unset($files[1]);
unset($files[0]);
foreach($files as $file) {
    $out = fopen("public/sites/".pathinfo('sites_content/'.$file)['filename'].".php", "w");
    $in = file_get_contents('sites_content/'.$file);

    // tells us which file is currently being parsed
    echo '*'.pathinfo('sites_content/'.$file)['filename'], "\n";
    $txt = '<?php'."\n".'require "../../php/code.php";'."\n".'$content = "";'."\n";
    $txt .= site_generate($in);
    $txt .= '$rootoff = "../";'."\n".'require "../../php/base.php";'."\n".'?>'."\n";
    fwrite($out, $txt);

}

// creates php source code from the given file
// is is the replacement for a c preprocessor
// because sadly php dosen't have one
function site_generate($source) {
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
            $output .= "format_code_block_p(";
            
        } else if($tokenid == "_CODE_") {
            echo '_CODE___'."\n";
            $output .= "format_code_inline_p(";

        } else if($tokenid == "_HTML_") {
            echo '_HTML___'."\n";
            $output .= "<<<'EOD'";
            $output .= substr($token, 6);
            $output .= "\n".'EOD;'."\n";
            
        } else {
            echo 'NOT FOUND !!!!!'."\n"."\n";
            return $output;

        }
        
        if($tokenid != "_HTML_") {
            $output .= "<<<'EOD'";
            $output .= substr($token, 6);
            $output .= "\n".'EOD'."\n".');'."\n";

        }

    }

    return $output;

}
?>