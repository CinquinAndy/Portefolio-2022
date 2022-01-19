<?php

namespace App\Blocs;

use WordPlate\Acf\Fields\Group;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Link;
use WordPlate\Acf\Fields\Repeater;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Textarea;
use WordPlate\Acf\Fields\WysiwygEditor;

class BlocArticle extends Bloc
{
    public static $name = 'article';
    public static $label = 'Article';
    public static $icon = 'admin-post';

    protected static function fields(): array
    {
        return [
            Group::make("Groupe deuxième section", "second_section")->fields(
                [
                    Text::make('Type (top)', 'type')->required()->placeholder("Type de la réalisation"),
                    Text::make('Titre (mid)', 'title')->required()->placeholder("Titre de la réalisation"),
                    Text::make('Sous Titre (bot)', 'subtitle')->required()->placeholder("Titre de la réalisation"),
                ]
            ),
            Link::make('Boutton d\'action', "button")->required(),
            Link::make('Boutton d\'action - Secondaire', "secondary_button"),
            WysiwygEditor::make('Résumé du projet', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
            Repeater::make('Le projet en image !', 'images')->required()->fields([
                    Image::make('Image', 'img')->required()
                ]
            ),
            Repeater::make('Les technologies utilisées !', 'technos')->required()->fields([
                    Image::make('Image', 'img')->required()
                ]
            ),
        ];
    }
}

?>
