<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('title')->comment('such as Dr. Mr. Mrs Etc.')->after('id');
            $table->string('username')->after('name');
            $table->string('gender')->comment('M = Male, F = Female')->after('mobile');
            $table->date('dob')->nullable()->after('gender');
            $table->integer('age')->default(0)->after('dob');
            $table->integer('religion')->nullable()->after('age');
            $table->text('address_1')->nullable()->after('religion');
            $table->text('address_2')->nullable()->after('address_1');
            $table->tinyInteger('status')->default(0)->after('address_2');
            $table->foreignId('created_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('updated_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            
            $table->string('title')->comment('such as Dr. Mr. Mrs Etc.')->after('id');
            $table->string('username')->after('name');
            $table->string('gender')->comment('M = Male, F = Female')->after('mobile');
            $table->date('dob')->nullable()->after('gender');
            $table->integer('age')->default(0)->after('dob');
            $table->integer('religion')->nullable()->after('age');
            $table->text('address_1')->nullable()->after('religion');
            $table->text('address_2')->nullable()->after('address_1');
            $table->tinyInteger('status')->default(0)->after('address_2');
            $table->foreignId('created_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('updated_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }
};
