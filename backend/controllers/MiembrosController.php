<?php

namespace backend\controllers;

use Yii;
use backend\models\Miembros;
use backend\models\MiembrosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MiembrosController implements the CRUD actions for Miembros model.
 */
class MiembrosController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
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
     * Lists all Miembros models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new MiembrosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Miembros model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Miembros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Miembros();

        if ($model->load(Yii::$app->request->post())) {
            //$rnd = rand(0,99999);
            $imageName = $model->cedula;
            
            $model->foto = UploadedFile::getInstance($model, 'foto');
            $model->foto->saveAs('imagenes/miembros/' . $imageName . '.' . $model->foto->extension);
            $model->foto = 'imagenes/miembros/' . $imageName . '.' . $model->foto->extension;
            $model->hoja_de_vida = UploadedFile::getInstance($model, 'hoja_de_vida');
            $model->hoja_de_vida->saveAs('imagenes/miembros/' . $imageName . '.' . $model->hoja_de_vida->extension);
            $model->hoja_de_vida = 'imagenes/miembros/' . $imageName . '.' . $model->hoja_de_vida->extension;


            $model->fecha_nacimiento = date('Y-m-d');
            $model->save();

            return $this->redirect(['view', 'id' => $model->id_miembro]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Miembros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $imageName = $model->cedula;
            if ($model->foto = UploadedFile::getInstance($model, 'foto')) {
                $model->foto->saveAs('imagenes/miembros/' . $imageName . '.' . $model->foto->extension);
                $model->foto = 'imagenes/miembros/' . $imageName . '.' . $model->foto->extension;
            }
            //$model->fecha_nacimiento = date('dd-M-yyyy');
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_miembro]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Miembros model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $model = $this->findModel($id);
        @unlink($model->foto);
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Miembros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Miembros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Miembros::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
