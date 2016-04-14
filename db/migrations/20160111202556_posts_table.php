<?php

use Phinx\Migration\AbstractMigration;

class PostsTable extends AbstractMigration
{
    public function up()
    {
        $types_table = $this->table('types');
        $types_table->addColumn('type', 'string')
            ->create();

        $types_table->insert([
            ["type" => "educational"], 
            ["type" => "politics"],
            ["type" => "jokes"],
            ["type" => "entertainment"],
            ["type" => "others"]
        ]);

        $types_table->saveData();

        $posts_table = $this->table('posts');
        $posts_table->addColumn('title', 'string')
            ->addColumn('description', 'text')
            ->addColumn('type_id', 'integer')
            ->addForeignKey('type_id', 'types', 'id')
            ->create();

    }

    public function down() {
        $this->dropTable('posts');
        $this->dropTable('types');
    }
}
