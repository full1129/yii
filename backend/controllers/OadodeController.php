<?php

namespace backend\controllers;

use Yii;
use app\models\Oadode;
use app\models\DescriptionOfGoods;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OadodeController implements the CRUD actions for Oadode model.
 */
class OadodeController extends Controller
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
     * Lists all Oadode models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Oadode::find(),
        ]);

        $dataProviderDescription = new ActiveDataProvider([
            'query' => DescriptionOfGoods::find(),
        ]);
            
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'dataProviderDescription' => $dataProviderDescription
        ]);
    }

    /**
     * Displays a single Oadode model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $modelDescription = new DescriptionOfGoods();
        $posts = Yii::$app->request->post();
        if (!empty(Yii::$app->request->post())) {
            $posts['DescriptionOfGoods']['application_id'] = $posts['Oadode']['application_id'];
            $posts['DescriptionOfGoods']['customer_id'] = $posts['Oadode']['customer_id'];
            $posts['DescriptionOfGoods']['user_id'] = $posts['Oadode']['user_id'];
        }
        
        return $this->render('view', [
            'model' => $model,
            'modelDescription' => $modelDescription
        ]);
    }

    /**
     * Creates a new Oadode model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Oadode();
        $modelDescription = new DescriptionOfGoods();
        $posts = Yii::$app->request->post();
        if (!empty(Yii::$app->request->post())) {
            $posts['DescriptionOfGoods']['application_id'] = $posts['Oadode']['application_id'];
            $posts['DescriptionOfGoods']['customer_id'] = $posts['Oadode']['customer_id'];
            $posts['DescriptionOfGoods']['user_id'] = $posts['Oadode']['user_id'];
        }
        
        if ($model->load($posts) && $model->save()) {
            if ($modelDescription->load($posts) && $modelDescription->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'modelDescription' =>$modelDescription
        ]);
    }

    /**
     * Updates an existing Oadode model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $modelDescription = new DescriptionOfGoods();
        $posts = Yii::$app->request->post();
        if (!empty(Yii::$app->request->post())) {
            $posts['DescriptionOfGoods']['application_id'] = $posts['Oadode']['application_id'];
            $posts['DescriptionOfGoods']['customer_id'] = $posts['Oadode']['customer_id'];
            $posts['DescriptionOfGoods']['user_id'] = $posts['Oadode']['user_id'];
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'modelDescription' =>$modelDescription
        ]);
    }

    /**
     * Deletes an existing Oadode model.
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
     * Finds the Oadode model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Oadode the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Oadode::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    protected function finddescriptionModel($id)
    {
        if (($model = DescriptionOfGoods::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
