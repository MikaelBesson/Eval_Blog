<?php

namespace Model\Entity;

class Comment {

    private ?int $id;
    private string $content;
    private int $article_fk;
    private User $user;

    /**
     * Article constructor.
     * @param int|null $id
     * @param string $content
     * @param User $user
     * @param int $article_fk
     */
    public function __construct(string $content, User $user, int $article_fk, int $id= null)
    {
        $this->id = $id;
        $this->content = $content;
        $this->article_fk = $article_fk;
        $this->user = $user;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return int
     */
    public function getArticleFk(): int
    {
        return $this->article_fk;
    }

    /**
     * @param int $article_fk
     */
    public function setArticleFk(int $article_fk): void
    {
        $this->article_fk = $article_fk;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }


}