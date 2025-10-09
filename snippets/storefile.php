<?php if (!file_exists($localfile) OR time()-filemtime($localfile) > 2 * 3600 OR isset($_GET['forcecache'])) {
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $feedurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $site->title());
    
    $feeds = curl_exec($ch);
    curl_close($ch);
    
    $fp = fopen($localfile, 'w');
    fwrite($fp, $feeds);
    fclose($fp);

} else {
    $feeds = file_get_contents($localfile); 
} ?>
