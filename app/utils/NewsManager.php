<?php

namespace App\Utils;

use App\Utils\DB;
use App\Class\News;

/**
 * Class NewsManager
 * Manages news articles, including listing.
 */
class NewsManager
{
    /**
     * @var DB $db Database instance.
     */
    protected $db;

    /**
     * Constructor.
     * @param DB $db The database instance.
     */
    public function __construct(DB $db)
    {
        $this->db = $db;
    }

    /**
     * Lists all news articles from the database.
     * @return array Array of News objects.
     */
    public function listNews()
    {
        // Select all news articles from the database
        $rows = $this->db->select('SELECT * FROM `news`');

        // Initialize an empty array to store news articles
        $news = [];

        // Iterate through each row and create a News object
        foreach ($rows as $row) {
            $n = new News();
            // Set the attributes of the News object
            $news[] = $n->setId($row['id'])
                ->setTitle($row['title'])
                ->setBody($row['body'])
                ->setCreatedAt($row['created_at']);
        }

        // Return the array of News objects
        return $news;
    }
}
