<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "form/textarea";

// Show documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Textarea Example ##################
$basicTextareaCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/textarea')
    ->name('message')
    ->placeholder('Enter your message')
    ->rows(4)
    ->render();
CODE);

$basicTextareaContent = ThemedComponent::make('form/textarea')
    ->name('message')
    ->placeholder('Enter your message')
    ->rows(4)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Textarea')
    ->subtitle('A simple textarea with custom rows')
    ->content($basicTextareaCode . $basicTextareaContent)
    ->render();

// ################## Textarea with Value ##################
$valueTextareaCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/textarea')
    ->name('description')
    ->value('This is a pre-filled textarea with some default content.')
    ->rows(3)
    ->render();
CODE);

$valueTextareaContent = ThemedComponent::make('form/textarea')
    ->name('description')
    ->value('This is a pre-filled textarea with some default content.')
    ->rows(3)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Textarea with Value')
    ->subtitle('A textarea with pre-filled content')
    ->content($valueTextareaCode . $valueTextareaContent)
    ->render();

// ################## Textarea States ##################
$statesTextareaCode = wrapExampleCode(<<<'CODE'
// Required textarea
echo ThemedComponent::make('form/textarea')
    ->name('required-textarea')
    ->placeholder('This field is required')
    ->required(true)
    ->render();

// Disabled textarea
echo ThemedComponent::make('form/textarea')
    ->name('disabled-textarea')
    ->value('This textarea is disabled')
    ->disabled(true)
    ->render();

// Readonly textarea
echo ThemedComponent::make('form/textarea')
    ->name('readonly-textarea')
    ->value('This textarea is readonly')
    ->readonly(true)
    ->render();
CODE);

$statesTextareaContent = ThemedComponent::make('form/textarea')
    ->name('required-textarea')
    ->placeholder('This field is required')
    ->required(true)
    ->render();

$statesTextareaContent .= ThemedComponent::make('form/textarea')
    ->name('disabled-textarea')
    ->value('This textarea is disabled')
    ->disabled(true)
    ->render();

$statesTextareaContent .= ThemedComponent::make('form/textarea')
    ->name('readonly-textarea')
    ->value('This textarea is readonly')
    ->readonly(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Textarea States')
    ->subtitle('Different textarea states: required, disabled, and readonly')
    ->content($statesTextareaCode . $statesTextareaContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
