<?php

namespace Geekbrains\Application1\Domain\Controllers;
use Geekbrains\Application1\Domain\Models\User;

use Geekbrains\Application1\Application\Application;


class AbstractController
{

    protected array $actionsPermissions = [];

    public function getUserRoles(): array
    {
        $roles = [];
        $roles[] = "user";
        if (isset($_SESSION['id_user'])) {
            $userRoles = User::findUserRoles($_SESSION['id_user']);

            if(!empty($userRoles)){
                foreach($userRoles as $role){
                    $roles[] = $role['role'];
                }
            }
        }
        //var_dump($roles);
        return $roles;
    }

    public function getActionsPermissions(string $methodName): array
    {
        return isset($this->actionsPermissions[$methodName]) ? $this->actionsPermissions[$methodName] : [];
    }
}
