<?php

namespace Geekbrains\Application1\Domain\Models;

use Geekbrains\Application1\Application\Application;
use Geekbrains\Application1\Infrastructure\Storage;

class User
{
    private ?int $idUser;
    private ?string $userName;
    private ?string $userLastName;
    private ?int $userBirthday;
    private ?string $login;

    //private static string $storageAddress = '/storage/birthdays.txt';

    public function __construct(int $idUser = null, string $name = null, string $lastName = null, int $birthday = null, string $login = null)
    {
        $this->idUser = $idUser;
        $this->userName = $name;
        $this->userLastName = $lastName;
        $this->userBirthday = $birthday;
        $this->login = $login;
    }

    public function setUserId(int $id_user): void
    {
        $this->idUser = $id_user;
    }

    public function getUserId(): ?int
    {
        return $this->idUser;
    }

    public function setName(string $userName): void
    {
        $this->userName = $userName;
    }

    public function setLastName(string $userLastName): void
    {
        $this->userLastName = $userLastName;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getUserLastName(): string
    {
        return $this->userLastName;
    }

    public function getUserBirthday(): int
    {
        return $this->userBirthday;
    }

    public function setBirthdayFromString(string $birthdayString): void
    {
        $this->userBirthday = strtotime($birthdayString);
    }

    public static function getUserDataByID(int $userID): array
    {
        $userSql = "SELECT * FROM users WHERE id_user = :id";
        $handler = Application::$storage->get()->prepare($userSql);
        $handler->execute(['id' => $userID]);
        return $handler->fetch();
    }

    public static function getAllUsersFromStorage(): array
    {
        $sql = "SELECT * FROM users";

        $handler = Application::$storage->get()->prepare($sql);
        $handler->execute();
        $result = $handler->fetchAll();

        $users = [];

        foreach ($result as $item) {
            $user = new User($item['id_user'], $item['user_name'], $item['user_lastname'], $item['user_birthday_timestamp'], $item['login']);
            $users[] = $user;
        }

        return $users;
    }

    public static function validateRequestDataErrors(): array
    {
        $erorrs = [];


        if (!(
            isset($_POST['name']) && !empty($_POST['name'])
        )) {
            $erorrs[] = 'Не заполнено поле "Имя"';
        } else {
            if (strlen($_POST['name']) > 45) {
                $erorrs[] = "Имя не должно превышать 45 символов";
            }
            if (preg_match('/<([^>]+)>/', $_POST['name'])) {
                $erorrs[] = "Имя не должно содержать спецсимволы";
            }
            if (preg_match('/[0-9]/', $_POST['name'])) {
                $erorrs[] = "Имя не должно содержать цифры";
            }
        }

        if (!(
            isset($_POST['lastname']) && !empty($_POST['lastname'])
        )) {
            $erorrs[] = 'Не заполнено поле "Фамилия"';
        } else {
            if (strlen($_POST['lastname']) > 45) {
                $erorrs[] = "Фамилия не должна превышать 45 символов";
            }
            if (preg_match('/<([^>]+)>/', $_POST['lastname'])) {
                $erorrs[] = "Фамилия не должна содержать спецсимволы";
            }

            if (preg_match('/[0-9]/', $_POST['lastname'])) {
                $erorrs[] = "Фамилия не должна содержать цифры";
            }
        }


        if (!(
            isset($_POST['birthday']) && !empty($_POST['birthday'])
        )) {
            $erorrs[] = 'Не заполнено поле "День рождения"';
        } else {
            if (!preg_match('/^(\d{2}-\d{2}-\d{4})$/', $_POST['birthday'])) {
                $erorrs[] = "День рождения должен быть заполнен в формате ДД-ММ-ГГГГ";
            } else {
                if (strtotime($_POST['birthday']) < -2145916800) {
                    $erorrs[] = "День рождения не должен быть раньше 01-01-1902";
                }
                if ((strtotime(date("d-m-Y")) + 86401) < strtotime($_POST['birthday'])) {
                    $erorrs[] = "День рождения не должен быть позже, чем сегодняшняя дата +1 день";
                }
            }
        }

        if (!isset($_SESSION['csrf_token']) || $_SESSION['csrf_token'] != $_POST['csrf_token']) {
            $erorrs[] = "Не совпадает csrf_token";
        }

        //var_dump($erorrs);
        return $erorrs;
    }

    public function setParamsFromRequestData(): void
    {
        $this->userName = htmlspecialchars($_POST['name']);
        $this->userLastName = htmlspecialchars($_POST['lastname']);
        $this->setBirthdayFromString($_POST['birthday']);
    }

    public function saveToStorage()
    {
        $sql = "INSERT INTO users(user_name, user_lastname, user_birthday_timestamp) VALUES (:user_name, :user_lastname, :user_birthday)";

        $handler = Application::$storage->get()->prepare($sql);
        $handler->execute([
            'user_name' => $this->userName,
            'user_lastname' => $this->userLastName,
            'user_birthday' => $this->userBirthday
        ]);
    }

    public static function exists(int $id): bool
    {
        $sql = "SELECT count(id_user) as user_count FROM users WHERE id_user = :id_user";

        $handler = Application::$storage->get()->prepare($sql);
        $handler->execute([
            'id_user' => $id
        ]);

        $result = $handler->fetchAll();

        if (count($result) > 0 && $result[0]['user_count'] > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateUser(array $userDataArray, int $id_user): void
    {
        //var_dump($userDataArray );
        $sql = "UPDATE users SET ";

        $counter = 0;
        foreach ($userDataArray as $key => $value) {
            $sql .= $key . " = :" . $key;

            if ($counter != count($userDataArray) - 1) {
                $sql .= ",";
            }

            $counter++;
        }
        $sql .= " WHERE id_user = $id_user";
        $handler = Application::$storage->get()->prepare($sql);
        $handler->execute($userDataArray);
    }

    public static function deleteFromStorage(int $user_id): void
    {
        $sql = "DELETE FROM users WHERE id_user = :id_user";

        $handler = Application::$storage->get()->prepare($sql);
        $handler->execute(['id_user' => $user_id]);
    }

    public static function findUserRoles($id_user)
    {
        $rolesSql = "SELECT * FROM user_roles WHERE id_user = :id";

        $handler = Application::$storage->get()->prepare($rolesSql);
        $handler->execute(['id' => $_SESSION['id_user']]);
        return  $handler->fetchAll();
    }
}
