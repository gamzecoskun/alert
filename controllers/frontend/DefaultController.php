<?php

namespace kouosl\alert\controllers\frontend;

use Yii;
use kouosl\alert\models\Alert;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
  /**
   * {@inheritdoc}
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
   * Lists all Alert models.
   * @return mixed
   */
  public function actionIndex()
  {
      $dataProvider = new ActiveDataProvider([
          'query' => Alert::find(),
      ]);

      return $this->render('index', [
          'dataProvider' => $dataProvider,
      ]);
  }

  /**
   * Displays a single Alert model.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionView($id)
  {
      return $this->render('view', [
          'model' => $this->findModel($id),
      ]);
  }

  /**
   * Creates a new Alert model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   * @return mixed
   */
  public function actionCreate()
  {
      $model = new Alert();

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->id]);
      }

      return $this->render('create', [
          'model' => $model,
      ]);
  }

  /**
   * Updates an existing Alert model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionUpdate($id)
  {
      $model = $this->findModel($id);

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->id]);
      }

      return $this->render('update', [
          'model' => $model,
      ]);
  }

  /**
   * Deletes an existing Alert model.
   * If deletion is successful, the browser will be redirected to the 'index' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionDelete($id)
  {
      $this->findModel($id)->delete();

      return $this->redirect(['index']);
  }

  /**
   * Finds the Alert model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param integer $id
   * @return Alert the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($id)
  {
      if (($model = Alert::findOne($id)) !== null) {
          return $model;
      }

      throw new NotFoundHttpException('The requested page does not exist.');
  }
}
