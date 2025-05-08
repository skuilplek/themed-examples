<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "buttons/toggle";

// Start with component documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Toggle Types ##################
$basicTypesCode = wrapExampleCode(<<<'CODE'
// Button toggle
echo ThemedComponent::make('buttons/toggle')
    ->text('Button Toggle')
    ->type('button')
    ->render();

// Checkbox toggle
echo ThemedComponent::make('buttons/toggle')
    ->text('Checkbox Toggle')
    ->type('checkbox')
    ->name('feature1')
    ->render();

// Radio toggles
echo ThemedComponent::make('buttons/toggle')
    ->text('Option 1')
    ->type('radio')
    ->name('options')
    ->value('1')
    ->render();

echo ThemedComponent::make('buttons/toggle')
    ->text('Option 2')
    ->type('radio')
    ->name('options')
    ->value('2')
    ->render();
CODE);

$basicTypesContent = ThemedComponent::make('buttons/toggle')
    ->text('Button Toggle')
    ->type('button')
    ->render();

$basicTypesContent .= ThemedComponent::make('buttons/toggle')
    ->text('Checkbox Toggle')
    ->type('checkbox')
    ->name('feature1')
    ->render();

$basicTypesContent .= ThemedComponent::make('buttons/toggle')
    ->text('Option 1')
    ->type('radio')
    ->name('options')
    ->value('1')
    ->render();

$basicTypesContent .= ThemedComponent::make('buttons/toggle')
    ->text('Option 2')
    ->type('radio')
    ->name('options')
    ->value('2')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Toggle Types')
    ->subtitle('Different types of toggle buttons: button, checkbox, and radio')
    ->content($basicTypesCode . $basicTypesContent)
    ->render();

// ################## Toggle Button States ##################
$statesCode = wrapExampleCode(<<<'CODE'
// Pressed state
echo ThemedComponent::make('buttons/toggle')
    ->text('Pressed Toggle')
    ->pressed(true)
    ->render();

// Disabled state
echo ThemedComponent::make('buttons/toggle')
    ->text('Disabled Toggle')
    ->disabled(true)
    ->render();
CODE);

$statesContent = ThemedComponent::make('buttons/toggle')
    ->text('Pressed Toggle')
    ->pressed(true)
    ->render();

$statesContent .= ThemedComponent::make('buttons/toggle')
    ->text('Disabled Toggle')
    ->disabled(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Toggle Button States')
    ->subtitle('Toggle buttons in different states: pressed and disabled')
    ->content($statesCode . $statesContent)
    ->render();

// ################## Toggle Button Variants ##################
$variantsCode = wrapExampleCode(<<<'CODE'
// Primary variant
echo ThemedComponent::make('buttons/toggle')
    ->text('Primary Toggle')
    ->variant('primary')
    ->render();

// Success variant with icon
echo ThemedComponent::make('buttons/toggle')
    ->text('Success Toggle')
    ->variant('success')
    ->icon('check')
    ->render();

// Info variant with custom attributes
echo ThemedComponent::make('buttons/toggle')
    ->text('Info Toggle')
    ->variant('info')
    ->attributes(['data-custom' => 'value'])
    ->render();
CODE);

$variantsContent = ThemedComponent::make('buttons/toggle')
    ->text('Primary Toggle')
    ->variant('primary')
    ->render();

$variantsContent .= ThemedComponent::make('buttons/toggle')
    ->text('Success Toggle')
    ->variant('success')
    ->icon('check')
    ->render();

$variantsContent .= ThemedComponent::make('buttons/toggle')
    ->text('Info Toggle')
    ->variant('info')
    ->attributes(['data-custom' => 'value'])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Toggle Button Variants')
    ->subtitle('Toggle buttons with different styles and features')
    ->content($variantsCode . $variantsContent)
    ->render();

// ################## Toggle Button Sizes ##################
$sizesCode = wrapExampleCode(<<<'CODE'
// Large toggle
echo ThemedComponent::make('buttons/toggle')
    ->text('Large Toggle')
    ->size('lg')
    ->render();

// Small toggle with custom class
echo ThemedComponent::make('buttons/toggle')
    ->text('Small Toggle')
    ->size('sm')
    ->class('custom-toggle')
    ->render();
CODE);

$sizesContent = ThemedComponent::make('buttons/toggle')
    ->text('Large Toggle')
    ->size('lg')
    ->render();

$sizesContent .= ThemedComponent::make('buttons/toggle')
    ->text('Small Toggle')
    ->size('sm')
    ->class('custom-toggle')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Toggle Button Sizes')
    ->subtitle('Toggle buttons in different sizes with custom classes')
    ->content($sizesCode . $sizesContent)
    ->render();

// Show the template file
$content .= showComponentTemplate($component);

// Display all content
echo $content;
