<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\BillingInvoice;
use App\Models\PatientVist;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('billing_transactions', function (Blueprint $table) {
        $table->id();
        $table->integer('payment_amount')->default(0);
        $table->tinyInteger('status')->default(0);
        $table->foreignId('patient_vist_id')->nullable()->constrained('patient_vists')->onDelete('cascade')->onUpdate('cascade');
        $table->foreignId('billing_invoice_id')->nullable()->constrained('billing_invoices')->onUpdate('cascade');
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
        Schema::dropIfExists('billing_transactions');
    }
};
