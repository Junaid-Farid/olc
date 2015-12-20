<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'index'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogin() {
        $this->layout = 'login';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $role = Yii::$app->user->identity->getRole(Yii::$app->user->id);
            if($role=="instructor"){
                $url=Yii::$app->urlManager->createUrl("instructor/instructor");
                $this->redirect($url);
            }else if($role=="admin"){
                $url=Yii::$app->urlManager->createUrl("site/dashboard");
                $this->redirect($url);
            }else if($role=="student"){
                $url=Yii::$app->urlManager->createUrl("student/student");
                $this->redirect($url);
            }else{
                return $this->goBack();
            }
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    public function actionAbout() {
        return $this->render('about');
    }

    public function actionConfigureprograms() {
        return $this->render('configurePrograms');
    }

    public function actionEditprograms() {
        return $this->render('editPrograms');
    }

    public function actionAppmanualentry() {
        return $this->render('appManualEntry');
    }

    public function actionEditappfaculty() {
        return $this->render('editAppFaculty');
    }

    public function actionConfigurearchive() {
        return $this->render('configureArchive');
    }

    public function actionFacultyprogram() {
        return $this->render('facultyProgram');
    }

    public function actionFacultyapp() {
        return $this->render('facultyApp');
    }

    public function actionUserconfig() {
        return $this->render('userConfig');
    }

    public function actionUserapplication() {
        return $this->render('userApplication');
    }

    public function actionConfigaccount() {
        return $this->render('configAccount');
    }

    public function actionEmptypage() {
        return $this->render('emptyPage');
    }

    public function actionDashboardcreate() {
        return $this->render('dashboardCreate');
    }

    public function actionDashboarddefault() {
        return $this->render('dashboardDefault');
    }

    public function actionDashboardusers() {
        return $this->render('dashboardUsers');
    }

    public function actionDashboardpolicy() {
        return $this->render('dashboardPolicy');
    }

    public function actionDashboardcourse() {
        return $this->render('dashboardCourse');
    }

    public function actionEcoursecreate() {
        return $this->render('ecourseCreate');
    }
    public function actionEcourseedit()
    {
        return $this->render('ecourseEdit');
    }
    public function actionEcourseview()
    {
        return $this->render('ecourseView');
    }

    public function actionEcoursearchive() {
        return $this->render('ecourseArchive');
    }

    public function actionProgramcreate() {
        return $this->render('programCreate');
    }

    public function actionProgramview() {
        return $this->render('programView');
    }

    public function actionProgramarchive() {
        return $this->render('programArchive');
    }

    public function actionProgramoption() {
        return $this->render('programOption');
    }

    public function actionConfigureapplications() {
        return $this->render('configureApplications');
    }

    public function actionDashboard() {
        return $this->render('dashboard');
    }

    public function actionStudent() {
        return $this->render('student');
    }

    public function actionInstructor() {
        return $this->render('instructor');
    }

    public function actionLibrarydigitalcontent() {
        return $this->render('libraryDigitalContent');
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

    public function actionTranscriptcreate() {
        return $this->render('transcriptCreate');
    }

    public function actionTranscriptarchive() {
        return $this->render('transcriptArchive');
    }

    public function actionTranscriptusers() {
        return $this->render('transcriptUsers');
    }

    public function actionMyaccountcreate() {
        return $this->render('myaccountCreate');
    }

    public function actionMyaccountusers() {
        return $this->render('myaccountUsers');
    }

    public function actionMyaccountplan() {
        return $this->render('myaccountPlan');
    }

    public function actionAssignmentcreate() {
        return $this->render('assignmentCreate');
    }

    public function actionAssignmentview() {
        return $this->render('assignmentView');
    }

    public function actionAssignmentarchive() {
        return $this->render('assignmentArchive');
    }

    public function actionAssignmentedit() {
        return $this->render('assignmentEdit');
    }

    public function actionDashboardedituser() {
        return $this->render('dashboardEditUser');
    }

    public function actionDashboardlibraries() {
        return $this->render('dashboardLibraries');
    }

    public function actionDashboardassessments() {
        return $this->render('dashboardAssessments');
    }

    public function actionFaqcreate() {
        return $this->render('faqCreate');
    }

    public function actionFaqarchive() {
        return $this->render('faqArchive');
    }

    public function actionFaqview() {
        return $this->render('faqView');
    }

    public function actionFaqedit() {
        return $this->render('faqEdit');
    }

    public function actionFeedbackedit() {
        return $this->render('feedbackEdit');
    }

    public function actionFeedbackarchive() {
        return $this->render('feedbackArchive');
    }

    public function actionFeedbackview() {
        return $this->render('feedbackView');
    }

    public function actionProgramedit() {
        return $this->render('programEdit');
    }

    public function actionTranscriptedit() {
        return $this->render('transcriptEdit');
    } 
    public function actionFacultyapplication(){
        return $this->render('facultyApplication');
    }
    public function actionFeedbackcreate(){
        return $this->render('feedbackCreate');
    }
    public function actionMyaccounteditplan(){
        return $this->render('myaccountEditPlan');
    }
    public function actionDashboardcourswareedit(){
        return $this->render('dashboardCourseWareEdit');
    }
    public function actionDashboardcoursemodulepro(){
        return $this->render('dashboardCourseModulePro');
    }
    public function actionDashboardcourseclasspro(){
        return $this->render('dashboardCourseClassPro');
    }
    
    //added by Junaid Ahmed
    public function actionTestView() {
        return $this->render('testView');
    }

    public function actionEcoursefacilitation() {
        return $this->render('ecourseFacilitation');
    }

    public function actionEcoursefacilitated() {
        return $this->render('ecourseFacilitated');
    }

    public function actionEcoursecohortsummery() {
        return $this->render('ecourseCohortSummery');
    }
    public function actionGradeassignment() {
        return $this->render('gradeAssignment');
    }
    public function actionGradedgradeassignment() {
        return $this->render('gradedGradeAssignment');
    }
    public function actionEditgradeassignment() {
        return $this->render('editGradeAssignment');
    }
    public function actionGradebook() {
        return $this->render('gradeBook');
    }
    public function actionEcoursecompleted(){
        return $this->render('ecourseCompleted');
    }
    public function actionEcourseinprogess(){
        return $this->render('ecourseInProgress');
    }
    public function actionGradedassignmentleadership(){
        return $this->render('gradedAssignmentLeadership');
    } 
    public function actionGradedassignmentvocation(){
        return $this->render('gradedAssignmentVocation');
    }
    public function actionPaymenthistory(){
        return $this->render('paymentHistory');
    }
    public function actionMyaccountinvoices(){
        return $this->render('myAccountInvoices');
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
    public function actionSupportstartnewticket(){
        return $this->render('supportStartNewTicket');
    }
    public function actionSupportstartnewtopic(){
        return $this->render('supportStartNewTopic');
    }
    public function actionOfficialtranscriptrequest(){
        return $this->render('officialTranscriptRequest');
    }
    public function actionSubmitassignment(){
        return $this->render('submitAssignment');
    }
    public function actionMyaccountinvoicesummery(){
        return $this->render('myAccountInvoiceSummery');
    }
    public function actionSupportforum(){
        return $this->render('supportForum');
    }
    public function actionSupporttickects(){
        return $this->render('supportTickets');
    }
    public function actionFeedbackecourse(){
        return $this->render('feedBackEcourse');
    }
    public function actionFeedbackinstructor(){
        return $this->render('feedbackInstructor');
    }
    public function actionFeedbackprogram(){
        return $this->render('feedbackProgram');
    }
    
    public function actionFeedbackresidency(){
        return $this->render('feedbackResidency');
    }
    
    public function actionFeedbacktechnology(){
        return $this->render('feedbackTechnology');
    }
    public function actionMyaccounttaxform(){
        return $this->render('myAccountTaxForm');
    }
    public function actionProgramdescription(){
        return $this->render('programDescription');
    }
    public function actionProgramprogress(){
        return $this->render('programProgress');
    }
    public function actionLeadershipprogram(){
        return $this->render('leadershipProgram');
    }
    public function actionEcourseexams(){
        return $this->render('ecourseExams');
    }
    public function actionEcourseforum(){
        return $this->render('eCourseForum');
    }
    public function actionEcourseprojects(){
        return $this->render('eCourseProjects');
    }
    public function actionEcourseemodule(){
        return $this->render('eCourseEmodule');
    }
    public function actionVocationalprogram(){
        return $this->render('vocationalProgram');
    }
    public function actionEcourseeclass(){
        return $this->render('eCourseEclass');
    }
    public function actionMyeduplansummery(){
        return $this->render('myEduPlanSummery');
    }
    
    //end of code added by Junaid Ahmed
    
}
