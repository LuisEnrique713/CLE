<?php

namespace backend\controllers;
use Yii;
use backend\models\Perfil;
use backend\models\search\PerfilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use backend\models\search\UserSearch;
use common\models\PermisosHelpers;
use common\models\RegistrosHelpers;
use backend\models\Calificaciones;
use backend\models\search\CalificacionesSearch;




/**
 * PerfilController implements the CRUD actions for Perfil model.
 */
class PerfilController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
            return [
                'access' => [
                    'class' => \yii\filters\AccessControl::className(),
                    'only' => ['index', 'view','create', 'update', 'delete'],
                    'rules' => [
                            [
                            'actions' => ['index', 'view','create', 'update', 'delete'],
                            'allow' => true,
                            'roles' => ['@'],
                            ],
                        
                        ],
                    ],
                'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                        ],
                    ],
            ];
    }

    /**
     * Lists all Perfil models.
     *
     * @return string
     */
    public function actionIndex()

    {
        
        

        $searchModel = new PerfilSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Perfil model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        
        
        if ($ya_existe = RegistrosHelpers::userTiene('perfil', )) {
            return $this->render('view', [
                'model' => $this->findModel($ya_existe),
            ]);
        } else {
            return $this->redirect(['create']);
        }
    }

    /**
     * Creates a new Perfil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Perfil;
            
        $model->user_id = \Yii::$app->user->identity->id;      
        
        if ($ya_existe = RegistrosHelpers::userTiene('perfil')) {

            return $this->render('view', [

                    'model' => $this->findModel($ya_existe),

                ]);
        
        } elseif ($model->load(Yii::$app->request->post()) && $model->save()){
                            
            return $this->redirect(['create']);
                            
        } else {
                    
            return $this->render('create', [

                    'model' => $model,

                    ]);
        }
    }

    /**
     * Updates an existing Perfil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if($model =  Perfil::find()->where(['user_id' => 
        Yii::$app->user->identity->id])->one()) {
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            
            return $this->redirect(['create']);
        
        } else {
            
        return $this->render('update', [
                'model' => $model, 
            ]);
        }
    
    } else {
            
        throw new NotFoundHttpException('No Existe el Perfil.');
            
    }
    }

    /**
     * Deletes an existing Perfil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model =  Perfil::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
                
        $this->findModel($model->id)->delete();
            
        return $this->redirect(['create']);
    }

    /**
     * Finds the Perfil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Perfil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Perfil::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

