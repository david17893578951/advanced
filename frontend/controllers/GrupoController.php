<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Grupo;
use frontend\models\GrupoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * GrupoController implements the CRUD actions for Grupo model.
 */
class GrupoController extends Controller
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
     * Lists all Grupo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GrupoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Grupo model.
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
     * Creates a new Grupo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
   public function actionCreate()
    {
        $model = new Grupo();

        if ($model->load(Yii::$app->request->post()) ) {
            $rnd = rand(0,99999);
            $imageName = $rnd;
            $model->logo = UploadedFile::getInstance($model, 'logo');
            $model->logo->saveAs('imagenes/grupos/' . $imageName . '.' . $model->logo->extension);
            $model->logo = 'imagenes/grupos/' . $imageName . '.' . $model->logo->extension;
            
            
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_grupo]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Grupo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
      public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {
            $imageName = $model->id_grupo;
            if ($model->logo = UploadedFile::getInstance($model, 'logo')) {
                $model->logo->saveAs('imagenes/grupos/' . $imageName . '.' . $model->logo->extension);
                
                $model->logo = 'imagenes/grupos/' . $imageName . '.' . $model->logo->extension;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id_grupo]);
        } else {
            @unlink($model->logo);
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Deletes an existing Grupo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
   public function actionDelete($id)
    {$model = $this->findModel($id);
    @unlink($model->logo);
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    /**
     * Finds the Grupo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Grupo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Grupo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
