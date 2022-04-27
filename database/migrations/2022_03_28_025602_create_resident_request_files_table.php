<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentRequestFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident_request_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resident_record_id')->nullable()->constrained('resident_records')->nullOnDelete();
            $table->string('type');
            $table->string('file_directory');
            $table->string('status')->default('pending');
            $table->boolean('is_printed')->default(0);
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
        Schema::dropIfExists('resident_request_files');
    }
}
