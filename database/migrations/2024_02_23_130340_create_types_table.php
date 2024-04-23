<?php

use App\Models\Types;
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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path_icon');
        });

        $allTypes = [
            [
                'name' => 'Assassin',
                'path_icon' => 'images/types/Assassin.png'
            ], [
                'name' => 'Combattant',
                'path_icon' => 'images/types/Combattant.png'
            ], [
                'name' => 'Mage',
                'path_icon' => 'images/types/Mage.png'
            ], [
                'name' => 'Tireur',
                'path_icon' => 'images/types/Tireur.png'
            ], [
                'name' => 'Support',
                'path_icon' => 'images/types/Support.png'
            ], [
                'name' => 'Tank',
                'path_icon' => 'images/types/Tank.png'
            ]
        ];

        foreach ($allTypes as $data) {
            Types::create($data);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
