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
        });

        $allChamps = [
            [
                'name' => 'Aatrox',
                'description' => 'Autrefois, Aatrox et ses frères étaient honorés pour avoir défendu Shurima contre le Néant. Mais ils finirent par devenir une menace plus grande encore pour Runeterra : la ruse et la sorcellerie furent employées pour les battre. Cependant, après des siècles d\'emprisonnement, Aatrox fut le premier à retrouver sa liberté, en corrompant et transformant les mortels assez stupides pour tenter de s\'emparer de l\'arme magique qui contenait son essence. Désormais en possession d\'un corps qu\'il a approximativement transformé pour rappeler son ancienne forme, il arpente Runeterra en cherchant à assouvir sa vengeance apocalyptique.',
                'path_icon' => 'images/champions/Aatrox.png'
            ], [
                'name' => 'Ahri',
                'description' => 'Connectée à la magie du royaume spirituel, Ahri est une mystérieuse Vastaya aux traits de renard qui peut manipuler les émotions de sa proie et consumer son essence, afin de recevoir des fragments de sa mémoire. Ahri fut un temps un terrifiant prédateur, mais elle voyage désormais à la recherche des vestiges de ses ancêtres tout en essayant de remplacer les souvenirs qu\'elle a volés par sa propre expérience de l\'existence.',
                'path_icon' => 'images/champions/Ahri.png'
            ], [
                'name' => 'Akali',
                'description' => 'Ayant abandonné l\'Ordre Kinkou et le titre de Poing de l\'ombre, Akali combat aujourd\'hui seule, prête à devenir l\'arme mortelle dont son peuple a besoin. Bien qu\'elle n\'oublie rien de tout ce que son maître Shen lui a enseigné, elle a juré de défendre Ionia contre ses ennemis, une élimination après l\'autre. Akali tue sans faire de bruit, mais son message est fort et clair : craignez l\'assassin sans maître.',
                'path_icon' => 'images/champions/Akali.png'
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
