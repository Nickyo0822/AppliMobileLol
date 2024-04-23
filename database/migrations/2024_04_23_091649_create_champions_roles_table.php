<?php

use App\Models\Champions;
use App\Models\ChampionsRoles;
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
        Schema::create('champions_roles', function (Blueprint $table) {
            $table->foreignIdFor(Champions::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Roles::class)->constrained()->cascadeOnDelete();
        });

        $allChampsRoles = [
            [
                'champions_id' => 1,
                'roles_id' => 4
            ], [
                'champions_id' => 2,
                'roles_id' => 3
            ]
        ];

        foreach ($allChampsRoles as $data) {
            ChampionsRoles::create($data);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions_roles');
    }
};
