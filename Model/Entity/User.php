<?php

namespace Model\Entity;

class User {

    private ?int $id;
    private ?string $pseudo;
    private ?string $password;

    /**
     * User constructor.
     * @param string|null $pseudo
     * @param string|null $password
     * @param int|null $id
     */
    public function __construct(string $pseudo = null, string $password = null, ?int $id = null) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->password = $password;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    /**
     * @param string|null $pseudo
     */
    public function setPseudo(?string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }
}