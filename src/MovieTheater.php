<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A movie theater.
 *
 * @see http://schema.org/MovieTheater
 *
 * @mixin \GeminiLabs\SchemaOrg\CivicStructure
 * @mixin \GeminiLabs\SchemaOrg\EntertainmentBusiness
 */
class MovieTheater extends BaseType
{
    /**
     * The number of screens in the movie theater.
     *
     * @param float|float[]|int|int[] $screenCount
     *
     * @return static
     *
     * @see http://schema.org/screenCount
     */
    public function screenCount($screenCount)
    {
        return $this->setProperty('screenCount', $screenCount);
    }

}
