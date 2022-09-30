<?php 

include 'news-db.php';
try {
    $sql = "SELECT * FROM news ORDER BY date_posted DESC LIMIT 3";
    $results = $pdo->prepare($sql);
    $results->execute();
    $news = $results->fetchAll(PDO::FETCH_ASSOC);
   

} catch (Exception $e) {
    throw $e;
}