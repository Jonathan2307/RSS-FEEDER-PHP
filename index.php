<?php
$xml = simplexml_load_file('https://www.lemonde.fr/international/rss_full.xml');
$xml1 = simplexml_load_file('https://www.lemonde.fr/societe/rss_full.xml');
$xml2 = simplexml_load_file('https://www.lemonde.fr/economie/rss_full.xml');
$xml3 = simplexml_load_file('https://www.lemonde.fr/sport/rss_full.xml');
$xml4 = simplexml_load_file('https://www.lemonde.fr/cultures-web/rss_full.xml');

function getRssFlow($xml)
{
    foreach ($xml->channel->item as $article) {
        echo $article->title . '<br>';
        echo $article->description . '<br>';
        echo $article->pubDate . '<br>';
        echo $article->link . '<br>';
        echo $article->children('media', true)->content->attributes() . '<br>';
        echo $article->children('media', true)->content->description . '<br>';
    }
};

getRssFlow($xml);


function getRssXtimes($xml)
{
    for ($i = 0; $i < 10; $i++) {
        echo $xml->channel->item[$i]->title . '<br>';
        echo $xml->channel->item[$i]->description . '<br>';
        echo $xml->channel->item[$i]->link . '<br>';
        echo $xml->channel->item[$i]->children('media', true)->content->attributes() . '<br>';
        echo $xml->channel->item[$i]->children('media', true)->content->description . '<br>';
    }
};



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>