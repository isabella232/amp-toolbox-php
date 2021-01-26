<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpBeopinion extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::BEOPINION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-account',
                SpecRule::MANDATORY => true,
                SpecRule::VALUE_REGEX_CASEI => '[0-9a-f]{24}',
            ],
            [
                SpecRule::NAME => 'data-content',
                SpecRule::VALUE_REGEX_CASEI => '[0-9a-f]{24}',
            ],
            [
                SpecRule::NAME => 'data-my-content',
                SpecRule::VALUE => [
                    '0',
                    '1',
                ],
            ],
            [
                SpecRule::NAME => 'data-name',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::BEOPINION,
        ],
    ];
}
