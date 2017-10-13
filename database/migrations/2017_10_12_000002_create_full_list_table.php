<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullListTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'full_list';

    /**
     * Run the migrations.
     * @table full_list
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->text('date_last_published')->nullable()->default(null);
            $table->string('manufacturer_code', 45)->nullable()->default(null);
            $table->string('product_code', 45)->nullable()->default(null);
            $table->string('product_full_code', 45)->nullable()->default(null);
            $table->string('product_name')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->string('date_listed')->nullable()->default(null);
            $table->string('manufacturer_name')->nullable()->default(null);
            $table->string('url')->nullable()->default(null);
            $table->string('classification')->nullable()->default(null);
            $table->string('superclass')->nullable()->default(null);
            $table->longText('category')->nullable()->default(null);
            $table->longText('caution')->nullable()->default(null);
            $table->longText('restrictions')->nullable()->default(null);
            $table->longText('notations')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
