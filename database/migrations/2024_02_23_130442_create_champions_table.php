<?php

use App\Models\Champions;
use App\Models\Roles;
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
        Schema::create('champions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('path_icon');
            $table->foreignIdFor(Types::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Roles::class)->constrained()->cascadeOnDelete();
        });

        $allChamps = [
            [
                'name' => 'Aatrox',
                'description' => 'Autrefois, Aatrox et ses frères étaient honorés pour avoir défendu Shurima contre le Néant. Mais ils finirent par devenir une menace plus grande encore pour Runeterra : la ruse et la sorcellerie furent employées pour les battre. Cependant, après des siècles d\'emprisonnement, Aatrox fut le premier à retrouver sa liberté, en corrompant et transformant les mortels assez stupides pour tenter de s\'emparer de l\'arme magique qui contenait son essence. Désormais en possession d\'un corps qu\'il a approximativement transformé pour rappeler son ancienne forme, il arpente Runeterra en cherchant à assouvir sa vengeance apocalyptique.',
                'path_icon' => 'images/champions/Aatrox.png',
                'types_id' => 2,
                'roles_id' => 4
            ]
        ];

        foreach ($allChamps as $data) {
            Champions::create($data);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champions');
    }
};