<?php

use think\migration\Migrator;
use think\migration\db\Column;
use Phinx\Db\Adapter\MysqlAdapter;

class Link extends Migrator
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
        $table=$this->table('link',['collation'=>'utf8_unicode_ci']);
        $table->addColumn('name','string',['limit'=>20,'comment'=>'连接名称'])
            ->addColumn('desc','string',['limit'=>80,'comment'=>'连接描述'])
            ->addColumn('url','string',['comment'=>'连接地址'])
            ->addColumn('sort','integer',['default'=>999,'comment'=>'排序'])
            ->addColumn('type','integer',['limit'=>MysqlAdapter::INT_TINY,'default'=>1,'comment'=>'类型1普通，2友情连接'])
            ->addTimestamps()
            ->addSoftDelete()
            ->create();

    }
    public function up()
    {
        parent::up(); // TODO: Change the autogenerated stub
    }
    public function down()
    {
        parent::down(); // TODO: Change the autogenerated stub
    }
}
