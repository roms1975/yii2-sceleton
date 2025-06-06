<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

class Track extends ActiveRecord
{
    const STATUS_CREATED = 'CREATED';
    const STATUS_SHIPPED = 'SHIPPED';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_RETURNED = 'RETURNED';
    const STATUS_CANCELLED = 'CANCELLED';
    
    public static function tableName()
    {
        return '{{%track}}'; // Таблица называется track
    }

    public function rules()
    {
        return [
            [['track_number'], 'required'],
            ['track_number', 'unique'],
            [['created_at', 'updated_at'], 'safe'],
            [['status'], 'in', 'range' => array_keys(self::statuses())],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'track_number' => 'Номер трека',
            'created_at' => 'Дата создания',
            'updated_at' => 'Последнее обновление',
            'status' => 'Статус'
        ];
    }

    /**
     * Возвращает массив возможных статусов
     */
    public static function statuses()
    {
        return [
            self::STATUS_CREATED => 'Создан',
            self::STATUS_SHIPPED => 'Отправлен',
            self::STATUS_DELIVERED => 'Доставлен',
            self::STATUS_RETURNED => 'Возвращён',
            self::STATUS_CANCELLED => 'Отменён',
        ];
    }
}