<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Section;

use AmpProject\Attribute;
use AmpProject\Exception\InvalidListName;
use AmpProject\Validator\Spec;
use AmpProject\Validator\Spec\SpecRule;

final class DeclarationLists
{
    /** @var array<Spec\DeclarationList> */
    private $declarations;

    public function __construct()
    {
        $this->declarations = [
            'BASIC_DECLARATIONS' => new Spec\DeclarationList(
                [
                    Attribute::ALIGN_CONTENT => [],
                    Attribute::ALIGN_ITEMS => [],
                    Attribute::ALIGN_SELF => [],
                    Attribute::ALL => [],
                    Attribute::ANIMATION => [],
                    Attribute::ANIMATION_DELAY => [],
                    Attribute::ANIMATION_DIRECTION => [],
                    Attribute::ANIMATION_DURATION => [],
                    Attribute::ANIMATION_FILL_MODE => [],
                    Attribute::ANIMATION_ITERATION_COUNT => [],
                    Attribute::ANIMATION_NAME => [],
                    Attribute::ANIMATION_PLAY_STATE => [],
                    Attribute::ANIMATION_TIMING_FUNCTION => [],
                    Attribute::BACKFACE_VISIBILITY => [],
                    Attribute::BACKGROUND => [],
                    Attribute::BACKGROUND_ATTACHMENT => [],
                    Attribute::BACKGROUND_BLEND_MODE => [],
                    Attribute::BACKGROUND_CLIP => [],
                    Attribute::BACKGROUND_COLOR => [],
                    Attribute::BACKGROUND_IMAGE => [],
                    Attribute::BACKGROUND_ORIGIN => [],
                    Attribute::BACKGROUND_POSITION => [],
                    Attribute::BACKGROUND_REPEAT => [],
                    Attribute::BACKGROUND_SIZE => [],
                    Attribute::BORDER => [],
                    Attribute::BORDER_BOTTOM => [],
                    Attribute::BORDER_BOTTOM_COLOR => [],
                    Attribute::BORDER_BOTTOM_LEFT_RADIUS => [],
                    Attribute::BORDER_BOTTOM_RIGHT_RADIUS => [],
                    Attribute::BORDER_BOTTOM_STYLE => [],
                    Attribute::BORDER_BOTTOM_WIDTH => [],
                    Attribute::BORDER_COLLAPSE => [],
                    Attribute::BORDER_COLOR => [],
                    Attribute::BORDER_IMAGE => [],
                    Attribute::BORDER_IMAGE_OUTSET => [],
                    Attribute::BORDER_IMAGE_REPEAT => [],
                    Attribute::BORDER_IMAGE_SLICE => [],
                    Attribute::BORDER_IMAGE_SOURCE => [],
                    Attribute::BORDER_IMAGE_WIDTH => [],
                    Attribute::BORDER_LEFT => [],
                    Attribute::BORDER_LEFT_COLOR => [],
                    Attribute::BORDER_LEFT_STYLE => [],
                    Attribute::BORDER_LEFT_WIDTH => [],
                    Attribute::BORDER_RADIUS => [],
                    Attribute::BORDER_RIGHT => [],
                    Attribute::BORDER_RIGHT_COLOR => [],
                    Attribute::BORDER_RIGHT_STYLE => [],
                    Attribute::BORDER_RIGHT_WIDTH => [],
                    Attribute::BORDER_SPACING => [],
                    Attribute::BORDER_STYLE => [],
                    Attribute::BORDER_TOP => [],
                    Attribute::BORDER_TOP_COLOR => [],
                    Attribute::BORDER_TOP_LEFT_RADIUS => [],
                    Attribute::BORDER_TOP_RIGHT_RADIUS => [],
                    Attribute::BORDER_TOP_STYLE => [],
                    Attribute::BORDER_TOP_WIDTH => [],
                    Attribute::BORDER_WIDTH => [],
                    Attribute::BOTTOM => [],
                    Attribute::BOX_DECORATION_BREAK => [],
                    Attribute::BOX_SHADOW => [],
                    Attribute::BOX_SIZING => [],
                    Attribute::BREAK_AFTER => [],
                    Attribute::BREAK_BEFORE => [],
                    Attribute::BREAK_INSIDE => [],
                    Attribute::CAPTION_SIDE => [],
                    Attribute::CARET_COLOR => [],
                    Attribute::CLEAR => [],
                    Attribute::CLIP => [],
                    Attribute::COLOR => [],
                    Attribute::COLUMN_COUNT => [],
                    Attribute::COLUMN_FILL => [],
                    Attribute::COLUMN_GAP => [],
                    Attribute::COLUMN_RULE => [],
                    Attribute::COLUMN_RULE_COLOR => [],
                    Attribute::COLUMN_RULE_STYLE => [],
                    Attribute::COLUMN_RULE_WIDTH => [],
                    Attribute::COLUMN_SPAN => [],
                    Attribute::COLUMN_WIDTH => [],
                    Attribute::COLUMNS => [],
                    Attribute::CONTENT => [],
                    Attribute::COUNTER_INCREMENT => [],
                    Attribute::COUNTER_RESET => [],
                    Attribute::CURSOR => [],
                    Attribute::DIRECTION => [],
                    Attribute::DISPLAY => [],
                    Attribute::EMPTY_CELLS => [],
                    Attribute::FILTER => [],
                    Attribute::FLEX => [],
                    Attribute::FLEX_BASIS => [],
                    Attribute::FLEX_DIRECTION => [],
                    Attribute::FLEX_FLOW => [],
                    Attribute::FLEX_GROW => [],
                    Attribute::FLEX_SHRINK => [],
                    Attribute::FLEX_WRAP => [],
                    Attribute::FLOAT => [],
                    Attribute::FONT => [],
                    Attribute::FONT_FAMILY => [],
                    Attribute::FONT_FEATURE_SETTINGS => [],
                    Attribute::FONT_KERNING => [],
                    Attribute::FONT_LANGUAGE_OVERRIDE => [],
                    Attribute::FONT_SIZE => [],
                    Attribute::FONT_SIZE_ADJUST => [],
                    Attribute::FONT_STRETCH => [],
                    Attribute::FONT_STYLE => [],
                    Attribute::FONT_SYNTHESIS => [],
                    Attribute::FONT_VARIANT => [],
                    Attribute::FONT_VARIANT_ALTERNATES => [],
                    Attribute::FONT_VARIANT_CAPS => [],
                    Attribute::FONT_VARIANT_EAST_ASIAN => [],
                    Attribute::FONT_VARIANT_LIGATURES => [],
                    Attribute::FONT_VARIANT_NUMERIC => [],
                    Attribute::FONT_VARIANT_POSITION => [],
                    Attribute::FONT_WEIGHT => [],
                    Attribute::GRID => [],
                    Attribute::GRID_AREA => [],
                    Attribute::GRID_AUTO_COLUMNS => [],
                    Attribute::GRID_AUTO_FLOW => [],
                    Attribute::GRID_AUTO_ROWS => [],
                    Attribute::GRID_COLUMN => [],
                    Attribute::GRID_COLUMN_END => [],
                    Attribute::GRID_COLUMN_GAP => [],
                    Attribute::GRID_COLUMN_START => [],
                    Attribute::GRID_GAP => [],
                    Attribute::GRID_ROW => [],
                    Attribute::GRID_ROW_END => [],
                    Attribute::GRID_ROW_GAP => [],
                    Attribute::GRID_ROW_START => [],
                    Attribute::GRID_TEMPLATE => [],
                    Attribute::GRID_TEMPLATE_AREAS => [],
                    Attribute::GRID_TEMPLATE_COLUMNS => [],
                    Attribute::GRID_TEMPLATE_ROWS => [],
                    Attribute::HANGING_PUNCTUATION => [],
                    Attribute::HEIGHT => [],
                    Attribute::HYPHENS => [],
                    Attribute::IMAGE_RENDERING => [],
                    Attribute::ISOLATION => [],
                    Attribute::JUSTIFY_CONTENT => [],
                    Attribute::LEFT => [],
                    Attribute::LETTER_SPACING => [],
                    Attribute::LINE_BREAK => [],
                    Attribute::LINE_HEIGHT => [],
                    Attribute::LIST_STYLE => [],
                    Attribute::LIST_STYLE_IMAGE => [],
                    Attribute::LIST_STYLE_POSITION => [],
                    Attribute::LIST_STYLE_TYPE => [],
                    Attribute::MARGIN => [],
                    Attribute::MARGIN_BOTTOM => [],
                    Attribute::MARGIN_LEFT => [],
                    Attribute::MARGIN_RIGHT => [],
                    Attribute::MARGIN_TOP => [],
                    Attribute::MAX_HEIGHT => [],
                    Attribute::MAX_WIDTH => [],
                    Attribute::MIN_HEIGHT => [],
                    Attribute::MIN_WIDTH => [],
                    Attribute::MIX_BLEND_MODE => [],
                    Attribute::OBJECT_FIT => [],
                    Attribute::OBJECT_POSITION => [],
                    Attribute::OPACITY => [],
                    Attribute::ORDER => [],
                    Attribute::ORPHANS => [],
                    Attribute::OUTLINE => [],
                    Attribute::OUTLINE_COLOR => [],
                    Attribute::OUTLINE_OFFSET => [],
                    Attribute::OUTLINE_STYLE => [],
                    Attribute::OUTLINE_WIDTH => [],
                    Attribute::OVERFLOW => [],
                    Attribute::OVERFLOW_WRAP => [],
                    Attribute::OVERFLOW_X => [],
                    Attribute::OVERFLOW_Y => [],
                    Attribute::PADDING => [],
                    Attribute::PADDING_BOTTOM => [],
                    Attribute::PADDING_LEFT => [],
                    Attribute::PADDING_RIGHT => [],
                    Attribute::PADDING_TOP => [],
                    Attribute::PAGE_BREAK_AFTER => [],
                    Attribute::PAGE_BREAK_BEFORE => [],
                    Attribute::PAGE_BREAK_INSIDE => [],
                    Attribute::PERSPECTIVE => [],
                    Attribute::PERSPECTIVE_ORIGIN => [],
                    Attribute::POINTER_EVENTS => [],
                    Attribute::POSITION => [
                        SpecRule::VALUE_CASEI => [
                            'absolute',
                            'inherit',
                            'initial',
                            'relative',
                            'static',
                        ]
                    ],
                    Attribute::QUOTES => [],
                    Attribute::RESIZE => [],
                    Attribute::RIGHT => [],
                    Attribute::TAB_SIZE => [],
                    Attribute::TABLE_LAYOUT => [],
                    Attribute::TEXT_ALIGN => [],
                    Attribute::TEXT_ALIGN_LAST => [],
                    Attribute::TEXT_COMBINE_UPRIGHT => [],
                    Attribute::TEXT_DECORATION => [],
                    Attribute::TEXT_DECORATION_COLOR => [],
                    Attribute::TEXT_DECORATION_LINE => [],
                    Attribute::TEXT_DECORATION_SKIP_INK => [],
                    Attribute::TEXT_DECORATION_STYLE => [],
                    Attribute::TEXT_FILL_COLOR => [],
                    Attribute::TEXT_INDENT => [],
                    Attribute::TEXT_JUSTIFY => [],
                    Attribute::TEXT_ORIENTATION => [],
                    Attribute::TEXT_OVERFLOW => [],
                    Attribute::TEXT_SHADOW => [],
                    Attribute::TEXT_STROKE => [],
                    Attribute::TEXT_STROKE_COLOR => [],
                    Attribute::TEXT_STROKE_WIDTH => [],
                    Attribute::TEXT_TRANSFORM => [],
                    Attribute::TEXT_UNDERLINE_POSITION => [],
                    Attribute::TOP => [],
                    Attribute::TRANSFORM => [],
                    Attribute::TRANSFORM_ORIGIN => [],
                    Attribute::TRANSFORM_STYLE => [],
                    Attribute::TRANSITION => [],
                    Attribute::TRANSITION_DELAY => [],
                    Attribute::TRANSITION_DURATION => [],
                    Attribute::TRANSITION_PROPERTY => [],
                    Attribute::TRANSITION_TIMING_FUNCTION => [],
                    Attribute::UNICODE_BIDI => [],
                    Attribute::USER_SELECT => [],
                    Attribute::VERTICAL_ALIGN => [],
                    Attribute::VISIBILITY => [],
                    Attribute::WHITE_SPACE => [],
                    Attribute::WIDOWS => [],
                    Attribute::WIDTH => [],
                    Attribute::WORD_BREAK => [],
                    Attribute::WORD_SPACING => [],
                    Attribute::WORD_WRAP => [],
                    Attribute::WRITING_MODE => [],
                    Attribute::Z_INDEX => [
                        SpecRule::VALUE_REGEX_CASEI => 'auto|initial|inherit|[-+]?[0-9]+'
                    ],
                ]
            ),
            'SVG_BASIC_DECLARATIONS' => new Spec\DeclarationList(
                [
                    Attribute::ALIGNMENT_BASELINE => [],
                    Attribute::BASELINE_SHIFT => [],
                    Attribute::CLIP_PATH => [],
                    Attribute::CLIP_RULE => [],
                    Attribute::COLOR_INTERPOLATION => [],
                    Attribute::COLOR_INTERPOLATION_FILTERS => [],
                    Attribute::COLOR_PROFILE => [],
                    Attribute::COLOR_RENDERING => [],
                    Attribute::DOMINANT_BASELINE => [],
                    Attribute::ENABLE_BACKGROUND => [],
                    Attribute::FILL => [],
                    Attribute::FILL_OPACITY => [],
                    Attribute::FILL_RULE => [],
                    Attribute::FLOOD_COLOR => [],
                    Attribute::FLOOD_OPACITY => [],
                    Attribute::GLYPH_ORIENTATION_HORIZONTAL => [],
                    Attribute::GLYPH_ORIENTATION_VERTICAL => [],
                    Attribute::KERNING => [],
                    Attribute::LIGHTING_COLOR => [],
                    Attribute::MARKER => [],
                    Attribute::MARKER_END => [],
                    Attribute::MARKER_MID => [],
                    Attribute::MARKER_START => [],
                    Attribute::MASK => [],
                    Attribute::SHAPE_RENDERING => [],
                    Attribute::STOP_COLOR => [],
                    Attribute::STOP_OPACITY => [],
                    Attribute::STROKE => [],
                    Attribute::STROKE_DASHARRAY => [],
                    Attribute::STROKE_DASHOFFSET => [],
                    Attribute::STROKE_LINECAP => [],
                    Attribute::STROKE_LINEJOIN => [],
                    Attribute::STROKE_MITERLIMIT => [],
                    Attribute::STROKE_OPACITY => [],
                    Attribute::STROKE_WIDTH => [],
                    Attribute::TEXT_ANCHOR => [],
                    Attribute::TEXT_RENDERING => [],
                ]
            ),
            'AMP_ONLY_DECLARATIONS' => new Spec\DeclarationList(
                [
                    Attribute::CLIP_PATH => [],
                ]
            ),
            'EMAIL_SPECIFIC_DECLARATIONS' => new Spec\DeclarationList(
                [
                    Attribute::_MOZ_APPEARANCE => [],
                    Attribute::_WEBKIT_APPEARANCE => [],
                    Attribute::_WEBKIT_TAP_HIGHLIGHT_COLOR => [],
                    Attribute::ALIGN_CONTENT => [],
                    Attribute::ALIGN_ITEMS => [],
                    Attribute::ALIGN_SELF => [],
                    Attribute::APPEARANCE => [],
                    Attribute::AZIMUTH => [],
                    Attribute::BACKGROUND => [],
                    Attribute::BACKGROUND_ATTACHMENT => [],
                    Attribute::BACKGROUND_BLEND_MODE => [],
                    Attribute::BACKGROUND_CLIP => [],
                    Attribute::BACKGROUND_COLOR => [],
                    Attribute::BACKGROUND_IMAGE => [],
                    Attribute::BACKGROUND_ORIGIN => [],
                    Attribute::BACKGROUND_POSITION => [],
                    Attribute::BACKGROUND_REPEAT => [],
                    Attribute::BACKGROUND_SIZE => [],
                    Attribute::BORDER => [],
                    Attribute::BORDER_BOTTOM => [],
                    Attribute::BORDER_BOTTOM_COLOR => [],
                    Attribute::BORDER_BOTTOM_LEFT_RADIUS => [],
                    Attribute::BORDER_BOTTOM_RIGHT_RADIUS => [],
                    Attribute::BORDER_BOTTOM_STYLE => [],
                    Attribute::BORDER_BOTTOM_WIDTH => [],
                    Attribute::BORDER_COLLAPSE => [],
                    Attribute::BORDER_COLOR => [],
                    Attribute::BORDER_LEFT => [],
                    Attribute::BORDER_LEFT_COLOR => [],
                    Attribute::BORDER_LEFT_STYLE => [],
                    Attribute::BORDER_LEFT_WIDTH => [],
                    Attribute::BORDER_RADIUS => [],
                    Attribute::BORDER_RIGHT => [],
                    Attribute::BORDER_RIGHT_COLOR => [],
                    Attribute::BORDER_RIGHT_STYLE => [],
                    Attribute::BORDER_RIGHT_WIDTH => [],
                    Attribute::BORDER_SPACING => [],
                    Attribute::BORDER_STYLE => [],
                    Attribute::BORDER_TOP => [],
                    Attribute::BORDER_TOP_COLOR => [],
                    Attribute::BORDER_TOP_LEFT_RADIUS => [],
                    Attribute::BORDER_TOP_RIGHT_RADIUS => [],
                    Attribute::BORDER_TOP_STYLE => [],
                    Attribute::BORDER_TOP_WIDTH => [],
                    Attribute::BORDER_WIDTH => [],
                    Attribute::BOTTOM => [],
                    Attribute::BOX_SHADOW => [],
                    Attribute::BOX_SIZING => [],
                    Attribute::BREAK_AFTER => [],
                    Attribute::BREAK_BEFORE => [],
                    Attribute::BREAK_INSIDE => [],
                    Attribute::CAPTION_SIDE => [],
                    Attribute::CARET_COLOR => [],
                    Attribute::CLEAR => [],
                    Attribute::COLOR => [],
                    Attribute::COLOR_ADJUST => [],
                    Attribute::COLUMN_COUNT => [],
                    Attribute::COLUMN_FILL => [],
                    Attribute::COLUMN_GAP => [],
                    Attribute::COLUMN_RULE => [],
                    Attribute::COLUMN_RULE_COLOR => [],
                    Attribute::COLUMN_RULE_STYLE => [],
                    Attribute::COLUMN_RULE_WIDTH => [],
                    Attribute::COLUMN_SPAN => [],
                    Attribute::COLUMN_WIDTH => [],
                    Attribute::COLUMNS => [],
                    Attribute::COUNTER_INCREMENT => [],
                    Attribute::COUNTER_RESET => [],
                    Attribute::CURSOR => [
                        SpecRule::VALUE_CASEI => [
                            'initial',
                            'pointer',
                        ]
                    ],
                    Attribute::DIRECTION => [],
                    Attribute::DISPLAY => [],
                    Attribute::ELEVATION => [],
                    Attribute::EMPTY_CELLS => [],
                    Attribute::FILTER => [
                        SpecRule::VALUE_REGEX_CASEI => '^ *((blur|brightness|contrast|drop-shadow|grayscale|hue-rotate|invert|opacity|saturate|sepia)\(([^() ]*|(rgb|rgba|hsl|hsla)\([^()]*\))( +([^() ]*|(rgb|rgba|hsl|hsla)\([^()]*\)))*\) *)*$'
                    ],
                    Attribute::FLEX => [],
                    Attribute::FLEX_BASIS => [],
                    Attribute::FLEX_DIRECTION => [],
                    Attribute::FLEX_FLOW => [],
                    Attribute::FLEX_GROW => [],
                    Attribute::FLEX_SHRINK => [],
                    Attribute::FLEX_WRAP => [],
                    Attribute::FLOAT => [],
                    Attribute::FONT => [],
                    Attribute::FONT_FAMILY => [],
                    Attribute::FONT_FEATURE_SETTINGS => [],
                    Attribute::FONT_KERNING => [],
                    Attribute::FONT_SIZE => [],
                    Attribute::FONT_SIZE_ADJUST => [],
                    Attribute::FONT_STRETCH => [],
                    Attribute::FONT_STYLE => [],
                    Attribute::FONT_SYNTHESIS => [],
                    Attribute::FONT_VARIANT => [],
                    Attribute::FONT_VARIANT_ALTERNATES => [],
                    Attribute::FONT_VARIANT_CAPS => [],
                    Attribute::FONT_VARIANT_EAST_ASIAN => [],
                    Attribute::FONT_VARIANT_LIGATURES => [],
                    Attribute::FONT_VARIANT_NUMERIC => [],
                    Attribute::FONT_VARIATION_SETTINGS => [],
                    Attribute::FONT_WEIGHT => [],
                    Attribute::GAP => [],
                    Attribute::GRID => [],
                    Attribute::GRID_AREA => [],
                    Attribute::GRID_AUTO_COLUMNS => [],
                    Attribute::GRID_AUTO_FLOW => [],
                    Attribute::GRID_AUTO_ROWS => [],
                    Attribute::GRID_COLUMN => [],
                    Attribute::GRID_COLUMN_END => [],
                    Attribute::GRID_COLUMN_START => [],
                    Attribute::GRID_ROW => [],
                    Attribute::GRID_ROW_END => [],
                    Attribute::GRID_ROW_START => [],
                    Attribute::GRID_TEMPLATE => [],
                    Attribute::GRID_TEMPLATE_AREAS => [],
                    Attribute::GRID_TEMPLATE_COLUMNS => [],
                    Attribute::GRID_TEMPLATE_ROWS => [],
                    Attribute::HEIGHT => [],
                    Attribute::HYPHENS => [],
                    Attribute::IMAGE_ORIENTATION => [],
                    Attribute::IMAGE_RESOLUTION => [],
                    Attribute::INLINE_SIZE => [],
                    Attribute::ISOLATION => [],
                    Attribute::JUSTIFY_CONTENT => [],
                    Attribute::JUSTIFY_ITEMS => [],
                    Attribute::JUSTIFY_SELF => [],
                    Attribute::LEFT => [],
                    Attribute::LETTER_SPACING => [],
                    Attribute::LINE_BREAK => [],
                    Attribute::LINE_HEIGHT => [],
                    Attribute::LIST_STYLE => [],
                    Attribute::LIST_STYLE_POSITION => [],
                    Attribute::LIST_STYLE_TYPE => [],
                    Attribute::MARGIN => [],
                    Attribute::MARGIN_BOTTOM => [],
                    Attribute::MARGIN_LEFT => [],
                    Attribute::MARGIN_RIGHT => [],
                    Attribute::MARGIN_TOP => [],
                    Attribute::MAX_HEIGHT => [],
                    Attribute::MAX_WIDTH => [],
                    Attribute::MIN_HEIGHT => [],
                    Attribute::MIN_WIDTH => [],
                    Attribute::MIX_BLEND_MODE => [],
                    Attribute::OBJECT_FIT => [],
                    Attribute::OBJECT_POSITION => [],
                    Attribute::OFFSET_DISTANCE => [],
                    Attribute::OPACITY => [],
                    Attribute::ORDER => [],
                    Attribute::OUTLINE => [],
                    Attribute::OUTLINE_COLOR => [],
                    Attribute::OUTLINE_OFFSET => [],
                    Attribute::OUTLINE_STYLE => [],
                    Attribute::OUTLINE_WIDTH => [],
                    Attribute::OVERFLOW => [],
                    Attribute::OVERFLOW_WRAP => [],
                    Attribute::OVERFLOW_X => [],
                    Attribute::OVERFLOW_Y => [],
                    Attribute::PADDING => [],
                    Attribute::PADDING_BOTTOM => [],
                    Attribute::PADDING_LEFT => [],
                    Attribute::PADDING_RIGHT => [],
                    Attribute::PADDING_TOP => [],
                    Attribute::PAUSE => [],
                    Attribute::PAUSE_AFTER => [],
                    Attribute::PAUSE_BEFORE => [],
                    Attribute::PERSPECTIVE => [],
                    Attribute::PERSPECTIVE_ORIGIN => [],
                    Attribute::PITCH => [],
                    Attribute::PITCH_RANGE => [],
                    Attribute::PLACE_ITEMS => [],
                    Attribute::POSITION => [
                        SpecRule::VALUE_CASEI => [
                            'absolute',
                            'inherit',
                            'initial',
                            'relative',
                            'static',
                        ]
                    ],
                    Attribute::QUOTES => [],
                    Attribute::RESIZE => [],
                    Attribute::RICHNESS => [],
                    Attribute::RIGHT => [],
                    Attribute::ROW_GAP => [],
                    Attribute::SPEAK => [],
                    Attribute::SPEAK_HEADER => [],
                    Attribute::SPEAK_NUMERAL => [],
                    Attribute::SPEAK_PUNCTUATION => [],
                    Attribute::SPEECH_RATE => [],
                    Attribute::STRESS => [],
                    Attribute::TABLE_LAYOUT => [],
                    Attribute::TEXT_ALIGN => [],
                    Attribute::TEXT_ALIGN_LAST => [],
                    Attribute::TEXT_COMBINE_UPRIGHT => [],
                    Attribute::TEXT_DECORATION => [],
                    Attribute::TEXT_DECORATION_COLOR => [],
                    Attribute::TEXT_DECORATION_LINE => [],
                    Attribute::TEXT_DECORATION_SKIP => [],
                    Attribute::TEXT_DECORATION_STYLE => [],
                    Attribute::TEXT_EMPHASIS => [],
                    Attribute::TEXT_EMPHASIS_COLOR => [],
                    Attribute::TEXT_EMPHASIS_POSITION => [],
                    Attribute::TEXT_EMPHASIS_STYLE => [],
                    Attribute::TEXT_INDENT => [],
                    Attribute::TEXT_JUSTIFY => [],
                    Attribute::TEXT_ORIENTATION => [],
                    Attribute::TEXT_OVERFLOW => [],
                    Attribute::TEXT_SHADOW => [],
                    Attribute::TEXT_TRANSFORM => [],
                    Attribute::TEXT_UNDERLINE_POSITION => [],
                    Attribute::TOP => [],
                    Attribute::TRANSFORM => [],
                    Attribute::TRANSFORM_BOX => [],
                    Attribute::TRANSFORM_ORIGIN => [],
                    Attribute::TRANSFORM_STYLE => [],
                    Attribute::TRANSITION => [
                        SpecRule::VALUE_REGEX_CASEI => '^ *((initial|unset)|(((none|offset-distance|opacity|transform|visibility)( *(|-|\+)([0-9]+|[0-9]*\.[0-9]+)(e(|-|\+)?[0-9]+)?(s|ms)( *(linear|(ease|ease-in|ease-out|ease-in-out|cubic-bezier\( *(|-|\+)([0-9]+|[0-9]*\.[0-9]+)(e(|-|\+)?[0-9]+)?(, *(|-|\+)([0-9]+|[0-9]*\.[0-9]+)(e(|-|\+)?[0-9]+)?){3} *\))|(step-start|step-end|steps\( *(|-|\+)[0-9]+(, *(jump-start|jump-end|jump-none|jump-both|start|end))? *\)))( *(|-|\+)([0-9]+|[0-9]*\.[0-9]+)(e(|-|\+)?[0-9]+)?(s|ms))?)?)?)(, *((none|offset-distance|opacity|transform|visibility)( *(|-|\+)([0-9]+|[0-9]*\.[0-9]+)(e(|-|\+)?[0-9]+)?(s|ms)( *(linear|(ease|ease-in|ease-out|ease-in-out|cubic-bezier\( *(|-|\+)([0-9]+|[0-9]*\.[0-9]+)(e(|-|\+)?[0-9]+)?(, *(|-|\+)([0-9]+|[0-9]*\.[0-9]+)(e(|-|\+)?[0-9]+)?){3} *\))|(step-start|step-end|steps\( *(|-|\+)[0-9]+(, *(jump-start|jump-end|jump-none|jump-both|start|end))? *\)))( *(|-|\+)([0-9]+|[0-9]*\.[0-9]+)(e(|-|\+)?[0-9]+)?(s|ms))?)?)?))*)) *$'
                    ],
                    Attribute::TRANSITION_DELAY => [],
                    Attribute::TRANSITION_DURATION => [],
                    Attribute::TRANSITION_PROPERTY => [
                        SpecRule::VALUE_REGEX_CASEI => '^ *(initial|unset|(none|offset-distance|opacity|transform|visibility)(, *(none|offset-distance|opacity|transform|visibility))*) *$'
                    ],
                    Attribute::TRANSITION_TIMING_FUNCTION => [],
                    Attribute::UNICODE_BIDI => [],
                    Attribute::VERTICAL_ALIGN => [],
                    Attribute::VISIBILITY => [
                        SpecRule::VALUE_CASEI => [
                            'hidden',
                            'initial',
                            'visible',
                        ]
                    ],
                    Attribute::VOICE_FAMILY => [],
                    Attribute::WHITE_SPACE => [],
                    Attribute::WIDTH => [],
                    Attribute::WORD_BREAK => [],
                    Attribute::WORD_SPACING => [],
                    Attribute::WORD_WRAP => [],
                    Attribute::WRITING_MODE => [],
                    Attribute::Z_INDEX => [
                        SpecRule::VALUE_REGEX_CASEI => '([-+]?0)|([-+]?100)|([-+]?[1-9][0-9]?)'
                    ],
                ]
            ),
        ];
    }

    /**
     * Get a specific declaration list.
     *
     * @param string $declarationListName Name of the declaration list to get.
     * @return Spec\DeclarationList Declaration list with the given declaration list name.
     * @throws InvalidListName If an invalid declaration list name is requested.
     */
    public function get($declarationListName)
    {
        if (!array_key_exists($declarationListName, $this->declarations)) {
            throw \AmpProject\Exception\InvalidListName::forDeclarationList($declarationListName);
        }

        return $this->declarations[$declarationListName];
    }
}
