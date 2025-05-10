<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "form/input";

// Show documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Input Example ##################
$basicInputCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/input')
    ->name('username')
    ->placeholder('Enter username')
    ->required(true)
    ->render();
CODE);

$basicInputContent = ThemedComponent::make('form/input')
    ->name('username')
    ->placeholder('Enter username')
    ->required(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Input')
    ->subtitle('A simple required text input with placeholder')
    ->content($basicInputCode . $basicInputContent)
    ->render();

// ################## Different Input Types ##################
$inputTypesCode = wrapExampleCode(<<<'CODE'
// Email input
echo ThemedComponent::make('form/input')
    ->name('email')
    ->type('email')
    ->placeholder('Enter email')
    ->render();

// Password input
echo ThemedComponent::make('form/input')
    ->name('password')
    ->type('password')
    ->placeholder('Enter password')
    ->render();

// Number input
echo ThemedComponent::make('form/input')
    ->name('age')
    ->type('number')
    ->min(18)
    ->max(100)
    ->render();

// Range input
echo ThemedComponent::make('form/form-group')
    ->label('Example range')
    ->for('customRange2')
    ->control(
        ThemedComponent::make('form/input')
            ->name('customRange2')
            ->id('customRange2')
            ->type('range')
            ->class('form-range')
            ->min(0)
            ->max(5)
            ->render()
    )
    ->render();

// Color picker
echo ThemedComponent::make('form/form-group')
    ->label('Color picker')
    ->for('exampleColorInput')
    ->control(
        ThemedComponent::make('form/input')
            ->name('exampleColorInput')
            ->id('exampleColorInput')
            ->type('color')
            ->class('form-control form-control-color')
            ->value('#563d7c')
            ->title('Choose your color')
            ->render()
    )
    ->render();
CODE);

$inputTypesContent = ThemedComponent::make('form/input')
    ->name('email')
    ->type('email')
    ->placeholder('Enter email')
    ->render();

$inputTypesContent .= ThemedComponent::make('form/input')
    ->name('password')
    ->type('password')
    ->placeholder('Enter password')
    ->render();

$inputTypesContent .= ThemedComponent::make('form/input')
    ->name('age')
    ->type('number')
    ->min(18)
    ->max(100)
    ->render();

$inputTypesContent .= ThemedComponent::make('form/form-group')
    ->label('Example range')
    ->for('customRange2')
    ->control(
        ThemedComponent::make('form/input')
            ->name('customRange2')
            ->id('customRange2')
            ->type('range')
            ->class('form-range')
            ->min(0)
            ->max(5)
            ->render()
    )
    ->render();

$inputTypesContent .= ThemedComponent::make('form/form-group')
    ->label('Color picker')
    ->for('exampleColorInput')
    ->control(
        ThemedComponent::make('form/input')
            ->name('exampleColorInput')
            ->id('exampleColorInput')
            ->type('color')
            ->class('form-control form-control-color')
            ->value('#563d7c')
            ->title('Choose your color')
            ->render()
    )
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Input Types')
    ->subtitle('Different types of input fields')
    ->content($inputTypesCode . $inputTypesContent)
    ->render();

// ################## Input States ##################
$inputStatesCode = wrapExampleCode(<<<'CODE'
// Disabled input
echo ThemedComponent::make('form/input')
    ->name('disabled-input')
    ->value('Disabled input')
    ->disabled(true)
    ->render();

// Readonly input
echo ThemedComponent::make('form/input')
    ->name('readonly-input')
    ->value('Readonly input')
    ->readonly(true)
    ->render();
CODE);

$inputStatesContent = ThemedComponent::make('form/input')
    ->name('disabled-input')
    ->value('Disabled input')
    ->disabled(true)
    ->render();

$inputStatesContent .= ThemedComponent::make('form/input')
    ->name('readonly-input')
    ->value('Readonly input')
    ->readonly(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Input States')
    ->subtitle('Disabled and readonly input states')
    ->content($inputStatesCode . $inputStatesContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
