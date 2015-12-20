<?php

namespace app\controllers;

use Yii;
use app\models\Student;
use app\models\search\Student as StudentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudentController implements the CRUD actions for Student model.
 */
class StudentController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Student models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Student model.
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
     * Creates a new Student model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Student();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Student model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
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
     * Deletes an existing Student model.
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
     * Finds the Student model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Student the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Student::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function actionStudent() {
        return $this->render('student');
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
    
    public function actionMyeduplansummery(){
        return $this->render('myEduPlanSummery');
    }
    public function actionInvoice(){
        return $this->render('invoice');
    }
    public function actionTaxform(){
        return $this->render('taxForm');
    }
    public function actionPaymenthistory(){
        return $this->render('paymentHistory');
    }
    public function actionInvoicesummery(){
        return $this->render('invoiceSummery');
    }
    
    public function actionProgramdescription(){
        return $this->render('programDescription');
    }
    public function actionProgramprogress(){
        return $this->render('programProgress');
    }
    
    public function actionLeadershipassignment(){
        return $this->render('leadershipAssignment');
    }
    public function actionGradedassignmentcollegepreparation(){
        return $this->render('gradedassignmentCollegepreparation');
    }
    public function actionGradedorientation(){
        return $this->render('gradedOrientation');
    }
    public function actionVocationassignment(){
        return $this->render('vocationAssignment');
    }
    public function actionSubmitassignment(){
        return $this->render('submitAssignment');
    }
    
    public function actionOfficialtranscript(){
        return $this->render('officialTranscript');
    }
    public function actionEcoursesurvey(){
        return $this->render('eCourseSurvey');
    }
    public function actionInstructorsurvey(){
        return $this->render('instructorSurvey');
    }
    public function actionProgramsurvey(){
        return $this->render('programSurvey');
    }
    public function actionResidencysurvey(){
        return $this->render('residencySurvey');
    }
    public function actionTechnologysurvey(){
        return $this->render('technologySurvey');
    }
    public function actionLeadershipprogram(){
        return $this->render('leadershipProgram');
    }
     public function actionVocationalprogram(){
        return $this->render('vocationalProgram');
    }
    
    public function actionSupportassignment(){
        return $this->render('supportAssignment');
    }
    public function actionSupportemail(){
        return $this->render('supportEmail');
    }
    public function actionSupportfaqs(){
        return $this->render('supportFaqs');
    }
    public function actionSupportforum(){
        return $this->render('supportForum');
    }
    public function actionSupporttewtopic(){
        return $this->render('supportNewTopic');
    }
    public function actionSupporttickets(){
        return $this->render('supportTickets');
    }
    public function actionSupportnewticket(){
        return $this->render('supportNewTicket');
    }
    
    
    public function actionEcourseprogress(){
        return $this->render('eCourseProgress');
    }
    public function actionEcoursecompleted(){
        return $this->render('ecourseCompleted');
    }
    
    public function actionProgressemodule(){
        return $this->render('progressEmodule');
    }
    public function actionProgressexams(){
        return $this->render('progressExams');
    }
    public function actionProgresseclass(){
        return $this->render('progressEclass');
    }
    public function actionProgressprojects(){
        return $this->render('progressProjects');
    }
    public function actionProgressforum(){
        return $this->render('progressForum');
    }
    public function actionPersonaltransformation(){
        return $this->render('personalTransformation');
    }
    public function actionLeadershipdescription(){
        return $this->render('leadershipDescription');
    }
    public function actionLeadershipprogress(){
        return $this->render('leadershipProgress');
    }
    public function actionFacultyorientation(){
        return $this->render('facultyOrientation');
    }
    public function actionFacultydescription(){
        return $this->render('facultyDescription');
    }
    public function actionFacultyprogress(){
        return $this->render('facultyProgress');
    }
    public function actionStudentdescription(){
        return $this->render('studentDescription');
    }
    public function actionStudentprogress(){
        return $this->render('studentProgress');
    }
    public function actionIdtdescription(){
        return $this->render('idtDescription');
    }
    public function actionIdtprogress(){
        return $this->render('idtProgress');
    }
    public function actionDmtdescription(){
        return $this->render('dmtDescription');
    }
    public function actionDmtprogress(){
        return $this->render('dmtProgress');
    }
    public function actionOrientation(){
        return $this->render('orientation');
    }
    public function actionCollegeprepartion(){
        return $this->render('collegePrepartion');
    }
    
}
