<?php

namespace app\controllers;

use Yii;
use app\models\Worker;
use app\models\WorkerSearch;
use app\models\IsWorking;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;


/**
 * WorkerController implements the CRUD actions for Worker model.
 */
class WorkerController extends Controller
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
    
    private function authoriseTest(){
        if (Yii::$app->user->isGuest) 
    {
        $url = Url::home(true);
        $this->redirect($url);
    }}

    /**
     * Lists all Worker models.
     * @return mixed
     */
    public function actionIndex()
    {
    
    $this->authoriseTest();
    
        $searchModel = new WorkerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
			'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Worker model.
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
     * Creates a new Worker model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $adding = new IsWorking();
        $model = new Worker();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($adding->load(Yii::$app->request->post()) && $adding->validate()) {
            $per = $adding->toAdd;
            if ($per != '0'){
                $url = Url::toRoute(['magazine/createw', 'worker_id' => $model->id]);
                return $this->redirect($url);
            }} 
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'adding' => $adding,
            ]);
        }
    }

    /**
     * Updates an existing Worker model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
    
        $adding = new IsWorking();
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        if ($adding->load(Yii::$app->request->post()) && $adding->validate()) {
            $per = $adding->toAdd;
            if ($per != '0'){
                $url = Url::toRoute(['magazine/createw', 'worker_id' => $id]);
                return $this->redirect($url);
            }} 
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'adding' => $adding,
            ]);
        }
    }

    /**
     * Deletes an existing Worker model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Worker model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Worker the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Worker::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
