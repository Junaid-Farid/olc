<?php

namespace app\controllers;

use Yii;
use app\models\Instructor;
use app\models\search\Instructor as InstructorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * InstructorController implements the CRUD actions for Instructor model.
 */
class InstructorController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index',
                            'create', 
                            'update', 
                            'view', 
                            'instructor', 
                            'profile', 
                            'policies', 
                            'courseware',
                            'libraries',
                            'assessments',
                            'libraryDigitalContent'
                        ],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['instructor'],
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
     * Lists all Instructor models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new InstructorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Instructor model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Instructor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Instructor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Instructor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Instructor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Instructor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Instructor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Instructor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionInstructor() {
        return $this->render('instructor');
    }
    public function actionProfile() {
        return $this->render('profile');
    }
    public function actionPolicies() {
        return $this->render('policies');
    }
    public function actionCourseware() {
        return $this->render('courseware');
    }
    public function actionLibraries() {
        return $this->render('libraries');
    }
    public function actionAssessments() {
        return $this->render('assessments');
    }
    public function actionLibrarydigitalcontent() {
        return $this->render('libraryDigitalContent');
    }
    
    public function actionSubmissionqueue() {
        return $this->render('submissionQueue');
    }
    public function actionGradebook() {
        return $this->render('gradeBook');
    }
    public function actionGraded() {
        return $this->render('graded');
    }
    public function actionEditgradedassignment() {
        return $this->render('editGradedAssignment');
    }
    
    public function actionEcoursefacilitation() {
        return $this->render('eCourseFacilitation');
    }
    public function actionEcoursefacilitated() {
        return $this->render('eCourseFacilitated');
    }
    public function actionEcoursecohortsummery() {
        return $this->render('eCourseCohortSummery');
    }
}
