<?php

require_once 'core/Connect.php';
require_once 'model/Article.php';

$reqs = $DB->query();

// foreach ($reqs as $reqs => $req) {
//     echo "<p>{$req["article_name"]}</p>";
//     echo "<p>{$req["article_price"]}</p>";
//     echo "<p>{$req["article_text"]}</p>";
//     echo "<p>{$req["article_description"]}</p>";
//     echo "<img src='{$req["src"]}' class='container'>";
//     print_r($req);
// };

$article = new Article();

$article->dispArticles($reqs);
