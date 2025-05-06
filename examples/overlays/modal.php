<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\Themed;
use Skuilplek\Themed\ThemedComponent;

$component = "overlays/modal";

$content = '';
$content .= componentDocumentation($component);

// ##################  Usage Example - Basic Modals ##################
$basicModalContent = wrapExampleCode(<<<'CODE'
ThemedComponent::make('overlays/modal')
    ->title('Basic Modal')
    ->content('<p>This is a basic modal example with a simple content.</p>')
    ->footer(
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('secondary')
            ->text('Close')
            ->attributes('data-bs-dismiss=modal')
            ->render() .
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('primary')
            ->text('Save changes')
            ->render()
    )
    ->trigger([
        'text' => 'Basic Modal',
        'variant' => 'primary',
    ])
    ->id('basicModal')
    ->render();
CODE);

    // Basic Modal
$basicModalContent .= ThemedComponent::make('overlays/modal')
    ->title('Basic Modal')
    ->content('<p>This is a basic modal example with a simple content.</p>')
    ->footer(
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('secondary')
            ->text('Close')
            ->attributes('data-bs-dismiss=modal')
            ->render() .
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('primary')
            ->text('Save changes')
            ->render()
    )
    ->trigger([
        'text' => 'Basic Modal',
        'variant' => 'primary',
    ])
    ->id('basicModal')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->content($basicModalContent)
    ->title('Basic Modals')
    ->subtitle('Basic modals are the most basic type of modal.')
    ->render();

// ##################  Usage Example - Small Modal ##################
$smallModalContent = wrapExampleCode(<<<'CODE'
ThemedComponent::make('overlays/modal')
    ->title('Small Modal')
    ->size('sm')
    ->content('<p>This is a smaller modal for quick information.</p>')
    ->footer(
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('secondary')
            ->text('Close')
            ->attributes('data-bs-dismiss=modal')
            ->render()
    )
    ->trigger([
        'text' => 'Small Modal',
        'variant' => 'secondary',
        'icon' => ThemedComponent::make('icons/icon')
            ->name('calendar-month')
            ->render()
    ])
    ->header_icon(
        ThemedComponent::make('icons/icon')
            ->name('calendar-month')
            ->render()
    )
    ->id('smallModal')
    ->render();
CODE);
    // Small Modal
$smallModalContent .= ThemedComponent::make('overlays/modal')
    ->title('Small Modal')
    ->size('sm')
    ->content('<p>This is a smaller modal for quick information.</p>')
    ->footer(
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('secondary')
            ->text('Close')
            ->attributes('data-bs-dismiss=modal')
            ->render()
    )
    ->trigger([
        'text' => 'Small Modal',
        'variant' => 'secondary',
        'icon' => ThemedComponent::make('icons/icon')
            ->name('calendar-month')
            ->render()
    ])
    ->header_icon(
        ThemedComponent::make('icons/icon')
            ->name('calendar-month')
            ->render()
    )
    ->id('smallModal')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->content($smallModalContent)
    ->title('Small Modals')
    ->subtitle('Small modals are useful for quick information.')
    ->render();

// ##################  Usage Example - Large Modal ##################
$largeModalContent = wrapExampleCode(<<<'CODE'
ThemedComponent::make('overlays/modal')
    ->title('Large Modal')
    ->size('lg')
    ->content('<p>This is a larger modal for displaying more detailed content or forms.</p>')
    ->footer(
        ThemedComponent::make('buttons/button')
        ->type('button')
            ->variant('secondary')
            ->text('Close')
            ->attributes('data-bs-dismiss=modal')
            ->render() .
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('primary')
            ->text('Submit')
            ->render()
    )
    ->trigger([
        'text' => 'Large Modal',
        'variant' => 'success'
    ])
    ->id('largeModal')
    ->render();
CODE);
    // Large Modal
$largeModalContent .= ThemedComponent::make('overlays/modal')
    ->title('Large Modal')
    ->size('lg')
    ->content('<p>This is a larger modal for displaying more detailed content or forms.</p>')
    ->footer(
        ThemedComponent::make('buttons/button')
        ->type('button')
            ->variant('secondary')
            ->text('Close')
            ->attributes('data-bs-dismiss=modal')
            ->render() .
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('primary')
            ->text('Submit')
            ->render()
    )
    ->trigger([
        'text' => 'Large Modal',
        'variant' => 'success'
    ])
    ->id('largeModal')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->content($largeModalContent)
    ->title('Large Modals')
    ->subtitle('Large modals are ideal for detailed content or forms.')
    ->render();

// ##################  Usage Example - Fullscreen Modal ##################
$fullscreenModalContent = wrapExampleCode(<<<'CODE'
ThemedComponent::make('overlays/modal')
    ->title('Fullscreen Modal')
    ->size('fullscreen')
    ->content('<p>This modal takes up the entire screen, useful for immersive experiences or complex workflows.</p>')
    ->footer(
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('secondary')
            ->text('Close')
            ->attributes('data-bs-dismiss=modal')
            ->render()
    )
    ->trigger([
        'text' => 'Fullscreen Modal',
        'variant' => 'danger'
    ])
    ->id('fullscreenModal')
    ->render();
CODE);
    // Fullscreen Modal
$fullscreenModalContent .= ThemedComponent::make('overlays/modal')
    ->title('Fullscreen Modal')
    ->size('fullscreen')
    ->content('<p>This modal takes up the entire screen, useful for immersive experiences or complex workflows.</p>')
    ->footer(
        ThemedComponent::make('buttons/button')
            ->type('button')
            ->variant('secondary')
            ->text('Close')
            ->attributes('data-bs-dismiss=modal')
            ->render()
    )
    ->trigger([
        'text' => 'Fullscreen Modal',
        'variant' => 'danger'
    ])
    ->id('fullscreenModal')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->content($fullscreenModalContent)
    ->title('Fullscreen Modals')
    ->subtitle('Fullscreen modals take up the entire screen for immersive experiences.')
    ->render();

// ##################  Show fill .twig template for this component ##################
$content .= showComponentTemplate($component);

$styles = "
<style>
section { 
    border-bottom: 1px solid #dee2e6; 
    padding-bottom: 2rem; 
}
section:last-child { 
    border-bottom: none; 
}
</style>
";
Themed::headerScripts($styles);

// Output the complete HTML
echo $content;
