<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "content/accordion";

// ################## Component Documentation ##################
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Usage Example ##################
$basicAccordion = wrapExampleCode(<<<'CODE'
// Basic accordion example
echo ThemedComponent::make($component)
    ->id('basicAccordion')
    ->items([
        [
            'title' => 'Accordion Item #1',
            'content' => 'This is the first item\'s accordion body.',
            'show' => true
        ],
        [
            'title' => 'Accordion Item #2',
            'content' => 'This is the second item\'s accordion body.'
        ],
        [
            'title' => 'Accordion Item #3',
            'content' => 'This is the third item\'s accordion body.'
        ]
    ])
    ->render();
CODE);

$basicAccordion .= ThemedComponent::make($component)
    ->id('basicAccordion')
    ->items([
        [
            'title' => 'Accordion Item #1',
            'content' => 'This is the first item\'s accordion body.',
            'show' => true
        ],
        [
            'title' => 'Accordion Item #2',
            'content' => 'This is the second item\'s accordion body.'
        ],
        [
            'title' => 'Accordion Item #3',
            'content' => 'This is the third item\'s accordion body.'
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Accordion Usage')
    ->subtitle('Shows a simple accordion with three items, first item expanded by default')
    ->content($basicAccordion)
    ->render();

// ################## Advanced Features ##################
$advancedAccordion = wrapExampleCode(<<<'CODE'
// Advanced accordion with styling and icons
echo ThemedComponent::make($component)
    ->id('advancedAccordion')
    ->flush(true)
    ->always_open(true)
    ->items([
        [
            'title' => 'Primary Header',
            'content' => 'Content with primary colored header.',
            'header_variant' => 'primary',
            'header_icon' => 'bi bi-star'
        ],
        [
            'title' => 'Secondary Header',
            'content' => 'Content with secondary colored header.',
            'header_variant' => 'secondary',
            'header_icon' => 'bi bi-heart'
        ],
        [
            'title' => 'Success Header',
            'content' => 'Content with success colored header.',
            'header_variant' => 'success',
            'header_icon' => 'bi bi-check-circle'
        ]
    ])
    ->render();
CODE);

$advancedAccordion .= ThemedComponent::make($component)
    ->id('advancedAccordion')
    ->flush(true)
    ->always_open(true)
    ->items([
        [
            'title' => 'Primary Header',
            'content' => 'Content with primary colored header.',
            'header_variant' => 'primary',
            'header_icon' => 'bi bi-star'
        ],
        [
            'title' => 'Secondary Header',
            'content' => 'Content with secondary colored header.',
            'header_variant' => 'secondary',
            'header_icon' => 'bi bi-heart'
        ],
        [
            'title' => 'Success Header',
            'content' => 'Content with success colored header.',
            'header_variant' => 'success',
            'header_icon' => 'bi bi-check-circle'
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced Accordion Features')
    ->subtitle('Demonstrates flush style, always-open behavior, colored headers, and icons')
    ->content($advancedAccordion)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;
