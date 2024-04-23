<?php

use App\Models\Champions;
use App\Models\ChampionsTypes;
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
        Schema::create('champions_types', function (Blueprint $table) {
            $table->foreignIdFor(Champions::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Types::class)->constrained()->cascadeOnDelete();
        });

        $allChampsTypes = [
            [
                'champions_id' => 1,
                'types_id' => 2
            ], [
                'champions_id' => 2,
                'types_id' => 1
            ], [
                'champions_id' => 2,
                'types_id' => 3
            ]
        ];

        foreach ($allChampsTypes as $data) {
            ChampionsTypes::create($data);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions_types');
    }
};
