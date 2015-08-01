<?php namespace Uit\Yandexmap\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateLocationsTable extends Migration
{

    public function up()
    {
        Schema::create('uit_yandexmap_locations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('geocode');
            $table->text('content');
            $table->float('lat');
            $table->float('long');
            $table->text('options');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('uit_yandexmap_locations');
    }

}
