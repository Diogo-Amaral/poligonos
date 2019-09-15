<?php

use yii\db\Migration;

/**
 * Class m190912_152347_retangulos
 */
class m190912_152347_retangulos extends Migration
{
    public function up()
    {
        $this->createTable('retangulos', [
            'id' => $this->primaryKey(),
            'base' => $this->float()->notNull(),
            'altura' => $this->float()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('retangulos');

        return false;
    }
}
