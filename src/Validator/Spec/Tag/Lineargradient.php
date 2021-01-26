<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class Lineargradient extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::LINEARGRADIENT,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => Attribute::EXTERNALRESOURCESREQUIRED,
            ],
            [
                SpecRule::NAME => Attribute::GRADIENTTRANSFORM,
            ],
            [
                SpecRule::NAME => Attribute::GRADIENTUNITS,
            ],
            [
                SpecRule::NAME => Attribute::SPREADMETHOD,
            ],
            [
                SpecRule::NAME => Attribute::X1,
            ],
            [
                SpecRule::NAME => Attribute::X2,
            ],
            [
                SpecRule::NAME => Attribute::Y1,
            ],
            [
                SpecRule::NAME => Attribute::Y2,
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'svg-core-attributes',
            'svg-presentation-attributes',
            'svg-style-attr',
            'svg-xlink-attributes',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#svg',
        SpecRule::MANDATORY_ANCESTOR => Element::SVG,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
