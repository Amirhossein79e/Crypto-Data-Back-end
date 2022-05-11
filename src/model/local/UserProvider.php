<?php
declare(strict_types=1);

namespace crypto\model\local;
use crypto\model\entity\User;

class UserProvider extends Database implements UserDao
{

    public function __construct()
    {
        parent::__construct();
    }


    public function insert(User ...$users): bool
    {
        $valuesStr = "";

        foreach ($users as $index => $item)
        {
            $valuesStr .= "(".str_replace("(","",str_replace(")","",$item)).")";

            if ($index < count($users) - 1)
            {
                $valuesStr .= ",";
            }
        }

        $stmt = $this->mysqli->prepare("insert into user values ?");
        $stmt->bind_param("s",$valuesStr);
        $isSuccessful = $stmt->execute();

        $stmt->close();
        return $isSuccessful;
    }


    public function init(string $id, string $fToken, string $publicKey, int $action, int $isRegistered, int $accessLevel): bool
    {
        $this->mysqliDriver->report_mode = MYSQLI_REPORT_STRICT|MYSQLI_REPORT_ERROR;

        $stmt = $this->mysqli->prepare("insert into user (id,f_token,public_key,action,is_registered,access_level) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("sssiii",$id,$fToken,$publicKey,$action,$isRegistered,$accessLevel);
        $isSuccessful = $stmt->execute();

        $stmt->close();
        return $isSuccessful;
    }


    public function listAll(int $limit, int $offset): array|false
    {
        $stmt = $this->mysqli->prepare("select * from user limit ? offset ?");
        $stmt->bind_param("ii",$limit,$offset);
        $isSuccess = $stmt->execute();

        if ($isSuccess)
        {
            $result = $stmt->get_result();
            $array = array();

            if ($result->num_rows > 0)
            {
                while (($crypto = $result->fetch_object(User::class)) != null)
                {
                    $array[] = $crypto;
                }
            }

            $result->close();
            $stmt->close();
            return $array;
        }else
        {
            $stmt->close();
            return false;
        }
    }


    public function listCustom(int $limit, int $offset, int ...$userIds): array|false
    {
        $ids = implode(",",$userIds);

        $stmt = $this->mysqli->prepare("select * from user where id in (?) limit ? offset ?");
        $stmt->bind_param("s",$ids,$limit,$offset);
        $isSuccess = $stmt->execute();

        if ($isSuccess)
        {
            $result = $stmt->get_result();
            $array = array();

            if ($result->num_rows > 0)
            {
                while (($crypto = $result->fetch_object(User::class)) != null)
                {
                    $array[] = $crypto;
                }
            }

            $result->close();
            $stmt->close();
            return $array;
        }else
        {
            $stmt->close();
            return false;
        }
    }


    public function listSingle(int $userId): User|null|false
    {
        $stmt = $this->mysqli->prepare("select * from user where id = ?");
        $stmt->bind_param("s",$userId,$limit,$offset);
        $isSuccess = $stmt->execute();

        if ($isSuccess)
        {
            $result = $stmt->get_result();
            $user = null;

            if ($result->num_rows > 0)
            {
                $user = $result->fetch_object(User::class);
            }

            $result->close();
            $stmt->close();
            return $user;
        }else
        {
            $stmt->close();
            return false;
        }
    }


    public function signIn(string $email, string $password): User|null|false
    {
        $stmt = $this->mysqli->prepare("select * from user where email = ? and password = ?");
        $stmt->bind_param("ss",$email,$password);
        $isSuccess = $stmt->execute();

        if ($isSuccess)
        {
            $result = $stmt->get_result();
            $user = null;

            if ($result->num_rows > 0)
            {
                $user = $result->fetch_object(User::class);
            }

            $result->close();
            $stmt->close();
            return $user;
        }else
        {
            $stmt->close();
            return false;
        }
    }


    public function signUp(string $userId, string $username, string $email, string $password): bool
    {
        $this->mysqliDriver->report_mode = MYSQLI_REPORT_STRICT|MYSQLI_REPORT_ERROR;

        $stmt = $this->mysqli->prepare("update user set username = ?,email = ?,password = ? where id = ?");
        $stmt->bind_param("ssss",$username,$email,$password,$userId);
        $isSuccess = $stmt->execute();

        $stmt->close();
        return $isSuccess;
    }


    public function signOut(int $userId, int $action): bool
    {
        $stmt = $this->mysqli->prepare("update user set action = ? where id = ?");
        $stmt->bind_param("is",$action,$userId);
        $isSuccess = $stmt->execute();

        $stmt->close();
        return $isSuccess;
    }


    public function updateStatus(string $userId, bool $isRegistered, int $action, int $accessLevel, ?string $publicKey): bool
    {
        $publicKeyUpdate = $publicKey !== null ? ",public_key = ?" : "";

        $stmt = $this->mysqli->prepare("update user set is_registered = ?,action = ?,access_level = ?".$publicKeyUpdate." where id = ?");

        if ($publicKey !== null)
        {
            $stmt->bind_param("iiiss",$isRegistered,$action,$isRegistered,$publicKeyUpdate,$userId);
        }else
        {
            $stmt->bind_param("iiis",$isRegistered,$action,$isRegistered,$userId);
        }

        $isSuccess = $stmt->execute();

        $stmt->close();
        return $isSuccess;
    }


    public function update(User ...$users): bool
    {
        // TODO: Implement update() method.
    }

    public function delete(int ...$userIds): bool
    {
        // TODO: Implement delete() method.
    }
}