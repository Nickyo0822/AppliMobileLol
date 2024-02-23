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
        });

        $allRoles = [
            [
                'name' => 'ADC'
            ], [
                'name' => 'Support'
            ], [
                'name' => 'Mid'
            ], [
                'name' => 'Top'
            ], [
                'name' => 'Jungle'
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
