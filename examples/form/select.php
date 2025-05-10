<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "form/select";

// Show documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Select Example ##################
$basicSelectCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/select')
    ->name('color')
    ->options([
        ['value' => 'red', 'label' => 'Red'],
        ['value' => 'blue', 'label' => 'Blue'],
        ['value' => 'green', 'label' => 'Green']
    ])
    ->placeholder('Choose a color')
    ->render();
CODE);

$basicSelectContent = ThemedComponent::make('form/select')
    ->name('color')
    ->options([
        ['value' => 'red', 'label' => 'Red'],
        ['value' => 'blue', 'label' => 'Blue'],
        ['value' => 'green', 'label' => 'Green']
    ])
    ->placeholder('Choose a color')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Select')
    ->subtitle('A simple select dropdown with placeholder')
    ->content($basicSelectCode . $basicSelectContent)
    ->render();

// ################## Select with Selected Value ##################
$selectedSelectCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/select')
    ->name('country')
    ->options([
        ['value' => 'us', 'label' => 'United States'],
        ['value' => 'uk', 'label' => 'United Kingdom'],
        ['value' => 'ca', 'label' => 'Canada']
    ])
    ->selected('uk')
    ->render();
CODE);

$selectedSelectContent = ThemedComponent::make('form/select')
    ->name('country')
    ->options([
        ['value' => 'us', 'label' => 'United States'],
        ['value' => 'uk', 'label' => 'United Kingdom'],
        ['value' => 'ca', 'label' => 'Canada']
    ])
    ->selected('uk')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Select with Selected Value')
    ->subtitle('A select dropdown with a pre-selected option')
    ->content($selectedSelectCode . $selectedSelectContent)
    ->render();

// ################## Select States ##################
$statesSelectCode = wrapExampleCode(<<<'CODE'
// Required select
echo ThemedComponent::make('form/select')
    ->name('required-select')
    ->options([
        ['value' => '1', 'label' => 'Option 1'],
        ['value' => '2', 'label' => 'Option 2']
    ])
    ->required(true)
    ->placeholder('Please select (required)')
    ->render();

// Disabled select
echo ThemedComponent::make('form/select')
    ->name('disabled-select')
    ->options([
        ['value' => '1', 'label' => 'Option 1'],
        ['value' => '2', 'label' => 'Option 2']
    ])
    ->disabled(true)
    ->render();
CODE);

$statesSelectContent = ThemedComponent::make('form/select')
    ->name('required-select')
    ->options([
        ['value' => '1', 'label' => 'Option 1'],
        ['value' => '2', 'label' => 'Option 2']
    ])
    ->required(true)
    ->placeholder('Please select (required)')
    ->render();

$statesSelectContent .= ThemedComponent::make('form/select')
    ->name('disabled-select')
    ->options([
        ['value' => '1', 'label' => 'Option 1'],
        ['value' => '2', 'label' => 'Option 2']
    ])
    ->disabled(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Select States')
    ->subtitle('Different select states: required and disabled')
    ->content($statesSelectCode . $statesSelectContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
