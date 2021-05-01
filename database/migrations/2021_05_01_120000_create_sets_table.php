<?php

use App\Models\Question;
use App\Models\Set;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sets', function (Blueprint $table) {
            $table->id();
            $table->integer('set_id');
            $table->string('course');
            $table->string('subject');
            $table->softDeletes();
            $table->timestamps();
        });

        Set::query()->delete();

        Question::select('set_id','course','subject')->distinct()->get()->map(function($s){
            $set = new Set();
            $set->forceFill($s->toArray());
            $set->save();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sets');
    }
}
