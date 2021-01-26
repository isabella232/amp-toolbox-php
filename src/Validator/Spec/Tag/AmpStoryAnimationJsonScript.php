<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpStoryAnimationJsonScript extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::SPEC_NAME => 'amp-story-animation json script',
        SpecRule::MANDATORY_PARENT => Extension::STORY_ANIMATION,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'type',
                SpecRule::MANDATORY => true,
                SpecRule::DISPATCH_KEY => 'NAME_VALUE_PARENT_DISPATCH',
                SpecRule::VALUE_CASEI => [
                    'application/json',
                ],
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'nonce-attr',
        ],
        SpecRule::CDATA => [
            SpecRule::DISALLOWED_CDATA_REGEX => [
                [
                    'regex' => '<!--',
                    'errorMessage' => 'html comments',
                ],
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
        ],
        SpecRule::SATISFIES => [
            'amp-story-animation json script',
        ],
    ];
}
