<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Tags extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table=$this->table('tags',['collation'=>'utf8_unicode_ci']);
        $table->addColumn('tag_name','string',['default'=>'','comment'=>'标签名称'])
            ->addSoftDelete()
            ->addTimestamps()
            ->addIndex(['tag_name'])
            ->create();
    }

    /**
     * Version 1.0
     * Creator By River
     * 2018-09-20 18:42:11
     */
    public function up()
    {
        parent::up(); // TODO: Change the autogenerated stub
    }

    /**
     * Version 1.0
     * Creator By River
     * 2018-09-20 18:42:28
     */
    public function down()
    {
        parent::down(); // TODO: Change the autogenerated stub
    }
}
