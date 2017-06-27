<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A food or drink item listed in a menu or menu section.
 *
 * @see http://schema.org/MenuItem
 *
 * @method static offers( Offer $offers )
 * @method static suitableForDiet( RestrictedDiet $suitableForDiet )
 * @method static nutrition( NutritionInformation $nutrition )
 */
class MenuItem extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'offers',
        'suitableForDiet',
        'nutrition',
    ];
}
