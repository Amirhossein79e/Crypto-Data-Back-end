<?php


namespace crypto\model\local;
use crypto\model\entity\User;

interface UserDao
{
    public function insert(User... $users) : bool;

    public function init(string $id, string $fToken, string $publicKey, int $action, int $isRegistered, int $accessLevel) : bool;

    public function listAll(int $limit, int $offset) : array|false;

    public function listCustom(int $limit, int $offset, int... $userIds) : array|false;

    public function listSingle(int $userId) : User|null|false;

    public function signIn(string $email, string $password) : User|null|false;

    public function signUp(string $userId, string $username, string $email, string $password) : bool;

    public function signOut(int $userId, int $action) : bool;

    public function updateStatus(string $userId, bool $isRegistered, int $action, int $accessLevel, ?string $publicKey) : bool;

    public function update(User... $users) : bool;

    public function delete(int... $userIds) : bool;

}