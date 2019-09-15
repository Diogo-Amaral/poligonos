<?php

use yii\db\Migration;

/**
 * Class m190912_141851_triangulo
 */
class m190912_141851_triangulo extends Migration
{
    public function up()
    {
        $this->createTable('triangulos', [
            'id' => $this->primaryKey(),
            'base' => $this->float()->notNull(),
            'altura' => $this->float()->notNull(),

        ]);
    }

    public function down()
    {
        $this->dropTable('triangulos');

        return false;
    }
   
}
