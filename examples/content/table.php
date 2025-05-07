<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "content/table";

// ################## Component Documentation ##################
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Usage Example ##################
$basicTable = wrapExampleCode(<<<'CODE'
// Basic table example
echo ThemedComponent::make($component)
    ->headers(['#', 'First', 'Last', 'Handle'])
    ->rows([
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', 'Larry', 'Bird', '@twitter']
    ])
    ->variant('striped')
    ->responsive(true)
    ->render();
CODE);

$basicTable .= ThemedComponent::make($component)
    ->headers(['#', 'First', 'Last', 'Handle'])
    ->rows([
        ['1', 'Mark', 'Otto', '@mdo'],
        ['2', 'Jacob', 'Thornton', '@fat'],
        ['3', 'Larry', 'Bird', '@twitter']
    ])
    ->variant('striped')
    ->responsive(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Table Usage')
    ->subtitle('Shows a simple responsive striped table with headers and data')
    ->content($basicTable)
    ->render();

// ################## Advanced Features ##################
$advancedTable = wrapExampleCode(<<<'CODE'
// Advanced table with styling and caption
echo ThemedComponent::make($component)
    ->headers([
        'Product',
        'Description',
        'Price',
        'Stock'
    ])
    ->rows([
        [
            'Widget Pro',
            'Advanced widget with premium features',
            '$199.99',
            '<span class="badge bg-success">In Stock</span>'
        ],
        [
            'Super Tool',
            'Professional-grade tool set',
            '$299.99',
            '<span class="badge bg-warning">Low Stock</span>'
        ],
        [
            'Mega Device',
            'Next-generation smart device',
            '$499.99',
            '<span class="badge bg-danger">Out of Stock</span>'
        ]
    ])
    ->variant('bordered')
    ->caption('Product Inventory')
    ->caption_top(true)
    ->header_class('table-dark')
    ->responsive('sm')
    ->render();
CODE);

$advancedTable .= ThemedComponent::make($component)
    ->headers([
        'Product',
        'Description',
        'Price',
        'Stock'
    ])
    ->rows([
        [
            'Widget Pro',
            'Advanced widget with premium features',
            '$199.99',
            '<span class="badge bg-success">In Stock</span>'
        ],
        [
            'Super Tool',
            'Professional-grade tool set',
            '$299.99',
            '<span class="badge bg-warning">Low Stock</span>'
        ],
        [
            'Mega Device',
            'Next-generation smart device',
            '$499.99',
            '<span class="badge bg-danger">Out of Stock</span>'
        ]
    ])
    ->variant('bordered')
    ->caption('Product Inventory')
    ->caption_top(true)
    ->header_class('table-dark')
    ->responsive('sm')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced Table Features')
    ->subtitle('Demonstrates bordered style, dark header, caption, and responsive breakpoint')
    ->content($advancedTable)
    ->render();

// ################## Table Variants ##################
$variantsTable = wrapExampleCode(<<<'CODE'
// Table style variants
echo ThemedComponent::make($component)
    ->headers(['Type', 'Description'])
    ->rows([
        ['Hover', 'Mouse over to highlight rows']
    ])
    ->variant('hover')
    ->render();

echo ThemedComponent::make($component)
    ->headers(['Type', 'Description'])
    ->rows([
        ['Dark', 'Dark theme table']
    ])
    ->variant('dark')
    ->render();

echo ThemedComponent::make($component)
    ->headers(['Type', 'Description'])
    ->rows([
        ['Small', 'Condensed table']
    ])
    ->variant('small')
    ->render();
CODE);

$variantsTable .= ThemedComponent::make($component)
    ->headers(['Type', 'Description'])
    ->rows([
        ['Hover', 'Mouse over to highlight rows']
    ])
    ->variant('hover')
    ->render();

$variantsTable .= ThemedComponent::make($component)
    ->headers(['Type', 'Description'])
    ->rows([
        ['Dark', 'Dark theme table']
    ])
    ->variant('dark')
    ->render();

$variantsTable .= ThemedComponent::make($component)
    ->headers(['Type', 'Description'])
    ->rows([
        ['Small', 'Condensed table']
    ])
    ->variant('small')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Table Style Variants')
    ->subtitle('Shows different table styles including hover, dark, and small variants')
    ->content($variantsTable)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;
