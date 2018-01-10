<?php
$files = scandir('sites_content/');
unset($files[1]);
unset($files[0]);
foreach($files as $file) {
    $out = fopen("public/sites/".pathinfo('sites_content/'.$file)['filename'].".php", "w");
    $in = file_get_contents('sites_content/'.$file);

    echo '*'.pathinfo('sites_content/'.$file)['filename'], "\n";
    $txt = '<?php'."\n".'require "../php/code.php";'."\n".'$content = "";'."\n";
    $txt .= site_generate($in);
    $txt .= '$rootoff = "../";'."\n".'require "../php/base.php";'."\n".'?>'."\n";
    fwrite($out, $txt);

}

function site_generate($source) {
    $output = "";
    $tokens = explode("***", $source);
    foreach($tokens as $token) {
        $output .= '$content .= ';
        $tokenid = substr($token,0,8);
        if($tokenid == "_TEXT___") {
            echo '_TEXT___'."\n";
            $output .= "format_p(";
            $output .= "<<<'EOD'";
            $output .= substr($token, 8);
            $output .= "\n".'EOD'."\n".');'."\n";

        } else if($tokenid == "_BCODE__") {
            echo '_BCODE__'."\n";
            $output .= "format_code_block_p(";
            $output .= "<<<'EOD'";
            $output .= substr($token, 8);
            $output .= "\n".'EOD'."\n".');'."\n";
            
        } else if($tokenid == "_CODE___") {
            echo '_CODE___'."\n";
            $output .= "format_code_inline_p(";
            $output .= "<<<'EOD'";
            $output .= substr($token, 8);
            $output .= "\n".'EOD'."\n".');'."\n";

        } else if($tokenid == "_HTML___") {
            echo '_HTML___'."\n";
            $output .= "<<<'EOD'";
            $output .= substr($token, 8);
            $output .= "\n".'EOD;'."\n";
            
        } else {
            echo 'NOT FOUND !!!!!'."\n"."\n";
            return $output;

        }

    }

    
    return $output;

}
?>