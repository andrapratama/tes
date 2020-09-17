<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TaPelanggan */
?>
<div class="ta-pelanggan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'alamat',
            'no_id',
            'no_telp',
        ],
    ]) ?>

</div>
