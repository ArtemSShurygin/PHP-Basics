<?php

namespace Geekbrains\Application1\Domain\Controllers;

use Geekbrains\Application1\Application\Application;
use Geekbrains\Application1\Application\Render;
use Geekbrains\Application1\Application\Auth;
use Geekbrains\Application1\Domain\Models\User;

class UserController extends AbstractController
{
    protected array $actionsPermissions = [
        'actionHash' => ['admin', 'user'],
        'actionSave' => ['admin'],
        'actionEdit' => ['admin'],
        'actionUpdateUser' => ['admin'],
        'actionUpdate' => ['admin'],
        'actionDelete' => ['admin'],
        'actionUpdateform' => ['admin'],

        'actionIndex' => ['user'],
        'actionAuth' => ['user'],
        'actionLogin' => ['user'],
        'actionLogout' => ['user'],
    ];

    public function actionIndex()
    {
        $users = User::getAllUsersFromStorage();

        $render = new Render();

        if (!$users) {
            return $render->renderPage(
                'user-empty.twig',
                [
                    'title' => 'Список пользователей в хранилище',
                    'message' => "Список пуст или не найден"
                ]
            );
        } else {
            return $render->renderPage(
                'user-index.twig',
                [
                    'title' => 'Список пользователей в хранилище',
                    'users' => $users
                ]
            );
        }
    }

    public function actionEdit(): string
    {
        $render = new Render();

        return $render->renderPageWithForm(
            'user-form-edit.twig',
            [
                'title' => 'Форма создания пользователя'
            ]
        );
    }

    public function actionUpdateform(): string
    {
        $render = new Render();
        $userData = [];
        $userData['userId'] = $_GET['user_id'];
        $userData['userName'] = $_GET['user_name'];
        $userData['userLastName'] = $_GET['user_last_name'];
        $userData['userBirthday'] = $_GET['user_birthday'];
        //var_dump($userData);

        return $render->renderPageWithForm(
            'user-form-update.twig',
            [
                'title' => 'Форма изменения пользователя',
                'userData' => $userData
            ]
        );
    }

    public function actionSave(): string
    {   $erors=User::validateRequestDataErrors();
        if (empty($erors)) {
            $user = new User();
            $user->setParamsFromRequestData();
            $user->saveToStorage();

            $render = new Render();

            return $render->renderPage(
                'user-created.twig',
                [
                    'title' => 'Пользователь создан',
                    'message' => "Создан пользователь " . $user->getUserName() . " " . $user->getUserLastName()
                ]
            );
        } else {
            $render = new Render();
            return $render->renderPage(
                'error-validation.twig',
                [
                    "errors" => $erors
                ]
            );
            //throw new \Exception("Переданные данные некорректны");
        }
    }

    public function actionUpdate(): string
    {
        if (User::exists($_POST['user_id'])) {
            $erors = User::validateRequestDataErrors();
            if (empty($erors)) {
                $user = new User();
                $user->setUserId($_POST['user_id']);

                $arrayData = [];

                if (isset($_POST['name']))
                    $arrayData['user_name'] = $_POST['name'];

                if (isset($_POST['lastname'])) {
                    $arrayData['user_lastname'] = $_POST['lastname'];
                }

                if (isset($_POST['birthday'])) {
                    //$arrayData['user_birthday_timestamp'] = $_POST['birthday'];
                    $arrayData['user_birthday_timestamp'] = strtotime($_POST['birthday']);
                }
            } else {
                $render = new Render();
                return $render->renderPage(
                    'error-validation.twig',
                    [
                        "errors" => $erors
                    ]
                );
                //throw new \Exception("Переданные данные некорректны");
            }

            $user->updateUser($arrayData,  $user->getUserId());
        } else {
            throw new \Exception("Пользователь не существует");
        }

        $render = new Render();
        return $render->renderPage(
            'user-created.twig',
            [
                'title' => 'Пользователь обновлен',
                'message' => "Обновлен пользователь " . $user->getUserId()
            ]
        );
    }

    public function actionDelete(): string
    {
        if (User::exists($_GET['user_id'])) {
            User::deleteFromStorage($_GET['user_id']);

            $render = new Render();

            return $render->renderPage(
                'user-removed.twig',
                []
            );
        } else {
            throw new \Exception("Пользователь не существует");
        }
    }

    public function actionAuth(): string
    {
        $render = new Render();

        return $render->renderPageWithForm(
            'user-auth.twig',
            [
                'title' => 'Форма логина'
            ]
        );
    }

    public function actionHash(): string
    {
        return Auth::getPasswordHash($_GET['pass_string']);
    }

    public function actionLogin(): string
    {
        $result = false;

        if (isset($_POST['login']) && isset($_POST['password'])) {
            $result = Application::$auth->proceedAuth($_POST['login'], $_POST['password']);
        }

        if (!$result) {
            $render = new Render();

            return $render->renderPageWithForm(
                'user-auth.twig',
                [
                    'title' => 'Форма логина',
                    'auth_success' => false,
                    'auth_error' => 'Неверные логин или пароль'
                ]
            );
        } else {
            header('Location: /');
            return "";
        }
    }

    public function actionLogout(): void
    {
        session_destroy();
        unset($_SESSION['user_name']);
        header("Location: /");
        die();
    }
}
