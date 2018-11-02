<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->default('EXPO0001')->autoIncrement();
            $table->string('full_name_org');
            $table->string('of_address');
            $table->string('tel_and_email')->jsonSerialize();
            $table->string('about_head');
            $table->string('taxpayer_status');
            $table->string('full_name_of_customer_building');
            $table->string('of_address_of_customer_building')->jsonSerialize();
            $table->string('about_head_of _customer_building_and_pay_info')->jsonSerialize();
            $table->string('object_of_expert_assessment');
            $table->string('stage_of_designing');
            $table->string('class_of_responsibility_of_object');
            $table->string('estimated_cost');
            $table->string('source_of_funding');
            $table->string('data_about_gen_designer');
            $table->string('data_of_contact_person_of_customer')->jsonSerialize();
            $table->string('document_of_contact_person_of_customer');
            $table->string('info_about_date_and_person')->nullable()->jsonSerialize();
            $table->string('status')->default(0);
            $table->string('created_by')->nullable();

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
        Schema::dropIfExists('contracts');
    }
}
