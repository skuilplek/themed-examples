<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "content/list-group";

// ################## Component Documentation ##################
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Usage Example ##################
$basicList = wrapExampleCode(<<<'CODE'
// Basic list group
echo ThemedComponent::make('content/list-group')
    ->items([
        ['text' => 'First item'],
        ['text' => 'Second item'],
        ['text' => 'Third item'],
        ['text' => 'Fourth item']
    ])
    ->render();
CODE);

$basicList .= ThemedComponent::make($component)
    ->items([
        ['text' => 'First item'],
        ['text' => 'Second item'],
        ['text' => 'Third item'],
        ['text' => 'Fourth item']
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic List Group')
    ->subtitle('Simple list group with text items')
    ->content($basicList)
    ->render();

// ################## Advanced Features ##################
$advancedList = wrapExampleCode(<<<'CODE'
// Advanced list group with active and disabled items
echo ThemedComponent::make('content/list-group')
    ->items([
        [
            'text' => 'Active item with badge',
            'active' => true,
            'badge' => [
                'text' => 'New',
                'variant' => 'primary'
            ]
        ],
        [
            'text' => 'Item with custom variant',
            'variant' => 'success'
        ],
        [
            'text' => 'Disabled item',
            'disabled' => true
        ],
        [
            'text' => '<strong>HTML</strong> content with <em>formatting</em>'
        ]
    ])
    ->render();
CODE);

$advancedList .= ThemedComponent::make($component)
    ->items([
        [
            'text' => 'Active item with badge',
            'active' => true,
            'badge' => [
                'text' => 'New',
                'variant' => 'primary'
            ]
        ],
        [
            'text' => 'Item with custom variant',
            'variant' => 'success'
        ],
        [
            'text' => 'Disabled item',
            'disabled' => true
        ],
        [
            'text' => '<strong>HTML</strong> content with <em>formatting</em>'
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced List Group Features')
    ->subtitle('List group with active states, badges, and custom styling')
    ->content($advancedList)
    ->render();

// ################## List Group Variations ##################
$listVariations = wrapExampleCode(<<<'CODE'
// Horizontal list group
echo ThemedComponent::make('content/list-group')
    ->horizontal('md')
    ->items([
        ['text' => 'Horizontal at md'],
        ['text' => 'Responsive layout'],
        ['text' => 'Stacks on mobile']
    ])
    ->render();

// Numbered list group with links
echo ThemedComponent::make('content/list-group')
    ->numbered(true)
    ->items([
        [
            'text' => 'First numbered item',
            'href' => '#!'
        ],
        [
            'text' => 'Second numbered item',
            'href' => '#!',
            'active' => true
        ],
        [
            'text' => 'Third numbered item',
            'href' => '#!'
        ]
    ])
    ->render();

// Flush list group with custom content
echo ThemedComponent::make('content/list-group')
    ->flush(true)
    ->items([
        [
            'content' => '
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>And some small print.</small>
            '
        ],
        [
            'content' => '
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Another heading</h5>
                    <small>1 day ago</small>
                </div>
                <p class="mb-1">Some more placeholder content.</p>
                <small>Secondary text.</small>
            '
        ]
    ])
    ->render();
CODE);

$listVariations .= ThemedComponent::make($component)
    ->horizontal('md')
    ->items([
        ['text' => 'Horizontal at md'],
        ['text' => 'Responsive layout'],
        ['text' => 'Stacks on mobile']
    ])
    ->render();

$listVariations .= '<div class="mt-4">';
$listVariations .= ThemedComponent::make($component)
    ->numbered(true)
    ->items([
        [
            'text' => 'First numbered item',
            'href' => '#!'
        ],
        [
            'text' => 'Second numbered item',
            'href' => '#!',
            'active' => true
        ],
        [
            'text' => 'Third numbered item',
            'href' => '#!'
        ]
    ])
    ->render();
$listVariations .= '</div>';

$listVariations .= '<div class="mt-4">';
$listVariations .= ThemedComponent::make($component)
    ->flush(true)
    ->items([
        [
            'content' => '
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>And some small print.</small>
            '
        ],
        [
            'content' => '
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Another heading</h5>
                    <small>1 day ago</small>
                </div>
                <p class="mb-1">Some more placeholder content.</p>
                <small>Secondary text.</small>
            '
        ]
    ])
    ->render();
$listVariations .= '</div>';

$content .= ThemedComponent::make('layout/section')
    ->title('List Group Variations')
    ->subtitle('Different list group styles including horizontal, numbered, and custom content')
    ->content($listVariations)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;
