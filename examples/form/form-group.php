<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "form/form-group";

// Show documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Form Group Example ##################
$basicGroupCode = wrapExampleCode(<<<'CODE'
// Form group with text input
echo ThemedComponent::make('form/form-group')
    ->label('Username')
    ->for('username')
    ->required(true)
    ->control(
        ThemedComponent::make('form/input')
            ->name('username')
            ->id('username')
            ->required(true)
            ->render()
    )
    ->help('Choose a unique username')
    ->render();
CODE);

$basicGroupContent = ThemedComponent::make('form/form-group')
    ->label('Username')
    ->for('username')
    ->required(true)
    ->control(
        ThemedComponent::make('form/input')
            ->name('username')
            ->id('username')
            ->required(true)
            ->render()
    )
    ->help('Choose a unique username')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Form Group')
    ->subtitle('A form group with label, input, and help text')
    ->content($basicGroupCode . $basicGroupContent)
    ->render();

// ################## Form Group with Different Controls ##################
$differentControlsCode = wrapExampleCode(<<<'CODE'
// Form group with textarea
echo ThemedComponent::make('form/form-group')
    ->label('Bio')
    ->for('bio')
    ->control(
        ThemedComponent::make('form/textarea')
            ->name('bio')
            ->id('bio')
            ->rows(3)
            ->render()
    )
    ->render();

// Form group with select
echo ThemedComponent::make('form/form-group')
    ->label('Country')
    ->for('country')
    ->control(
        ThemedComponent::make('form/select')
            ->name('country')
            ->id('country')
            ->options([
                ['value' => 'us', 'label' => 'United States'],
                ['value' => 'uk', 'label' => 'United Kingdom'],
                ['value' => 'ca', 'label' => 'Canada']
            ])
            ->render()
    )
    ->render();
CODE);

$differentControlsContent = ThemedComponent::make('form/form-group')
    ->label('Bio')
    ->for('bio')
    ->control(
        ThemedComponent::make('form/textarea')
            ->name('bio')
            ->id('bio')
            ->rows(3)
            ->render()
    )
    ->render();

$differentControlsContent .= ThemedComponent::make('form/form-group')
    ->label('Country')
    ->for('country')
    ->control(
        ThemedComponent::make('form/select')
            ->name('country')
            ->id('country')
            ->options([
                ['value' => 'us', 'label' => 'United States'],
                ['value' => 'uk', 'label' => 'United Kingdom'],
                ['value' => 'ca', 'label' => 'Canada']
            ])
            ->render()
    )
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Form Group with Different Controls')
    ->subtitle('Form groups with textarea and select controls')
    ->content($differentControlsCode . $differentControlsContent)
    ->render();

// ################## Form Group with Error ##################
$errorGroupCode = wrapExampleCode(<<<'CODE'
echo ThemedComponent::make('form/form-group')
    ->label('Email')
    ->for('email')
    ->required(true)
    ->control(
        ThemedComponent::make('form/input')
            ->name('email')
            ->id('email')
            ->type('email')
            ->required(true)
            ->render()
    )
    ->error('Please enter a valid email address')
    ->render();
CODE);

$errorGroupContent = ThemedComponent::make('form/form-group')
    ->label('Email')
    ->for('email')
    ->required(true)
    ->control(
        ThemedComponent::make('form/input')
            ->name('email')
            ->id('email')
            ->type('email')
            ->required(true)
            ->render()
    )
    ->error('Please enter a valid email address')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Form Group with Error')
    ->subtitle('A form group displaying an error message')
    ->content($errorGroupCode . $errorGroupContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
