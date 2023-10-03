<?php

namespace app\controllers;

use yii\web\Controller;

class NegrController extends Controller
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

    public function actionAbout2()
    {
        return $this->render('about2',[
            "First1" => 'negroid1'
        ]);
    }
}
