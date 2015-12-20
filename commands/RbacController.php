<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        /*******
        **Roles
        *******/

        /*add "admin" role*/
        $admin = $auth->createRole("admin");
        $auth->add($admin);

        /*add "instructor" role*/
        $instructor = $auth->createRole("instructor");
        $auth->add($instructor);

        /*add "student" role*/
        $student = $auth->createRole("student");
        $auth->add($student);

        $auth->addChild($admin, $instructor);
        $auth->addChild($admin, $student);
        
        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($admin, 1);
        
    }
}