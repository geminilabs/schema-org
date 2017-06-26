<?php

namespace GeminiLabs\SchemaOrg;

use DateTime;
use DateTimeInterface;
use GeminiLabs\SchemaOrg\Exceptions\InvalidProperty;
use GeminiLabs\SchemaOrg\Type;
use ReflectionClass;

abstract class BaseType implements Type
{
    const CONTEXT = 'http://schema.org';

    const PROPERTIES = [];

    /**
     * @var array
     */
    protected $allowed;

    /**
     * @var array
     */
    protected $properties;

    /**
     * @var string
     */
    protected $type;

    /**
     * {@inheritdoc}
     */
    public function __call( $method, array $arguments )
    {
        if( !in_array( $method, $this->allowed )) {
            throw new InvalidProperty;
        }
        $argument = isset( $arguments[0] ) ? $arguments[0] : '';
        return $this->setProperty( $method, $argument );
    }

    public function __construct( $type = null )
    {
        $this->type = $type;
        $this->allowed = [];
        $this->properties = [];
        $this->setAllowedProperties();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->toScript();
    }

    /**
     * @param bool $condition
     * @param callable $callback
     * @return $this
     */
    public function doif( $condition, callable $callback )
    {
        if( $condition ) {
            $callback( $this );
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param string $property
     * @param null $default
     * @return mixed|null
     */
    public function getProperty( $property, $default = null )
    {
        return isset( $this->properties[$property] )
            ? $this->properties[$property]
            : $default;
    }

    /**
     * @return string
     */
    public function getType()
    {
        if( !empty( $this->type ) && is_string( $this->type )) {
            return $this->type;
        }
        $type = ( new ReflectionClass( $this ))->getShortName();
        return $type == 'Unknown'
            ? 'Thing'
            : $type;
    }

    /**
     * @return void
     */
    public function setAllowedProperties()
    {
        $this->allowed = static::PROPERTIES;
        $parent = get_parent_class( $this );
        while( $parent ) {
            $this->allowed = array_values( array_unique( array_merge( $parent::PROPERTIES, $this->allowed )));
            $parent = get_parent_class( $parent );
        }
    }

    /**
     * @param string $property
     * @param $value
     * @return $this
     */
    public function setProperty( $property, $value )
    {
        // if( !empty( $value )) {
            $this->properties[$property] = $value;
        // }
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            '@context' => static::CONTEXT,
            '@type' => $this->getType(),
        ] + $this->serializeProperty( $this->getProperties() );
    }

    /**
     * {@inheritdoc}
     */
    public function toScript()
    {
        return sprintf( '<script type="application/ld+json">%s</script>', json_encode( $this->toArray() ));
    }

    /**
     * @param $property
     * @return array
     * @throws InvalidProperty
     */
    protected function serializeProperty( $property )
    {
        if( is_array( $property )) {
            return array_map( [$this, 'serializeProperty'], $property );
        }
        if( $property instanceof Type ) {
            $property = $property->toArray();
            unset( $property['@context'] );
        }
        if( $property instanceof DateTimeInterface ) {
            $property = $property->format( DateTime::ISO8601 );
        }
        if( is_object( $property )) {
            throw new InvalidProperty;
        }
        return $property;
    }
}
