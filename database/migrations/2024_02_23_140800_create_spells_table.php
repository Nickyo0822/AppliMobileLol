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
            $table->text('description');
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
            ], [
                'name' => 'VOL ESSENTIEL',
                'touch' => 'passive',
                'description' => 'Après avoir tué 9 sbires ou monstres, Ahri récupère des PV. Après avoir participé à l\'élimination d\'un champion ennemi, Ahri récupère encore plus de PV.',
                'path_icon' => 'images/spells/Ahri_Passive.png',
                'champions_id' => 2
            ], [
                'name' => 'ORBE D\'ILLUSION',
                'touch' => 'A',
                'description' => 'Ahri lance son orbe et le ramène vers elle, infligeant des dégâts magiques à l\'aller et des dégâts bruts au retour.',
                'path_icon' => 'images/spells/Ahri_A.png',
                'champions_id' => 2
            ], [
                'name' => 'LUCIOLES',
                'touch' => 'Z',
                'description' => 'Ahri gagne un bref bonus en vitesse de déplacement et libère trois lucioles qui verrouillent et attaquent les ennemis proches.',
                'path_icon' => 'images/spells/Ahri_Z.png',
                'champions_id' => 2
            ], [
                'name' => 'CHARME',
                'touch' => 'E',
                'description' => 'Ahri envoie un baiser qui blesse et charme le premier ennemi qu\'il touche, interrompant immédiatement ses compétences de déplacement et le faisant marcher docilement vers elle.',
                'path_icon' => 'images/spells/Ahri_E.png',
                'champions_id' => 2
            ], [
                'name' => 'ASSAUT SPIRITUEL',
                'touch' => 'R',
                'description' => 'Ahri se rue vers l\'avant et tire des traits spirituels, infligeant des dégâts aux ennemis proches. Assaut spirituel peut être lancé jusqu\'à 3 fois avant d\'entrer en phase de récupération et Ahri gagne des réactivations en participant à l\'élimination de champions ennemis.',
                'path_icon' => 'images/spells/Ahri_R.png',
                'champions_id' => 2
            ], [
                'name' => 'MARQUE D\'ASSASSIN',
                'touch' => 'passive',
                'description' => 'Blesser un champion avec une compétence crée un cercle d\'énergie autour de lui. Quitter ce cercle renforce la prochaine attaque d\'Akali en augmentant sa portée et ses dégâts.',
                'path_icon' => 'images/spells/Akali_Passive.png',
                'champions_id' => 3
            ], [
                'name' => 'VAGUE DE KUNAIS',
                'touch' => 'A',
                'description' => 'Akali lance cinq kunais, infligeant des dégâts selon ses dégâts d\'attaque supplémentaires et sa puissance et ralentissant les ennemis.',
                'path_icon' => 'images/spells/Akali_A.png',
                'champions_id' => 3
            ], [
                'name' => 'LINCEUL NÉBULEUX',
                'touch' => 'Z',
                'description' => 'Akali crée un nuage de fumée et augmente brièvement sa vitesse de déplacement. Dans ce nuage, Akali est invisible et impossible à cibler. Si elle attaque ou utilise des compétences, elle est temporairement révélée.',
                'path_icon' => 'images/spells/Akali_Z.png',
                'champions_id' => 3
            ], [
                'name' => 'LANCER ACROBATIQUE',
                'touch' => 'E',
                'description' => 'Fait un salto arrière et lance un shuriken vers l\'avant, infligeant des dégâts magiques. Le premier ennemi ou nuage de fumée touché est marqué. Réactivez la compétence pour vous ruer sur la cible marquée et infliger des dégâts supplémentaires.',
                'path_icon' => 'images/spells/Akali_E.png',
                'champions_id' => 3
            ], [
                'name' => 'MAÎTRISE ABSOLUE',
                'touch' => 'R',
                'description' => 'Akali bondit dans une direction, blessant les ennemis qu\'elle frappe. Réactivation : Akali se rue dans une direction, exécutant tous les ennemis qu\'elle frappe.',
                'path_icon' => 'images/spells/Akali_R.png',
                'champions_id' => 3
            ]
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
