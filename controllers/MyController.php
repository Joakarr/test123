<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function behaviors()
    {
        return [
        ];
    }


    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex($fio = "Укажите ФИО")
    {
        return $fio;
    }

    public function actionAbout()
    {
        return $this->render('about1',[
            'Firts' => "negr"
        ]);
    }
}
