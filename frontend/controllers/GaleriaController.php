<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Galeria;
use frontend\models\GaleriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * GaleriaController implements the CRUD actions for Galeria model.
 */
class GaleriaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Galeria models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GaleriaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Galeria model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Galeria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
        public function actionCreate() {
        $model = new Galeria();

        if ($model->load(Yii::$app->request->post())) {
            $rnd1 = rand(0, 99999);
            $rnd2 = rand(0, 99999);
            $rnd3 = rand(0, 99999);
            $rnd4 = rand(0, 99999);
            $rnd5 = rand(0, 99999);
            $otro = $model->id_grupo;
            $imageName1 = $rnd1;
            $imageName2 = $rnd2;
            $imageName3 = $rnd3;
            $imageName4 = $rnd4;
            $imageName5 = $rnd5;
            $model->img1 = UploadedFile::getInstance($model, 'img1');
            $model->img1->saveAs('imagenes/galeria/' . $imageName1 . '_' . $otro . '.' . $model->img1->extension);
            $model->img1 = 'imagenes/galeria/' . $imageName1 . '_' . $otro . '.' . $model->img1->extension;
            $model->img2 = UploadedFile::getInstance($model, 'img2');
            $model->img2->saveAs('imagenes/galeria/' . $imageName2 . '_' . $otro . '.' . $model->img2->extension);
            $model->img2 = 'imagenes/galeria/' . $imageName2 . '_' . $otro . '.' . $model->img2->extension;
            $model->img3 = UploadedFile::getInstance($model, 'img3');
            $model->img3->saveAs('imagenes/galeria/' . $imageName3 . '_' . $otro . '.' . $model->img3->extension);
            $model->img3 = 'imagenes/galeria/' . $imageName3 . '_' . $otro . '.' . $model->img3->extension;
            $model->img4 = UploadedFile::getInstance($model, 'img4');
            $model->img4->saveAs('imagenes/galeria/' . $imageName4 . '_' . $otro . '.' . $model->img4->extension);
            $model->img4 = 'imagenes/galeria/' . $imageName4 . '_' . $otro . '.' . $model->img4->extension;
            $model->img5 = UploadedFile::getInstance($model, 'img5');
            $model->img5->saveAs('imagenes/galeria/' . $imageName5 . '_' . $otro . '.' . $model->img5->extension);
            $model->img5 = 'imagenes/galeria/' . $imageName5 . '_' . $otro . '.' . $model->img5->extension;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id_galeria]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }
    /**
     * Updates an existing Galeria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
   public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $rnd1 = rand(0, 99999);
            $rnd2 = rand(0, 99999);
            $rnd3 = rand(0, 99999);
            $rnd4 = rand(0, 99999);
            $rnd5 = rand(0, 99999);


            $otro = $model->id_grupo;
            $imageName1 = $rnd1;
            $imageName2 = $rnd2;
            $imageName3 = $rnd3;
            $imageName4 = $rnd4;
            $imageName5 = $rnd5;
            

            if ($model->img1 = UploadedFile::getInstance($model, 'img1')) {
                
                $model->img1->saveAs('imagenes/galeria/' . $imageName1 . '_' . $otro . '.' . $model->img1->extension);
                
                $model->img1 = 'imagenes/galeria/' . $imageName1 . '_' . $otro . '.' . $model->img1->extension;
            }
            if ($model->img2 = UploadedFile::getInstance($model, 'img2')) {

                $model->img2->saveAs('imagenes/galeria/' . $imageName2 . '_' . $otro . '.' . $model->img2->extension);
                 @unlink($model->img2);
                $model->img2 = 'imagenes/galeria/' . $imageName2 . '_' . $otro . '.' . $model->img2->extension;
            }
            if ($model->img3 = UploadedFile::getInstance($model, 'img3')) {

                $model->img3->saveAs('imagenes/galeria/' . $imageName3 . '_' . $otro . '.' . $model->img3->extension);
                $model->img3 = 'imagenes/galeria/' . $imageName3 . '_' . $otro . '.' . $model->img3->extension;
            }
            if ($model->img4 = UploadedFile::getInstance($model, 'img4')) {

                $model->img4->saveAs('imagenes/galeria/' . $imageName4 . '_' . $otro . '.' . $model->img4->extension);
                $model->img4 = 'imagenes/galeria/' . $imageName4 . '_' . $otro . '.' . $model->img4->extension;
            }
            if ($model->img5 = UploadedFile::getInstance($model, 'img5')) {

                $model->img5->saveAs('imagenes/galeria/' . $imageName5 . '_' . $otro . '.' . $model->img5->extension);
                $model->img5 = 'imagenes/galeria/' . $imageName5 . '_' . $otro . '.' . $model->img5->extension;
            }

            $model->save();
                
           
            return $this->redirect(['view', 'id' => $model->id_galeria]);
        } else {
            @unlink($model->img1);
            @unlink($model->img2);
            @unlink($model->img3);
            @unlink($model->img4);
            @unlink($model->img5);
            return $this->render('update', [
                        'model' => $model,
                
            ]);
        }
    }

    /**
     * Deletes an existing Galeria model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
 public function actionDelete($id) {
        $model = $this->findModel($id);
        @unlink($model->img1);
        @unlink($model->img2);
        @unlink($model->img3);
        @unlink($model->img4);
        @unlink($model->img5);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Galeria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Galeria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Galeria::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
