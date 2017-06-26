<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A recipe. For dietary restrictions covered by the recipe, a few common restrictions are
 * enumerated via [[suitableForDiet]]. The [[keywords]] property can also be used to add more
 * detail.
 *
 * @see http://schema.org/Recipe
 *
 * @method static suitableForDiet( RestrictedDiet $suitableForDiet )
 * @method static totalTime( Duration $totalTime )
 * @method static cookTime( Duration $cookTime )
 * @method static cookingMethod( string $cookingMethod )
 * @method static nutrition( NutritionInformation $nutrition )
 * @method static prepTime( Duration $prepTime )
 * @method static recipeCategory( string $recipeCategory )
 * @method static recipeCuisine( string $recipeCuisine )
 * @method static ingredients( string $ingredients )
 * @method static recipeIngredient( string $recipeIngredient )
 * @method static recipeInstructions( schema:ItemList|string $recipeInstructions )
 * @method static recipeYield( string $recipeYield )
 */
class Recipe extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'suitableForDiet',
        'totalTime',
        'cookTime',
        'cookingMethod',
        'nutrition',
        'prepTime',
        'recipeCategory',
        'recipeCuisine',
        'ingredients',
        'recipeIngredient',
        'recipeInstructions',
        'recipeYield',
    ];
}
