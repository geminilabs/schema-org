<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A listing that describes a job opening in a certain organization.
 *
 * @see http://schema.org/JobPosting
 *
 * @method static baseSalary( float|int|PriceSpecification|MonetaryAmount $baseSalary )
 * @method static benefits( string $benefits )
 * @method static jobBenefits( string $jobBenefits )
 * @method static datePosted( \DateTimeInterface $datePosted )
 * @method static educationRequirements( string $educationRequirements )
 * @method static employmentType( string $employmentType )
 * @method static experienceRequirements( string $experienceRequirements )
 * @method static hiringOrganization( Organization $hiringOrganization )
 * @method static incentives( string $incentives )
 * @method static incentiveCompensation( string $incentiveCompensation )
 * @method static industry( string $industry )
 * @method static jobLocation( Place $jobLocation )
 * @method static occupationalCategory( string $occupationalCategory )
 * @method static qualifications( string $qualifications )
 * @method static responsibilities( string $responsibilities )
 * @method static salaryCurrency( string $salaryCurrency )
 * @method static skills( string $skills )
 * @method static specialCommitments( string $specialCommitments )
 * @method static title( string $title )
 * @method static validThrough( \DateTimeInterface $validThrough )
 * @method static workHours( string $workHours )
 */
class JobPosting extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'baseSalary',
        'benefits',
        'jobBenefits',
        'datePosted',
        'educationRequirements',
        'employmentType',
        'experienceRequirements',
        'hiringOrganization',
        'incentives',
        'incentiveCompensation',
        'industry',
        'jobLocation',
        'occupationalCategory',
        'qualifications',
        'responsibilities',
        'salaryCurrency',
        'skills',
        'specialCommitments',
        'title',
        'validThrough',
        'workHours',
    ];
}
