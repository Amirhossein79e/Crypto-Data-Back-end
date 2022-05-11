<?php
declare(strict_types=1);

namespace crypto\model\entity;


class User implements DataClass,\JsonSerializable
{
    private string $id;

    private ?string $username;

    private ?string $email;

    private ?string $password;

    private string $f_token;

    private string $public_key;

    private int $action;

    private bool $is_registered;

    private int $access_level;


    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getFToken(): string
    {
        return $this->f_token;
    }

    /**
     * @param string $f_token
     */
    public function setFToken(string $f_token): void
    {
        $this->f_token = $f_token;
    }

    /**
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->public_key;
    }

    /**
     * @param string $public_key
     */
    public function setPublicKey(string $public_key): void
    {
        $this->public_key = $public_key;
    }

    /**
     * @return int
     */
    public function getAction(): int
    {
        return $this->action;
    }

    /**
     * @param int $action
     */
    public function setAction(int $action): void
    {
        $this->action = $action;
    }

    /**
     * @return bool
     */
    public function getIsRegistered(): bool
    {
        return $this->is_registered;
    }

    /**
     * @param bool $is_registered
     */
    public function setIsRegistered(bool $is_registered): void
    {
        $this->is_registered = $is_registered;
    }

    /**
     * @return int
     */
    public function getAccessLevel(): int
    {
        return $this->access_level;
    }

    /**
     * @param int $access_level
     */
    public function setAccessLevel(int $access_level): void
    {
        $this->access_level = $access_level;
    }


    public function __toString(): string
    {
        return "("
            .$this->id.","
            .$this->username.","
            .$this->email.","
            .$this->password.","
            .$this->f_token.","
            .$this->public_key.","
            .$this->action.","
            .$this->is_registered
            .$this->access_level
            .")";
    }


    public function jsonSerialize() : array
    {
        return [
            "id" => $this->id
            ,"username" => $this->username
            ,"email" => $this->email
            ,"password" => $this->password
            ,"fToken" => $this->f_token
            ,"public_key" => $this->public_key
            ,"action" => $this->action
            ,"isRegistered" => $this->is_registered
            ,"accessLevel" => $this->access_level
        ];
    }
}