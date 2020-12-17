<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('invoices', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string('payment_method');
      $table->decimal('value', $precision = 8, $scale = 2);
      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->unsignedBigInteger('package_id')->nullable();
      $table->foreign('package_id')->references('id')->on('packages');
      $table->string('ref')->nullable();
      $table->string('external_reference')->nullable();
      $table->string('status')->default('Aguardando Pagamento');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('invoices');
  }
}
