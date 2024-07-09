<?php
    $localfile =  __DIR__ . "/goodreads.xml";
    $feedurl = "https://www.goodreads.com/review/list_rss/".option('mirthe.mygoodreads.accountnr').
        "?key=".option('mirthe.mygoodreads.apiKey')."&shelf=read&sort=date_read&order=d";
    include_once ('storefile.php');
    $rss = simplexml_load_string($feeds);
