<?php

namespace common\components;

use Yii;
use common\models\Dokumen;
use common\components\fpdf\FPDF;

class FilePdf {

    protected function documenData($nama_file, $lokasi, $jenis_file){
        $model = new Dokumen();
        $model->unique_key = Yii::$app->security->generateRandomString();
        $model->nama_file = $nama_file;
        $model->lokasi_file = $lokasi;
        $model->jenis_file = $jenis_file;
        $model->save();
        return ['unique_key' => $model->unique_key];
    }

    public static function generatePdf($jenis_dokumen, $folder,$anon)
    {
        $nama_file = md5(time()).".pdf";
        $path = Yii::getAlias("@common")."/document/{$folder}/{$nama_file}";
        $pdf = new FPDF();
        $pdf = $anon($pdf);
        $pdf->Output($path);
        return (new self)->documenData($nama_file, $path, $jenis_dokumen);
        exit();
    }

    public static function priview($k){
        $model = Dokumen::find()->select(['lokasi_file', 'nama_file'])->where(['unique_key'=>$k])->one();
        $arsip_path = $model->lokasi_file;
        $response = Yii::$app->getResponse();
        return $response->sendFile($arsip_path, $model->nama_file, [
                'mimeType' => "application/pdf",
                'inline' => true
        ]);
    }
} 