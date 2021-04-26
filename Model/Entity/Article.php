<?php

namespace Model\Entity;

class Article {

    private ?int $id;
    private string $content;
    private string $img;
    private User $user;

    /**
     * Article constructor.
     * @param int|null $id
     * @param string $content
     * @param User $user
     * @param string $img
     */
    public function __construct(string $content, User $user, string $img, int $id= null) {
        $this->id = $id;
        $this->content = $content;
        $this->img = $img;
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
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
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