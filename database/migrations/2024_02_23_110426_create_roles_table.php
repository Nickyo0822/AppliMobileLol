<?php

use App\Models\Roles;
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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path_icon');
        });

        $allRoles = [
            [
                'name' => 'ADC',
                'path_icon' => 'images/roles/ADC.png'
            ], [
                'name' => 'Support',
                'path_icon' => 'images/roles/Support.png'
            ], [
                'name' => 'Mid',
                'path_icon' => 'images/roles/Mid.png'
            ], [
                'name' => 'Top',
                'path_icon' => 'images/roles/Top.png'
            ], [
                'name' => 'Jungle',
                'path_icon' => 'images/roles/Jungle.png'
            ]
        ];

        foreach ($allRoles as $data) {
            Roles::create($data);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
