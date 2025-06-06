<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%track}}`.
 */
class m250603_164746_create_track_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%track}}', [
            'id' => $this->primaryKey(),
            'track_number' => $this->string()->notNull()->unique(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
            'status' => $this->string()->notNull()->defaultValue(\app\modules\admin\models\Track::STATUS_CREATED),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%track}}');
    }
}
