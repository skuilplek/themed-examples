<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "form/switch";

$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Switch Examples ##################
$basicSwitchCode = wrapExampleCode(<<<'CODE'
// Default switch
echo ThemedComponent::make('form/switch')
    ->id('switchCheckDefault')
    ->name('switchCheckDefault')
    ->label('Default switch checkbox input')
    ->render();

// Checked switch
echo ThemedComponent::make('form/switch')
    ->id('switchCheckChecked')
    ->name('switchCheckChecked')
    ->label('Checked switch checkbox input')
    ->checked(true)
    ->render();

// Disabled switch
echo ThemedComponent::make('form/switch')
    ->id('switchCheckDisabled')
    ->name('switchCheckDisabled')
    ->label('Disabled switch checkbox input')
    ->disabled(true)
    ->render();

// Disabled checked switch
echo ThemedComponent::make('form/switch')
    ->id('switchCheckCheckedDisabled')
    ->name('switchCheckCheckedDisabled')
    ->label('Disabled checked switch checkbox input')
    ->checked(true)
    ->disabled(true)
    ->render();
CODE);

$basicSwitchContent = ThemedComponent::make('form/switch')
    ->id('switchCheckDefault')
    ->name('switchCheckDefault')
    ->label('Default switch checkbox input')
    ->render();

$basicSwitchContent .= ThemedComponent::make('form/switch')
    ->id('switchCheckChecked')
    ->name('switchCheckChecked')
    ->label('Checked switch checkbox input')
    ->checked(true)
    ->render();

$basicSwitchContent .= ThemedComponent::make('form/switch')
    ->id('switchCheckDisabled')
    ->name('switchCheckDisabled')
    ->label('Disabled switch checkbox input')
    ->disabled(true)
    ->render();

$basicSwitchContent .= ThemedComponent::make('form/switch')
    ->id('switchCheckCheckedDisabled')
    ->name('switchCheckCheckedDisabled')
    ->label('Disabled checked switch checkbox input')
    ->checked(true)
    ->disabled(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Switches')
    ->subtitle('Default, checked, and disabled switch examples')
    ->content($basicSwitchCode . $basicSwitchContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
