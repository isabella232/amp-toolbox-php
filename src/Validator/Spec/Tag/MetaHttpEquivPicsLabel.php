<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class MetaHttpEquivPicsLabel extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::META,
        SpecRule::SPEC_NAME => 'meta http-equiv=pics-label',
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'content',
                SpecRule::MANDATORY => true,
            ],
            [
                SpecRule::NAME => 'http-equiv',
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'pics-label',
                ],
            ],
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#html-tags',
        SpecRule::MANDATORY_ANCESTOR => Element::HEAD,
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
