<?php

namespace App\class;
/**
 * Class Comment
 * Represents a comment entity.
 */
class Comment
{
    /**
     * @var int|null The ID of the comment.
     */
    protected $id;

    /**
     * @var string|null The body text of the comment.
     */
    protected $body;

    /**
     * @var string|null The creation date of the comment.
     */
    protected $createdAt;

    /**
     * @var int|null The ID of the news article associated with the comment.
     */
    protected $newsId;

    /**
     * Sets the ID of the comment.
     * @param int $id The ID of the comment.
     * @return Comment This Comment instance.
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets the ID of the comment.
     * @return int|null The ID of the comment.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the body text of the comment.
     * @param string $body The body text of the comment.
     * @return Comment This Comment instance.
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets the body text of the comment.
     * @return string|null The body text of the comment.
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets the creation date of the comment.
     * @param string $createdAt The creation date of the comment.
     * @return Comment This Comment instance.
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Gets the creation date of the comment.
     * @return string|null The creation date of the comment.
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Gets the ID of the news article associated with the comment.
     * @return int|null The ID of the news article associated with the comment.
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * Sets the ID of the news article associated with the comment.
     * @param int $newsId The ID of the news article associated with the comment.
     * @return Comment This Comment instance.
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;
        return $this;
    }
}
