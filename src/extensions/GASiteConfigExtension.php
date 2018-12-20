<?php

namespace Chrometoaster\GaGtmSinglefield\Extensions;

use Chrometoaster\GaGtmSinglefield\Formfields\GACodeField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

/**
 * Class GASiteConfig
 *
 * Adapted to fit the needs, originally based on https://github.com/peavers/silverstripe-google-analytics.
 */
class GASiteConfigExtension extends DataExtension
{

    private static $db = [
        'AnalyticType' => 'Varchar(5)',
        'GoogleCode'   => 'Varchar(15)',
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->findOrMakeTab('Root.GAGTM', 'GA & GTM');

        $fields->addFieldsToTab('Root.GAGTM', [
            GACodeField::create('GoogleCode', 'Google code')->setDescription('Can be either a Universal (<strong>UA-XXXXXXXX-X</strong>) or Tag manager (<strong>GTM-XXXXXX</strong>) code.'),
        ]);
    }

    /**
     *  Update the AnalyticType field with a key depending on what type of code is used.
     */
    public function onBeforeWrite()
    {
        $parts = explode("-", $this->owner->getField('GoogleCode'));

        if ($parts[0] === "GTM") {
            $this->owner->setField('AnalyticType', 'GTM');

        } else if ($parts[0] === "UA") {
            $this->owner->setField('AnalyticType', 'UA');
        }

        parent::onBeforeWrite();
    }

}
