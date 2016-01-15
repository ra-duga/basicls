<?php

namespace app\controllers;

use Yii;
use app\models\Comission;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComissionController implements the CRUD actions for Comission model.
 */
class ComissionController extends Controller
{
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
     * Lists all Comission models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Comission::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Comission model.
     * @param integer $id
     * @param integer $objects_id
     * @param integer $agents_id
     * @return mixed
     */
    public function actionView($id, $objects_id, $agents_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $objects_id, $agents_id),
        ]);
    }

    /**
     * Creates a new Comission model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Comission();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'objects_id' => $model->objects_id, 'agents_id' => $model->agents_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Comission model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $objects_id
     * @param integer $agents_id
     * @return mixed
     */
    public function actionUpdate($id, $objects_id, $agents_id)
    {
        $model = $this->findModel($id, $objects_id, $agents_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'objects_id' => $model->objects_id, 'agents_id' => $model->agents_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Comission model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $objects_id
     * @param integer $agents_id
     * @return mixed
     */
    public function actionDelete($id, $objects_id, $agents_id)
    {
        $this->findModel($id, $objects_id, $agents_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Comission model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $objects_id
     * @param integer $agents_id
     * @return Comission the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $objects_id, $agents_id)
    {
        if (($model = Comission::findOne(['id' => $id, 'objects_id' => $objects_id, 'agents_id' => $agents_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
