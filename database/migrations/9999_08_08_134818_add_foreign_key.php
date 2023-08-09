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
        Schema::table('plans', function (Blueprint $table) {
            $table->foreignId('customer_id')->constrained();
        });

        Schema::table('accountings', function (Blueprint $table) {
            $table->foreignId('customer_id')->constrained();
        });

        Schema::table('accounting_bill', function (Blueprint $table) {

            $table->foreignId('accounting_id')->constrained();
            $table->foreignId('bill_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('plans', function (Blueprint $table) {
            $table->dropForeign("plans_customer_id_foreign");
            $table->dropColumn("customer_id");
        });

        Schema::table('accountings', function (Blueprint $table) {
            $table->dropForeign("accountings_customer_id_foreign");
            $table->dropColumn("customer_id");
        });

        Schema::table('accounting_bill', function (Blueprint $table) {

            $table->dropForeign("accounting_bill_accounting_id_foreign");
            $table->dropForeign("accounting_bill_bill_id_foreign");

            $table->dropColumn("accounting_id");
            $table->dropColumn("bill_id");
        });
    }
};
