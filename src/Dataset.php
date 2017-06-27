<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A body of structured information describing some topic(s) of interest.
 *
 * @see http://schema.org/Dataset
 *
 * @method static catalog( DataCatalog $catalog )
 * @method static includedDataCatalog( DataCatalog $includedDataCatalog )
 * @method static includedInDataCatalog( DataCatalog $includedInDataCatalog )
 * @method static distribution( DataDownload $distribution )
 * @method static spatial( Place $spatial )
 * @method static temporal( \DateTimeInterface $temporal )
 * @method static datasetTimeInterval( \DateTimeInterface $datasetTimeInterval )
 */
class Dataset extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'catalog',
        'includedDataCatalog',
        'includedInDataCatalog',
        'distribution',
        'spatial',
        'temporal',
        'datasetTimeInterval',
    ];
}
