<?php

namespace App\Blocs;

use WordPlate\Acf\Fields\Group;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Textarea;
use WordPlate\Acf\Fields\WysiwygEditor;

class BlocHero extends Bloc
{
    public static $name = 'hero';
    public static $label = 'Hero';
    public static $icon = 'admin-home';

    protected static function fields(): array
    {
        return [
            Text::make('Titre de la page', 'hero_title')->required()->placeholder("Titre de la page"),
        ];
    }
}

?>
