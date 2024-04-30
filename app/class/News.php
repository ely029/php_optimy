<?php

namespace App\Class;

/**
 * Class News
 * Represents a news article.
 */
class News
{
    /**
     * @var int|null The ID of the news article.
     */
    protected $id;

    /**
     * @var string|null The title of the news article.
     */
    protected $title;

    /**
     * @var string|null The body of the news article.
     */
    protected $body;

    /**
     * @var string|null The creation date of the news article.
     */
    protected $createdAt;

    /**
     * Sets the ID of the news article.
     * @param int $id The ID of the news article.
     * @return News This News object.
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets the ID of the news article.
     * @return int|null The ID of the news article.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the title of the news article.
     * @param string $title The title of the news article.
     * @return News This News object.
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets the title of the news article.
     * @return string|null The title of the news article.
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the body of the news article.
     * @param string $body The body of the news article.
     * @return News This News object.
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets the body of the news article.
     * @return string|null The body of the news article.
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets the creation date of the news article.
     * @param string $createdAt The creation date of the news article.
     * @return News This News object.
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Gets the creation date of the news article.
     * @return string|null The creation date of the news article.
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
