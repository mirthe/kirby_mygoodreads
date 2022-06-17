<?php 
    $localfile =  __DIR__ . "/goodreads.xml";
    $feedurl = "https://www.goodreads.com/review/list_rss/".option('mirthe.mygoodreads.accountnr').
        "?key=".option('mirthe.mygoodreads.apiKey')."&shelf=read&sort=date_read&order=d";

    if (!file_exists($localfile) OR time()-filemtime($localfile) > 2 * 3600 OR isset($_GET['forcecache'])) {
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $feedurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $feeds = curl_exec($ch);
        curl_close($ch);
        
        $fp = fopen($localfile, 'w');
        fwrite($fp, $feeds);
        fclose($fp);

    } else {
        $feeds = file_get_contents($localfile); 
    }
  
    $rss = simplexml_load_string($feeds);
?>