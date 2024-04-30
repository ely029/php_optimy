<?php

namespace App\Utils;

use App\Utils\DB;
use App\Class\Comment;

/**
 * Class CommentManager
 * Manages comments, including listing, adding, and deleting comments.
 */
class CommentManager
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
     * Lists comments for a specific news article.
     * @param int $newsId The ID of the news article.
     * @return array Array of Comment objects.
     */
    public function listCommentsForNews($newsId)
    {
        $sql = 'SELECT * FROM `comment` WHERE `news_id` = :news_id';
        $params = [':news_id' => $newsId];
        $rows = $this->db->select($sql, $params);

        $comments = [];
        foreach ($rows as $row) {
            $comment = new Comment();
            $comments[] = $comment->setId($row['id'])
                ->setBody($row['body'])
                ->setCreatedAt($row['created_at'])
                ->setNewsId($row['news_id']);
        }
        return $comments;
    }

    /**
     * Adds a comment for a specific news article.
     * @param string $body The body of the comment.
     * @param int $newsId The ID of the news article.
     * @return int The ID of the newly added comment.
     */
    public function addCommentForNews($body, $newsId)
    {
        $sql = "INSERT INTO `comment` (`body`, `created_at`, `news_id`) VALUES(:body, :created_at, :news_id)";
        $params = [
            ':body' => $body,
            ':created_at' => date('Y-m-d'),
            ':news_id' => $newsId
        ];
        $this->db->exec($sql, $params);
        return $this->db->lastInsertId();
    }

    /**
     * Deletes a comment by its ID.
     * @param int $id The ID of the comment to delete.
     * @return bool True if the comment is successfully deleted, false otherwise.
     */
    public function deleteComment($id)
    {
        $sql = "DELETE FROM `comment` WHERE `id` = :id";
        $params = [':id' => $id];
        return $this->db->exec($sql, $params);
    }
}
