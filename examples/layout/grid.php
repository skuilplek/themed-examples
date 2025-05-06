<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\Themed;
use Skuilplek\Themed\ThemedComponent;

$content = '';
$component = 'layout/grid';
$content .= componentDocumentation($component);

// ##################  Usage Example - Basic Grid ##################
$basicGridContent = wrapExampleCode(<<<'CODE'
ThemedComponent::make('layout/grid')
    ->columns([
        [
            'size' => 12,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">Full width column</div>'
        ],
        [
            'size' => 6,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">Half width</div>'
        ],
        [
            'size' => 6,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">Half width</div>'
        ],
        [
            'size' => 4,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">One third</div>'
        ],
        [
            'size' => 4,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">One third</div>'
        ],
        [
            'size' => 4,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">One third</div>'
        ]
    ])
    ->render();
CODE);
    // Basic Grid
$basicGridContent .= ThemedComponent::make('layout/grid')
    ->columns([
        [
            'size' => 12,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">Full width column</div>'
        ],
        [
            'size' => 6,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">Half width</div>'
        ],
        [
            'size' => 6,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">Half width</div>'
        ],
        [
            'size' => 4,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">One third</div>'
        ],
        [
            'size' => 4,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">One third</div>'
        ],
        [
            'size' => 4,
            'content' => '<div style="border: 1px solid #ccc; padding: 10px;">One third</div>'
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->content($basicGridContent)
    ->title('Basic Grid')
    ->subtitle('A basic grid layout with different column configurations.')
    ->render();

// ##################  Usage Example - Advanced Grid ##################
$advancedGridContent = wrapExampleCode(<<<'CODE'
ThemedComponent::make('layout/grid')
    ->gutters(3)
    ->row_class('custom-row-class')
    ->vertical_align('center')
    ->horizontal_align('between')
    ->columns([
        [
            'size' => 4,
            'breakpoint' => 'md',
            'offset' => 2,
            'order' => 1,
            'align' => 'start',
            'content' => '<div style="border: 1px solid #ccc; padding: 10px; height: 100px;">Column 1: Responsive at md, offset by 2, order 1</div>'
        ],
        [
            'size' => 4,
            'breakpoint' => 'lg',
            'offset' => 0,
            'order' => 3,
            'align' => 'center',
            'content' => '<div style="border: 1px solid #ccc; padding: 10px; height: 100px;">Column 2: Responsive at lg, order 3</div>'
        ],
        [
            'size' => 'auto',
            'breakpoint' => 'sm',
            'offset' => 1,
            'order' => 2,
            'align' => 'end',
            'content' => '<div style="border: 1px solid #ccc; padding: 10px; height: 100px;">Column 3: Auto size, responsive at sm, offset by 1, order 2</div>'
        ]
    ])
    ->render();
CODE);
    // Advanced Grid
$advancedGridContent .= ThemedComponent::make('layout/grid')
    ->gutters(3)
    ->row_class('custom-row-class')
    ->vertical_align('center')
    ->horizontal_align('between')
    ->columns([
        [
            'size' => 4,
            'breakpoint' => 'md',
            'offset' => 2,
            'order' => 1,
            'align' => 'start',
            'content' => '<div style="border: 1px solid #ccc; padding: 10px; height: 100px;">Column 1: Responsive at md, offset by 2, order 1</div>'
        ],
        [
            'size' => 4,
            'breakpoint' => 'lg',
            'offset' => 0,
            'order' => 3,
            'align' => 'center',
            'content' => '<div style="border: 1px solid #ccc; padding: 10px; height: 100px;">Column 2: Responsive at lg, order 3</div>'
        ],
        [
            'size' => 'auto',
            'breakpoint' => 'sm',
            'offset' => 1,
            'order' => 2,
            'align' => 'end',
            'content' => '<div style="border: 1px solid #ccc; padding: 10px; height: 100px;">Column 3: Auto size, responsive at sm, offset by 1, order 2</div>'
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->content($advancedGridContent)
    ->title('Advanced Grid')
    ->subtitle('A simple grid layout with different column configurations.')
    ->render();

// ##################  Show .twig template for this component ##################
$content .= showComponentTemplate($component);

// Output the complete HTML
echo $content;