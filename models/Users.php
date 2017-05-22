<?php
/**
 * Created by PhpStorm.
 * User: pleoq
 * Date: 09.04.2017
 * Time: 20:06
 */

namespace app\models;
use yii;
use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_users}}';
    }

    public static function getByLogin($login)
    {
        return Users::find()->where(['login' => $login])->one();
    }

    public static function getAllUsers()
    {
        return Users::find()->all();
    }

    public static function getAddUser($login, $param)
    {
        if ($param) {
            $query = "select column_name from information_schema.columns where table_name='users' and column_name != 'login'";
            $arSymbdb = Yii::$app->db->createCommand($query)->queryAll();
            foreach ($arSymbdb as $symb){
                $arSymb[] = $symb['column_name'];
            }
            foreach ($param as $k => $s) {
                if (!in_array($k, $arSymb)) {
                    $query_add = 'ALTER TABLE "public"."users" ADD COLUMN '.$k.' "char" NOT NULL ;';
                    $add = Yii::$app->db->createCommand($query_add)->queryAll();
                    $query_set_def =' ALTER TABLE ONLY users ALTER COLUMN '.$k.' SET DEFAULT \'N\'::"char";';
                    $set_def = Yii::$app->db->createCommand($query_set_def)->queryAll();
                }
            }
        }
        $user = new Users();
        $user->login = $login;
        if ($param) {
            foreach ($param as $key => $symb) {
                $user->$key = $symb;
            }
        }
        if ($user->save())
            return true;
        else
            return false;
    }
}