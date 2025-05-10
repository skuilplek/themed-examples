<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "form/checkbox";

// Show documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Checkbox Example ##################
$basicCheckboxCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/checkbox')
    ->name('terms')
    ->label('I agree to the terms and conditions')
    ->required(true)
    ->render();
CODE);

$basicCheckboxContent = ThemedComponent::make('form/checkbox')
    ->name('terms')
    ->label('I agree to the terms and conditions')
    ->required(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Checkbox')
    ->subtitle('A simple required checkbox with label')
    ->content($basicCheckboxCode . $basicCheckboxContent)
    ->render();

// ################## Checkbox States ##################
$statesCheckboxCode = wrapExampleCode(<<<'CODE'
// Checked checkbox
echo ThemedComponent::make('form/checkbox')
    ->name('newsletter')
    ->label('Subscribe to newsletter')
    ->checked(true)
    ->render();

// Disabled checkbox
echo ThemedComponent::make('form/checkbox')
    ->name('disabled-checkbox')
    ->label('This option is disabled')
    ->disabled(true)
    ->render();

// Disabled and checked checkbox
echo ThemedComponent::make('form/checkbox')
    ->name('disabled-checked')
    ->label('This option is disabled and checked')
    ->disabled(true)
    ->checked(true)
    ->render();
CODE);

$statesCheckboxContent = ThemedComponent::make('form/checkbox')
    ->name('newsletter')
    ->label('Subscribe to newsletter')
    ->checked(true)
    ->render();

$statesCheckboxContent .= ThemedComponent::make('form/checkbox')
    ->name('disabled-checkbox')
    ->label('This option is disabled')
    ->disabled(true)
    ->render();

$statesCheckboxContent .= ThemedComponent::make('form/checkbox')
    ->name('disabled-checked')
    ->label('This option is disabled and checked')
    ->disabled(true)
    ->checked(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Checkbox States')
    ->subtitle('Different checkbox states: checked, disabled, and both')
    ->content($statesCheckboxCode . $statesCheckboxContent)
    ->render();

// ################## Custom Value Checkbox ##################
$customValueCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/checkbox')
    ->name('preference')
    ->label('Enable feature X')
    ->value('feature_x')
    ->render();
CODE);

$customValueContent = ThemedComponent::make('form/checkbox')
    ->name('preference')
    ->label('Enable feature X')
    ->value('feature_x')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Custom Value Checkbox')
    ->subtitle('A checkbox with a custom value attribute')
    ->content($customValueCode . $customValueContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
