<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "navigation/pagination";

$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Pagination ##################
$basicPaginationCode = wrapExampleCode(<<<'CODE'
// Basic pagination with aria-current
echo ThemedComponent::make('navigation/pagination')
    ->items([
        [
            'text' => 'Previous',
            'disabled' => true
        ],
        [
            'text' => '1'
        ],
        [
            'text' => '2',
            'active' => true
        ],
        [
            'text' => '3'
        ],
        [
            'text' => 'Next'
        ]
    ])
    ->class('mb-3')
    ->render();

// Basic pagination with icons
echo ThemedComponent::make('navigation/pagination')
    ->items([
        [
            'text' => '«',
            'label' => 'Previous',
            'icon' => '&laquo;'
        ],
        [
            'text' => '1',
            'active' => true
        ],
        [
            'text' => '2'
        ],
        [
            'text' => '3'
        ],
        [
            'text' => '»',
            'label' => 'Next',
            'icon' => '&raquo;'
        ]
    ])
    ->class('mb-3')
    ->render();

// Disabled states
echo ThemedComponent::make('navigation/pagination')
    ->items([
        [
            'text' => '«',
            'label' => 'Previous',
            'icon' => '&laquo;',
            'disabled' => true
        ],
        [
            'text' => '1',
            'active' => true
        ],
        [
            'text' => '2'
        ],
        [
            'text' => '3'
        ],
        [
            'text' => '»',
            'label' => 'Next',
            'icon' => '&raquo;'
        ]
    ])
    ->render();
CODE);

$basicPaginationContent = ThemedComponent::make('navigation/pagination')
    ->items([
        [
            'text' => '«',
            'label' => 'Previous',
            'icon' => '&laquo;'
        ],
        [
            'text' => '1',
            'active' => true
        ],
        [
            'text' => '2'
        ],
        [
            'text' => '3'
        ],
        [
            'text' => '»',
            'label' => 'Next',
            'icon' => '&raquo;'
        ]
    ])
    ->class('mb-3')
    ->render();

$basicPaginationContent .= ThemedComponent::make('navigation/pagination')
    ->items([
        [
            'text' => '«',
            'label' => 'Previous',
            'icon' => '&laquo;',
            'disabled' => true
        ],
        [
            'text' => '1',
            'active' => true
        ],
        [
            'text' => '2'
        ],
        [
            'text' => '3'
        ],
        [
            'text' => '»',
            'label' => 'Next',
            'icon' => '&raquo;'
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Pagination')
    ->subtitle('Simple pagination with active and disabled states')
    ->content($basicPaginationCode . $basicPaginationContent)
    ->render();

// ################## Pagination Sizing ##################
$sizingPaginationCode = wrapExampleCode(<<<'CODE'
// Large pagination
echo ThemedComponent::make('navigation/pagination')
    ->items([
        ['text' => 'Previous'],
        ['text' => '1'],
        ['text' => '2', 'active' => true],
        ['text' => '3'],
        ['text' => 'Next']
    ])
    ->size('lg')
    ->class('mb-3')
    ->render();

// Small pagination
echo ThemedComponent::make('navigation/pagination')
    ->items([
        ['text' => 'Previous'],
        ['text' => '1'],
        ['text' => '2', 'active' => true],
        ['text' => '3'],
        ['text' => 'Next']
    ])
    ->size('sm')
    ->render();
CODE);

$sizingPaginationContent = ThemedComponent::make('navigation/pagination')
    ->items([
        ['text' => 'Previous'],
        ['text' => '1'],
        ['text' => '2', 'active' => true],
        ['text' => '3'],
        ['text' => 'Next']
    ])
    ->size('lg')
    ->class('mb-3')
    ->render();

$sizingPaginationContent .= ThemedComponent::make('navigation/pagination')
    ->items([
        ['text' => 'Previous'],
        ['text' => '1'],
        ['text' => '2', 'active' => true],
        ['text' => '3'],
        ['text' => 'Next']
    ])
    ->size('sm')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Pagination Sizing')
    ->subtitle('Large and small pagination variants')
    ->content($sizingPaginationCode . $sizingPaginationContent)
    ->render();

// ################## Pagination Alignment ##################
$alignmentPaginationCode = wrapExampleCode(<<<'CODE'
// Center aligned pagination
echo ThemedComponent::make('navigation/pagination')
    ->items([
        ['text' => 'Previous'],
        ['text' => '1'],
        ['text' => '2', 'active' => true],
        ['text' => '3'],
        ['text' => 'Next']
    ])
    ->alignment('center')
    ->class('mb-3')
    ->render();

// Right aligned pagination
echo ThemedComponent::make('navigation/pagination')
    ->items([
        ['text' => 'Previous'],
        ['text' => '1'],
        ['text' => '2', 'active' => true],
        ['text' => '3'],
        ['text' => 'Next']
    ])
    ->alignment('end')
    ->render();
CODE);

$alignmentPaginationContent = ThemedComponent::make('navigation/pagination')
    ->items([
        ['text' => 'Previous'],
        ['text' => '1'],
        ['text' => '2', 'active' => true],
        ['text' => '3'],
        ['text' => 'Next']
    ])
    ->alignment('center')
    ->class('mb-3')
    ->render();

$alignmentPaginationContent .= ThemedComponent::make('navigation/pagination')
    ->items([
        ['text' => 'Previous'],
        ['text' => '1'],
        ['text' => '2', 'active' => true],
        ['text' => '3'],
        ['text' => 'Next']
    ])
    ->alignment('end')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Pagination Alignment')
    ->subtitle('Center and right-aligned pagination')
    ->content($alignmentPaginationCode . $alignmentPaginationContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
