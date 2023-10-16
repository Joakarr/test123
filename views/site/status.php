<?php

use app\models\User;
use http\Url;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

foreach ($modeluser as $model){
        echo
        $model -> username,
        $model -> email,
        $model -> status;

}
?>

<a class="btn btn-primary" href="<?=Url::to(['/site/userlist', 'id' => $model->id])?>">
        Deactivate
</a>


