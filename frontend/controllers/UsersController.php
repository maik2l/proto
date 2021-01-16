<?php

namespace frontend\controllers;

use app\models\FavoriteUser;
use Yii;
use common\models\User;
use frontend\models\search\UserSearch;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsersController implements the CRUD actions for User model.
 */
class UsersController extends Controller
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
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $userId = Yii::$app->user->id;
        $favoriteUserIds = FavoriteUser::find()
            ->select(['favorite_user_id'])
            ->where(['user_id' => $userId])
            ->column();

        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where(['<>', 'id', $userId]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'favoriteUserIds' => $favoriteUserIds,
        ]);
    }

    public function actionFavoriteUsers()
    {
        $user_id = Yii::$app->user->id;
        $dataProvider = new ActiveDataProvider([
            'query' => FavoriteUser::find()
                ->with('favoriteUser')
                ->where(['user_id' => $user_id]),
        ]);

        return $this->render('favorite-users', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionChangeFavorite()
    {
         $post = Yii::$app->request->post();
         $favoriteUserId = $post['favorite_user_id'];
         $userId = Yii::$app->user->id;

         $dataFavoriteUserIds = FavoriteUser::find()
             ->select('favorite_user_id')
             ->where(['user_id' => $userId])
             ->column();

         if(in_array($favoriteUserId, $dataFavoriteUserIds)) {
             FavoriteUser::find()
                 ->where(['user_id' => $userId])
                 ->andWhere(['favorite_user_id' => $favoriteUserId])
                 ->one()
                 ->delete();
         } else {
             $newUser = new FavoriteUser();
             $newUser->user_id = $userId;
             $newUser->favorite_user_id = $favoriteUserId;
             $newUser->save();
         }
    }
}
