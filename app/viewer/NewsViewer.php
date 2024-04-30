<?php

namespace App\Viewer;

use App\Utils\DB;
use App\Utils\NewsManager;
use App\Utils\CommentManager;

/**
 * Class NewsViewer
 * Handles the display of news articles with their associated comments.
 */
class NewsViewer
{
    /**
     * Displays news articles along with their comments.
     */
    public function displayNewsWithComments()
    {
        // Retrieve news articles and their comments
        $newsManager = new NewsManager(DB::getInstance());
        $newsArticles = $newsManager->listNews();

        // Display news articles and their comments
        foreach ($newsArticles as $news) {
            echo("############ NEWS " . $news->getTitle() . " ############\n");
            echo($news->getBody() . "\n");
            
            $commentManager = new CommentManager(DB::getInstance());
            $comments = $commentManager->listCommentsForNews($news->getId());
            foreach ($comments as $comment) {
                echo("Comment " . $comment->getId() . " : " . $comment->getBody() . "\n");
            }
        }
    }
}
