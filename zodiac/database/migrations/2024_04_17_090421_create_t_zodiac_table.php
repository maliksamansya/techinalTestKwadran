<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_zodiac', function (Blueprint $table) {
            $table->id();
            $table->string('start_date');
            $table->string('end_date');
            $table->string('zodiac_name');
            $table->timestamps();
        });

        // Insert data Zodiac
        DB::table('t_zodiac')->insert([
            ['start_date' => '12-22', 'end_date' => '01-20', 'zodiac_name' => 'Capricorn'],
            ['start_date' => '01-21', 'end_date' => '02-19', 'zodiac_name' => 'Aquarius'],
            ['start_date' => '02-20', 'end_date' => '03-20', 'zodiac_name' => 'Pisces'],
            ['start_date' => '03-21', 'end_date' => '04-20', 'zodiac_name' => 'Aries'],
            ['start_date' => '04-21', 'end_date' => '05-20', 'zodiac_name' => 'Taurus'],
            ['start_date' => '05-21', 'end_date' => '06-20', 'zodiac_name' => 'Gemini'],
            ['start_date' => '06-21', 'end_date' => '07-22', 'zodiac_name' => 'Cancer'],
            ['start_date' => '07-23', 'end_date' => '08-22', 'zodiac_name' => 'Leo'],
            ['start_date' => '08-23', 'end_date' => '09-22', 'zodiac_name' => 'Virgo'],
            ['start_date' => '09-23', 'end_date' => '10-22', 'zodiac_name' => 'Libra'],
            ['start_date' => '10-23', 'end_date' => '11-21', 'zodiac_name' => 'Scorpio'],
            ['start_date' => '11-22', 'end_date' => '12-21', 'zodiac_name' => 'Sagittarius'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_zodiac');
    }
};
