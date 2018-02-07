<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property integer $status
 * @property integer $is_deleted
 * @property string $create_time
 * @property string $update_time
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'status', 'is_deleted'], 'required'],
            [['content'], 'string'],
            [['status', 'is_deleted'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['title'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'status' => 'Status',
            'is_deleted' => 'Is Deleted',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }

    public static function listArticle($offset, $limit) {
        return self::find()->asArray()->where(['is_deleted' => 0])->orderBy('id desc')->offset($offset)->limit($limit)->all();
    }

    public static function countArticle() {
        return self::find()->where(['is_deleted' => 0])->count();
    }

    public static function deleteArticle($articleId) {
        return self::updateAll(['is_deleted' => 1], ['id' => $articleId]);
    }

    public static function findArticle($articleId) {
        return self::find()->asArray()->where(['id' => $articleId, 'is_deleted' => 0])->one();
    }

    public static function insertArticle($fields) {
        $article = new self();
        $article->title = $fields['title'];
        $article->content = $fields['content'];
        $article->status = empty($fields['status']) ? 1 : $fields['status']; // 默认未发布
        $article->is_deleted = 0; // 未删除
        if ($article->save()) {
            return $article->id;
        }
        return false;
    }

    public static function updateArticle($fields, $id) {
        return self::updateAll($fields, ['id' => $id]);
    }
}
