<?php

namespace backend\controllers;

use backend\models\Inscripcion;
use backend\models\search\InscripcionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;
use yii\web\UploadedFile;

/**
 * InscripcionController implements the CRUD actions for Inscripcion model.
 */
class InscripcionController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Inscripcion models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InscripcionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Inscripcion model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Inscripcion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Inscripcion();

        $this->subirArchivo($model);

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Inscripcion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $this->subirArchivo($model);
        
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Inscripcion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model=$this->findModel($id);

        if(file_exists($model->Comprobante_De_pago)){

          unlink($model->Comprobante_De_pago);

        }

        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Inscripcion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Inscripcion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Inscripcion::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }



     
     protected function subirArchivo(Inscripcion $model){
  
    
    if ($model->load($this->request->post()) ) {


        $model->comprobante=UploadedFile::getInstance($model,'comprobante');

        if($model->validate()){

            if($model->comprobante){

                if(file_exists($model->Comprobante_De_pago)){

                 unlink($model->Comprobante_De_pago); 
                }



           $rutaArchivo='uploads/Inscripciones/'.time()."_".$model->comprobante->baseName.".".$model->comprobante->extension;


           if( $model->comprobante->saveAs($rutaArchivo)){

              $model->Comprobante_De_pago=$rutaArchivo;

             }

            }
        }


       if($model->save(false)) {

          return $this->redirect(['index']);

       }

        
            
            }
       

    }


    
}
