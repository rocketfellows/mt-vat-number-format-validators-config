<?php

namespace rocketfellows\MTVatNumberFormatValidatorsConfig;

use arslanimamutdinov\ISOStandard3166\Country;
use arslanimamutdinov\ISOStandard3166\ISO3166;
use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface;
use rocketfellows\MTVatFormatValidator\MTVatFormatValidator;
use rocketfellows\SpecificCountryVatNumberFormatValidatorsConfig\SpecificCountryVatNumberFormatValidatorsConfig;

class MTVatNumberFormatValidatorsConfig extends SpecificCountryVatNumberFormatValidatorsConfig
{
    public function getCountry(): Country
    {
        return ISO3166::MT();
    }

    protected function getDefaultValidator(): CountryVatFormatValidatorInterface
    {
        return new MTVatFormatValidator();
    }
}
