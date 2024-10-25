<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tracks', function (Blueprint $table) {

            $table->unsignedBigInteger('id_categorie')->nullable()->after('id');

            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tracks', function (Blueprint $table) {
           
            $table->dropForeign(['id_categorie']);

            $table->dropColumn('id_categorie');
        });
    }
};


        

