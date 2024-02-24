<?php
    $localfile =  __DIR__ . "/goodreads-current.xml";
    $feedurl = "https://www.goodreads.com/review/list_rss/".option('mirthe.mygoodreads.accountnr').
        "?key=".option('mirthe.mygoodreads.apiKey')."&shelf=currently-reading&sort=date_started&order=d";
    include_once ('storefile.php');
    $rss = simplexml_load_string($feeds);
    