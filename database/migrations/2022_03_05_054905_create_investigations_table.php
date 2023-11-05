<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Patient;
use App\Models\User;
use App\Models\PatientVist;
use App\Models\TestType;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('investigations', function (Blueprint $table) {
        $table->id();
        $table->string('stat')->nullable()->comment('Stat means Statistics');
        $table->string('ot_required')->nullable();
        $table->string('result')->nullable();
        $table->tinyInteger('status')->default(0);
        $table->foreignId('test_type_id')->nullable()->constrained('test_types')->onUpdate('cascade');
        $table->foreignId('patient_id')->nullable()->constrained('patients')->onDelete('cascade')->onUpdate('cascade');
        $table->foreignId('patient_vist_id')->nullable()->constrained('patient_vists')->onDelete('cascade')->onUpdate('cascade');
        $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
        $table->foreignId('created_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
        $table->foreignId('updated_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investigations');
    }
};
