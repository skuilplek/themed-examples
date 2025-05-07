<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "content/lists";

// ################## Component Documentation ##################
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Usage Example ##################
$basicLists = wrapExampleCode(<<<'CODE'
// Unordered list
echo ThemedComponent::make('content/lists')
    ->type('unordered')
    ->items([
        'First item',
        'Second item',
        'Third item with <strong>bold</strong> text',
        'Fourth item'
    ])
    ->render();

// Ordered list
echo ThemedComponent::make('content/lists')
    ->type('ordered')
    ->items([
        'Step one',
        'Step two',
        'Step three',
        'Step four'
    ])
    ->render();
CODE);

$basicLists .= ThemedComponent::make($component)
    ->type('unordered')
    ->items([
        'First item',
        'Second item',
        'Third item with <strong>bold</strong> text',
        'Fourth item'
    ])
    ->render();

$basicLists .= ThemedComponent::make($component)
    ->type('ordered')
    ->items([
        'Step one',
        'Step two',
        'Step three',
        'Step four'
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Lists')
    ->subtitle('Simple unordered and ordered lists')
    ->content($basicLists)
    ->render();

// ################## Advanced Features ##################
$advancedLists = wrapExampleCode(<<<'CODE'
// Unstyled list
echo ThemedComponent::make('content/lists')
    ->type('unstyled')
    ->items([
        'No bullets or numbers',
        'Clean and minimal',
        'Great for custom styling'
    ])
    ->render();

// Description list
echo ThemedComponent::make('content/lists')
    ->type('description')
    ->terms([
        'HTML',
        'CSS',
        'JavaScript'
    ])
    ->descriptions([
        'The structure of web pages',
        'The styling language for web pages',
        'The programming language of the web'
    ])
    ->horizontal(true)
    ->breakpoint('md')
    ->render();
CODE);

$advancedLists .= ThemedComponent::make($component)
    ->type('unstyled')
    ->items([
        'No bullets or numbers',
        'Clean and minimal',
        'Great for custom styling'
    ])
    ->render();

$advancedLists .= ThemedComponent::make($component)
    ->type('description')
    ->terms([
        'HTML',
        'CSS',
        'JavaScript'
    ])
    ->descriptions([
        'The structure of web pages',
        'The styling language for web pages',
        'The programming language of the web'
    ])
    ->horizontal(true)
    ->breakpoint('md')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced List Features')
    ->subtitle('Unstyled and description lists with custom layouts')
    ->content($advancedLists)
    ->render();

// ################## List Variations ##################
$listVariations = wrapExampleCode(<<<'CODE'
// Inline list with separator
echo ThemedComponent::make('content/lists')
    ->type('inline')
    ->items([
        'Home',
        'Products',
        'Services',
        'Contact'
    ])
    ->separator(' | ')
    ->render();

// Custom styled list
echo ThemedComponent::make('content/lists')
    ->type('unordered')
    ->items([
        '<span class="text-primary">Primary text</span>',
        '<span class="text-success">Success text</span>',
        '<span class="text-danger">Danger text</span>'
    ])
    ->class('text-large')
    ->render();
CODE);

$listVariations .= ThemedComponent::make($component)
    ->type('inline')
    ->items([
        'Home',
        'Products',
        'Services',
        'Contact'
    ])
    ->separator(' | ')
    ->render();

$listVariations .= '<div class="mt-4">';
$listVariations .= ThemedComponent::make($component)
    ->type('unordered')
    ->items([
        '<span class="text-primary">Primary text</span>',
        '<span class="text-success">Success text</span>',
        '<span class="text-danger">Danger text</span>'
    ])
    ->class('text-large')
    ->render();
$listVariations .= '</div>';

$content .= ThemedComponent::make('layout/section')
    ->title('List Variations')
    ->subtitle('Different list styles including inline and custom formatting')
    ->content($listVariations)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;
