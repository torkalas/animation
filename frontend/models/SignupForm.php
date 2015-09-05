<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;
use vova07\fileapi\behaviors\UploadBehavior;
/**
 * Signup form
 */
class SignupForm extends Model
{
    public $name;
    public $surname;
    public $username;
    public $email;
    public $password;
    public $repassword;
    public $avatar_url;
    public $avatar_file;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // Name
            ['name', 'required'],
            ['name', 'string', 'min' => 2, 'max' => 255],
            // Surname
            ['surname', 'required'],
            ['surname', 'string', 'min' => 2, 'max' => 255],
            // Avatar Url
            //['avatar_url', 'string', 'min' => 5, 'max' => 255],
            // Avatar File
            //['avatar_file','file','extensions'=> ['jpeg', 'jpg', 'png', 'gif']],

            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Это имя пользователя уже занято.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Этот адрес электронной почты уже был использован при регистрации другого пользователя.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['repassword', 'string', 'min' => 6],
            ['repassword', 'compare', 'compareAttribute' => 'password'],

        ];
    }

    public function behaviors()
    {
        return [
            'uploadBehavior' => [
                'class' => UploadBehavior::className(),
                'attributes' => [
                    'avatar_url' => [
                        'path' => '@webroot/common/uploads/images/avatars',
                        'tempPath' => '@webroot/common/uploads/images/temp/files/avatars',
                        'url' => '@web/common/uploads/images/avatars'
                    ],
                ]
            ]
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->name = $this->name;
            $user->surname = $this->surname;
            if ($this->avatar_url == NULL) {
                $user->avatar_url = 'no_foto.jpeg';
            }else {
                $user->avatar_url = $this->avatar_url;
            }
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->created_at = date('Y-m-d H:i:s');
            if ($user->save()) {
                return $user;
            }
        }
        return null;
    }

}
