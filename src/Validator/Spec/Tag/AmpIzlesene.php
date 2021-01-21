<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class AmpIzlesene
{
    const SPEC = "[\nSpecRule::TAG_NAME => Extension::IZLESENE,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::DATA_VIDEOID,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE_REGEX => '[0-9]+',\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'extended-amp-global',\n            ],\nSpecRule::AMP_LAYOUT => [\n                'supportedLayouts' => [\n                    Layout::FILL,\n                    Layout::FIXED,\n                    Layout::FIXED_HEIGHT,\n                    Layout::FLEX_ITEM,\n                    Layout::RESPONSIVE,\n                ],\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-izlesene',\n            ],\n];";
}