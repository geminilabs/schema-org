<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Nutritional information about the recipe.
 *
 * @see http://schema.org/NutritionInformation
 *
 * @method static calories( Energy $calories )
 * @method static carbohydrateContent( Mass $carbohydrateContent )
 * @method static cholesterolContent( Mass $cholesterolContent )
 * @method static fiberContent( Mass $fiberContent )
 * @method static proteinContent( Mass $proteinContent )
 * @method static saturatedFatContent( Mass $saturatedFatContent )
 * @method static servingSize( string $servingSize )
 * @method static sodiumContent( Mass $sodiumContent )
 * @method static sugarContent( Mass $sugarContent )
 * @method static fatContent( Mass $fatContent )
 * @method static transFatContent( Mass $transFatContent )
 * @method static unsaturatedFatContent( Mass $unsaturatedFatContent )
 */
class NutritionInformation extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'calories',
        'carbohydrateContent',
        'cholesterolContent',
        'fiberContent',
        'proteinContent',
        'saturatedFatContent',
        'servingSize',
        'sodiumContent',
        'sugarContent',
        'fatContent',
        'transFatContent',
        'unsaturatedFatContent',
    ];
}
