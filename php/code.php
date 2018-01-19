<?php

function format_code_block($str) {
    $ret = '<pre><code>';
    $ret .= htmlspecialchars($str);
    $ret .= '</code></pre>';
    return $ret;

}

function format_code_inline_p($str) {
    $ret = format_code_inline($str);
    $ret = format_p($ret);
    return $ret;

}

function format_code_inline($str) {
    $ret = htmlspecialchars($str);
    $ret = preg_replace(['/&lt/', '/&gt/'], ['<span><code> &lt', '&gt; </code></span>'], $ret);
    $ret = preg_replace('/<\/span>;/', '</span>', $ret);
    return $ret;

}

function format_p($str) {
    $ret = '<p>'.$str.'</p>'."\n";
    return $ret;

}
?>
