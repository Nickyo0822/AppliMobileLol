<?php

use App\Models\Champions;
use App\Models\Spells;
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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('touch');
            $table->string('description');
            $table->string('path_icon');
            $table->foreignIdFor(Champions::class)->constrained()->cascadeOnDelete();
        });

        $allSpells = [
            [
                'name' => 'POSTURE DU MASSACREUR',
                'touch' => 'passive',
                'description' => 'Régulièrement, la prochaine attaque de base d\'Aatrox inflige des dégâts physiques supplémentaires et le soigne, selon un pourcentage des PV max de la cible.',
                'path_icon' => 'images/spells/Aatrox_Passive.png',
                'champions_id' => 1
            ], [
                'name' => 'ÉPÉE DES DARKIN',
                'touch' => 'A',
                'description' => 'Aatrox abat son épée devant lui, infligeant des dégâts physiques. Il peut frapper jusqu\'à 3 fois et chaque coup a une zone d\'effet différente.',
                'path_icon' => 'images/spells/Aatrox_A.png',
                'champions_id' => 1
            ], [
                'name' => 'CHAÎNES INFERNALES',
                'touch' => 'Z',
                'description' => 'Aatrox frappe le sol, blessant le premier ennemi touché. Les champions et les grands monstres doivent vite quitter la zone d\'effet sous peine d\'être ramenés de force au point d\'impact et de subir à nouveau les dégâts.',
                'path_icon' => 'images/spells/Aatrox_Z.png',
                'champions_id' => 1
            ], [
                'name' => 'RUÉE OBSCURE',
                'touch' => 'E',
                'description' => 'Passivement, Aatrox se soigne quand il blesse des champions ennemis. À l\'activation, il se rue dans une direction.',
                'path_icon' => 'images/spells/Aatrox_E.png',
                'champions_id' => 1
            ], [
                'name' => 'FOSSOYEUR DES MONDES',
                'touch' => 'R',
                'description' => 'Aatrox libère sa forme démoniaque, effrayant les sbires ennemis proches et augmentant ses dégâts d\'attaque, ses soins et sa vitesse de déplacement. La durée est prolongée s\'il participe à l\'élimination d\'un champion ennemi.',
                'path_icon' => 'images/spells/Aatrox_R.png',
                'champions_id' => 1
            ],
        ];

        foreach ($allSpells as $data) {
            Spells::create($data);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spells');
    }
};
