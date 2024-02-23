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
        });

        $allTypes = [
            [
                'name' => 'Assassins'
            ], [
                'name' => 'Combattants'
            ], [
                'name' => 'Mages'
            ], [
                'name' => 'Tireurs'
            ], [
                'name' => 'Supports'
            ], [
                'name' => 'Tanks'
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
