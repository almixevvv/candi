<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateWhoarewesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whoarewes', function (Blueprint $table) {
            $table->id();
            $table->json('contents');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable(true);
        });

        // $defaultApplGroup = array(
        //     [
        //         'contents'           => `{"time":"1622227867287","blocks":[{"id":"_7Buw_WnDb","type":"header","data":{"text":"WE ARE CANDI","level":"3"}},{"id":"0fVFciPae4","type":"paragraph","data":{"text":"and we're here to stay"}}],"version":"2.22.0"}`,
        //     ],
        // );

        // DB::table('whoarewes')->insert($defaultApplGroup);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('whoarewes');
    }
}
