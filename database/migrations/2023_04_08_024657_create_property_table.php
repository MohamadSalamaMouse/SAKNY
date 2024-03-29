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
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('property_name',50);
            $table->string('address',100);
            $table->string('price',10);
            $table->string('type',10);
            $table->string('offer',10);
            $table->string('status',50);
            $table->string('furnished',50);
            $table->string('bnk',10);
            $table->string('deposite',10);
            $table->string('bedroom',10);
            $table->string('bathroom',10);
            $table->string('balcony',10);
            $table->string('carpet',10);
            $table->string('age',2);
            $table->string('total_floors',2);
            $table->string('room_floor',2);
            $table->string('loan',50);
            $table->string('lift',3)->nullable();
            $table->string('security_guard',3)->nullable();
            $table->string('play_guard',3)->nullable();
            $table->string('garden',3)->nullable();
            $table->string('water_supply',3)->nullable();
            $table->string('power_backup',3)->nullable();
            $table->string('parking_area',3)->nullable();
            $table->string('gym',3)->nullable();
            $table->string('shopping_mall',3)->nullable();
            $table->string('hospital',3)->nullable();
            $table->string('school',3)->nullable();
            $table->string('market_area',3)->nullable();
            $table->string('image_01',255);
            $table->string('image_02',255)->nullable();
            $table->string('image_03',255)->nullable();
            $table->string('image_04',255)->nullable();
            $table->string('image_05',255)->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
