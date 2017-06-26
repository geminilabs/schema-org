<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A vehicle is a device that is designed or used to transport people or cargo over land, water,
 * air, or through space.
 *
 * @see http://schema.org/Vehicle
 *
 * @method static numberOfDoors( QuantitativeValue|float|int $numberOfDoors )
 * @method static numberOfAirbags( float|int|string $numberOfAirbags )
 * @method static numberOfAxles( QuantitativeValue|float|int $numberOfAxles )
 * @method static vehicleEngine( EngineSpecification $vehicleEngine )
 * @method static fuelConsumption( QuantitativeValue $fuelConsumption )
 * @method static fuelEfficiency( QuantitativeValue $fuelEfficiency )
 * @method static numberOfForwardGears( QuantitativeValue|float|int $numberOfForwardGears )
 * @method static vehicleIdentificationNumber( string $vehicleIdentificationNumber )
 * @method static cargoVolume( QuantitativeValue $cargoVolume )
 * @method static vehicleConfiguration( string $vehicleConfiguration )
 * @method static knownVehicleDamages( string $knownVehicleDamages )
 * @method static dateVehicleFirstRegistered( \DateTimeInterface $dateVehicleFirstRegistered )
 * @method static driveWheelConfiguration( DriveWheelConfigurationValue|string $driveWheelConfiguration )
 * @method static fuelType( string|QualitativeValue $fuelType )
 * @method static vehicleInteriorColor( string $vehicleInteriorColor )
 * @method static vehicleInteriorType( string $vehicleInteriorType )
 * @method static mileageFromOdometer( QuantitativeValue $mileageFromOdometer )
 * @method static vehicleModelDate( \DateTimeInterface $vehicleModelDate )
 * @method static numberOfPreviousOwners( QuantitativeValue|float|int $numberOfPreviousOwners )
 * @method static productionDate( \DateTimeInterface $productionDate )
 * @method static purchaseDate( \DateTimeInterface $purchaseDate )
 * @method static vehicleSeatingCapacity( QuantitativeValue|float|int $vehicleSeatingCapacity )
 * @method static vehicleTransmission( string|QualitativeValue $vehicleTransmission )
 * @method static steeringPosition( SteeringPositionValue $steeringPosition )
 * @method static vehicleSpecialUsage( string $vehicleSpecialUsage )
 */
class Vehicle extends Product
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'numberOfDoors',
        'numberOfAirbags',
        'numberOfAxles',
        'vehicleEngine',
        'fuelConsumption',
        'fuelEfficiency',
        'numberOfForwardGears',
        'vehicleIdentificationNumber',
        'cargoVolume',
        'vehicleConfiguration',
        'knownVehicleDamages',
        'dateVehicleFirstRegistered',
        'driveWheelConfiguration',
        'fuelType',
        'vehicleInteriorColor',
        'vehicleInteriorType',
        'mileageFromOdometer',
        'vehicleModelDate',
        'numberOfPreviousOwners',
        'productionDate',
        'purchaseDate',
        'vehicleSeatingCapacity',
        'vehicleTransmission',
        'steeringPosition',
        'vehicleSpecialUsage',
    ];
}
