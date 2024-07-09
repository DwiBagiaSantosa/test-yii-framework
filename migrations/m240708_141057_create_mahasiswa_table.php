<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa}}`.
 */
class m240708_141057_create_mahasiswa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull(),
            'nim' => $this->string()->notNull()->unique(),
            'alamat' => $this->text(),
            'tanggal_lahir' => $this->date(),
            'jurusan' => $this->string(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa}}');
    }
}
