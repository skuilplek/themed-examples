<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "form/radio";

// Show documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Radio Group Example ##################
$basicRadioCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/radio')
    ->name('gender')
    ->options([
        ['value' => 'male', 'label' => 'Male'],
        ['value' => 'female', 'label' => 'Female'],
        ['value' => 'other', 'label' => 'Other']
    ])
    ->render();
CODE);

$basicRadioContent = ThemedComponent::make('form/radio')
    ->name('gender')
    ->options([
        ['value' => 'male', 'label' => 'Male'],
        ['value' => 'female', 'label' => 'Female'],
        ['value' => 'other', 'label' => 'Other']
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Radio Group')
    ->subtitle('A simple radio button group')
    ->content($basicRadioCode . $basicRadioContent)
    ->render();

// ################## Inline Radio Group ##################
$inlineRadioCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/radio')
    ->name('size')
    ->options([
        ['value' => 'sm', 'label' => 'Small'],
        ['value' => 'md', 'label' => 'Medium'],
        ['value' => 'lg', 'label' => 'Large']
    ])
    ->inline(true)
    ->selected('md')
    ->render();
CODE);

$inlineRadioContent = ThemedComponent::make('form/radio')
    ->name('size')
    ->options([
        ['value' => 'sm', 'label' => 'Small'],
        ['value' => 'md', 'label' => 'Medium'],
        ['value' => 'lg', 'label' => 'Large']
    ])
    ->inline(true)
    ->selected('md')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Inline Radio Group')
    ->subtitle('Radio buttons displayed inline with pre-selected value')
    ->content($inlineRadioCode . $inlineRadioContent)
    ->render();

// ################## Radio States ##################
$statesRadioCode = wrapExampleCode(<<<'CODE'
// Disabled radio group
echo ThemedComponent::make('form/radio')
    ->name('disabled-radio')
    ->options([
        ['value' => '1', 'label' => 'Option 1'],
        ['value' => '2', 'label' => 'Option 2'],
        ['value' => '3', 'label' => 'Option 3']
    ])
    ->disabled(true)
    ->selected('2')
    ->render();

// Mixed disabled state
echo ThemedComponent::make('form/radio')
    ->name('mixed-disabled')
    ->options([
        ['value' => '1', 'label' => 'Always enabled'],
        ['value' => '2', 'label' => 'Disabled option', 'disabled' => true],
        ['value' => '3', 'label' => 'Also enabled']
    ])
    ->render();
CODE);

$statesRadioContent = ThemedComponent::make('form/radio')
    ->name('disabled-radio')
    ->options([
        ['value' => '1', 'label' => 'Option 1'],
        ['value' => '2', 'label' => 'Option 2'],
        ['value' => '3', 'label' => 'Option 3']
    ])
    ->disabled(true)
    ->selected('2')
    ->render();

$statesRadioContent .= ThemedComponent::make('form/radio')
    ->name('mixed-disabled')
    ->options([
        ['value' => '1', 'label' => 'Always enabled'],
        ['value' => '2', 'label' => 'Disabled option', 'disabled' => true],
        ['value' => '3', 'label' => 'Also enabled']
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Radio States')
    ->subtitle('Different radio states: disabled group and individually disabled options')
    ->content($statesRadioCode . $statesRadioContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
