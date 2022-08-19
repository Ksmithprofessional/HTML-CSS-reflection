<?php 

include 'news-db.php';
try {
    $sql = "SELECT * FROM news";
    $results = $pdo->prepare($sql);
    $results->execute();
    $news = $results->fetchAll(PDO::FETCH_ASSOC);
   

} catch (Exception $e) {
    throw $e;
}