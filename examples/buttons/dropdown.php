<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;

$component = "buttons/dropdown";

$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Dropdown ##################
$basicCode = wrapExampleCode(<<<'CODE'
// Primary dropdown button
echo ThemedComponent::make('buttons/dropdown')
    ->text('Primary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#']
    ])
    ->render();

// Secondary dropdown button
echo ThemedComponent::make('buttons/dropdown')
    ->text('Secondary')
    ->type('secondary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#']
    ])
    ->class('ms-2')
    ->render();
CODE);

$basicContent = ThemedComponent::make('buttons/dropdown')
    ->text('Primary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#']
    ])
    ->render();

$basicContent .= ThemedComponent::make('buttons/dropdown')
    ->text('Secondary')
    ->type('secondary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#']
    ])
    ->class('ms-2')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Dropdown')
    ->subtitle('Simple dropdown buttons with different colors')
    ->content($basicCode . $basicContent)
    ->render();

// ################## Variants ##################
$variantsCode = wrapExampleCode(<<<'CODE'
// Different button variants
$variants = ['primary', 'secondary', 'success', 'info', 'warning', 'danger'];
foreach ($variants as $variant) {
    echo ThemedComponent::make('buttons/dropdown')
        ->text(ucfirst($variant))
        ->type($variant)
        ->items([
            ['text' => 'Action', 'href' => '#'],
            ['text' => 'Another action', 'href' => '#'],
            ['text' => 'Something else here', 'href' => '#']
        ])
        ->class('me-2')
        ->render();
}
CODE);

$variantsContent = '';
$variants = ['primary', 'secondary', 'success', 'info', 'warning', 'danger'];
foreach ($variants as $variant) {
    $variantsContent .= ThemedComponent::make('buttons/dropdown')
        ->text(ucfirst($variant))
        ->type($variant)
        ->items([
            ['text' => 'Action', 'href' => '#'],
            ['text' => 'Another action', 'href' => '#'],
            ['text' => 'Something else here', 'href' => '#']
        ])
        ->class('me-2')
        ->render();
}

$content .= ThemedComponent::make('layout/section')
    ->title('Variants')
    ->subtitle('Dropdown buttons in different Bootstrap colors')
    ->content($variantsCode . $variantsContent)
    ->render();

// ################## With Dividers ##################
$dividersCode = wrapExampleCode(<<<'CODE'
// Dropdown with dividers and header
echo ThemedComponent::make('buttons/dropdown')
    ->text('Dropdown')
    ->type('primary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#'],
        ['divider' => true],
        ['text' => 'Separated link', 'href' => '#']
    ])
    ->render();

// Outline style with dividers
echo ThemedComponent::make('buttons/dropdown')
    ->text('Dropdown')
    ->type('outline-secondary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#'],
        ['divider' => true],
        ['text' => 'Separated link', 'href' => '#']
    ])
    ->class('ms-2')
    ->render();
CODE);

$dividersContent = ThemedComponent::make('buttons/dropdown')
    ->text('Dropdown')
    ->type('primary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#'],
        ['divider' => true],
        ['text' => 'Separated link', 'href' => '#']
    ])
    ->render();

$dividersContent .= ThemedComponent::make('buttons/dropdown')
    ->text('Dropdown')
    ->type('outline-secondary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#'],
        ['divider' => true],
        ['text' => 'Separated link', 'href' => '#']
    ])
    ->class('ms-2')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('With Dividers')
    ->subtitle('Dropdown menus with divider lines')
    ->content($dividersCode . $dividersContent)
    ->render();

// ################## Menu Alignment ##################
$alignmentCode = wrapExampleCode(<<<'CODE'
// Default left-aligned menu
echo ThemedComponent::make('buttons/dropdown')
    ->text('Left-aligned menu')
    ->type('secondary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#']
    ])
    ->render();

// Right-aligned menu
echo ThemedComponent::make('buttons/dropdown')
    ->text('Right-aligned menu')
    ->type('secondary')
    ->menuEnd(true)
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#']
    ])
    ->class('ms-2')
    ->render();
CODE);

$alignmentContent = ThemedComponent::make('buttons/dropdown')
    ->text('Left-aligned menu')
    ->type('secondary')
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#']
    ])
    ->render();

$alignmentContent .= ThemedComponent::make('buttons/dropdown')
    ->text('Right-aligned menu')
    ->type('secondary')
    ->menuEnd(true)
    ->items([
        ['text' => 'Action', 'href' => '#'],
        ['text' => 'Another action', 'href' => '#'],
        ['text' => 'Something else here', 'href' => '#']
    ])
    ->class('ms-2')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Menu Alignment')
    ->subtitle('Control the alignment of dropdown menus')
    ->content($alignmentCode . $alignmentContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
