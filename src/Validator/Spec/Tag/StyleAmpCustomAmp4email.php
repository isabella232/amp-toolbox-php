<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class StyleAmpCustomAmp4email
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::STYLE,\nSpecRule::SPEC_NAME => 'style amp-custom (AMP4EMAIL)',\nSpecRule::UNIQUE => true,\nSpecRule::MANDATORY_PARENT => Element::HEAD,\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::AMP_CUSTOM,\n        SpecRule::MANDATORY => true,\n        SpecRule::VALUE => [\n                        '',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::TYPE,\n        SpecRule::VALUE_CASEI => [\n                        'text/css',\n                    ],\n    ],\n],\nSpecRule::SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/email-spec/amp-email-css',\nSpecRule::CDATA => [\n                SpecRule::MAX_BYTES => 75000,\n                SpecRule::MAX_BYTES_SPEC_URL => 'https://amp.dev/documentation/guides-and-tutorials/learn/spec/amphtml/#maximum-size',\n                SpecRule::DISALLOWED_CDATA_REGEX => [\n                    [\n                        'regex' => '<!--',\n                        'errorMessage' => 'html comments',\n                    ],\n                    [\n                        'regex' => '(^|\\W)i-amphtml-',\n                        'errorMessage' => 'CSS i-amphtml- name prefix',\n                    ],\n                ],\n                SpecRule::CSS_SPEC => [\n                    'atRuleSpec' => [\n                        [\n                            'name' => 'media',\n                            'mediaQuerySpec' => [\n                                'issuesAsError' => true,\n                                'type' => [\n                                    'all',\n                                    'screen',\n                                ],\n                                'feature' => [\n                                    'device-width',\n                                    'hover',\n                                    'max-device-width',\n                                    'max-resolution',\n                                    'max-width',\n                                    'min-device-width',\n                                    'min-resolution',\n                                    'min-width',\n                                    'orientation',\n                                    'pointer',\n                                    'resolution',\n                                    'width',\n                                ],\n                            ],\n                        ],\n                        [\n                            'name' => 'page',\n                        ],\n                    ],\n                ],\n                SpecRule::DOC_CSS_BYTES => true,\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP4EMAIL,\n            ],\nSpecRule::DISABLED_BY => [\n                'data-css-strict',\n            ],\nSpecRule::DESCRIPTIVE_NAME => 'style amp-custom',\n];";
}