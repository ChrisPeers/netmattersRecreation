<?php

include("connection.php");

error_reporting(E_ALL);
ini_set('display_errors', '1');


try{

    $pdo = Connection::connect();
    $query = "SELECT * FROM news ORDER BY postDate DESC LIMIT 3"; 

    foreach($pdo->query($query) as $newsArticle) {
        echo "<div class='article-item article-" . $newsArticle['id'] . "'>";  
        echo "<div class='article-title'>"; 
        echo "<div class='art-" . $newsArticle['id'] . "-image'>";
        echo "</div>";
        echo "<span class='art-" .$newsArticle['id'] . "-span'>" . $newsArticle['topic'] . "</span>";
        echo "</div>";
        echo "<div class='article-content'>";
        echo "<h2><a href='https://www.netmatters.co.uk/" . $newsArticle['link'] . "'>" . $newsArticle['title'] . "</a></h2>";
        echo "<p>" . $newsArticle['content'] . "</p>";
        echo "<a class='art-cont-btn" . $newsArticle['id'] . "'><p>Read More</p></a>";
        echo "</div>";
        echo "<div class='article-author'>";
        echo "<img src='images/" . $newsArticle['authorImage'] . "' alt='Profile Photo of " . $newsArticle['author'] . "'>";
        echo "<p><strong>Posted by " . $newsArticle['author'] . "</strong><br>" .$newsArticle['postDate'] . "</p>";
        echo "</div>";
        echo "</div>";
    }

    $pdo = null;

} catch(PDOException $exception){
    echo ('ERROR: ' . $exception->getMessage());
    die();
}
?>
