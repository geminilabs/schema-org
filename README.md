# Fork of spatie/schema-org

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

`geminilabs/schema-org` provides a fluent builder for **all** Schema.org types and their properties. The code in `src` is generated from Schema.org's [RFDa standards file](https://github.com/schemaorg/schemaorg/blob/sdo-callisto/data/schema.rdfa), so it provides objects and methods for the entire core vocabulary.

```php
use GeminiLabs\SchemaOrg\Schema;

$localBusiness = Schema::localBusiness()
    ->name('Gemini Labs')
    ->email('info@geminilabs.io')
    ->contactPoint(Schema::contactPoint()->areaServed('Worldwide'));

$localBusiness->toScript();
```

```html
<script type="application/ld+json">
{
    "@context": "http:\/\/schema.org",
    "@type": "LocalBusiness",
    "name": "Gemini Labs",
    "email": "info@geminilabs.io",
    "contactPoint": {
        "@type": "ContactPoint",
        "areaServed": "Worldwide"
    }
}
</script>
```

## Installation

You can install the package via composer:

Add the fork repository to your `composer.json`'s `repositories` section:
```json
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/geminilabs/schema-org.git"
    }
  ],
```

After that you can require the geminilabs version with the [alias pattern](https://getcomposer.org/doc/articles/aliases.md) like this:
```bash
composer require geminilabs/schema-org:"dev-master as 1.3.0"
```

## Usage

There's no full API documentation for types and properties. You can refer to [the schema.org website](http://schema.org).

I recommended double checking your structured data with [Google's structured data testing tool](https://search.google.com/structured-data/testing-tool).

For the original documentation please refer to [spatie/schema-org](https://github.com/spatie/schema-org).

## Known Issues

Please refer to the original [spatie/schema-org](https://github.com/spatie/schema-org) package for all known issues.

## Changes

* Added `Unknown` type
* Changed generator templates to produce PHP5 compatible code
* Changed generator templates to use magic methods to set properties
* Changed `BaseType->if()` to `BaseType->doIf()`
* Disabled ability to set an unknown property via the magic `__call` method

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
