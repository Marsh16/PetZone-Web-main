<?php

use App\Models\BusinessType;
use App\Models\City;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 600);
            $table->text('address');
            $table->string('phone_number');
            $table->time('opening_hour', $precision = 0);
            $table->time('closing_hour', $precision = 0);
            $table->foreignIdFor(City::class);
            $table->integer('price_per_day');
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(BusinessType::class);
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('business_type_id')->references('id')->on('business_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
