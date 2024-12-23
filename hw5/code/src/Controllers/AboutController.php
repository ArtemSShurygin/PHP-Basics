<?php

namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Models\Phone;
use Geekbrains\Application1\Render;

class AboutController
{
    public function actionIndex() {
        $phone = (new Phone())->getPhone();
        $render = new Render();

        return $render->renderPage('about.twig', [
            'title' => 'О нас',
            "time" => date('d-m-Y H:i:s'),
            'phone' => $phone
        ]);
    }
}