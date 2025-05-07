<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "content/collapse";

// ################## Component Documentation ##################
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Usage Example ##################
$basicCollapse = wrapExampleCode(<<<'CODE'
// Basic collapse with button trigger
echo ThemedComponent::make('content/collapse')
    ->id('basic-collapse')
    ->trigger([
        'text' => 'Toggle Content',
        'variant' => 'primary'
    ])
    ->content('<div class="p-3 border">This is the collapsible content that can be toggled.</div>')
    ->render();
CODE);

$basicCollapse .= ThemedComponent::make($component)
    ->id('basic-collapse')
    ->trigger([
        'text' => 'Toggle Content',
        'variant' => 'primary'
    ])
    ->content('<div class="p-3 border">This is the collapsible content that can be toggled.</div>')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Collapse Usage')
    ->subtitle('Simple collapse with button trigger')
    ->content($basicCollapse)
    ->render();

// ################## Advanced Features ##################
$advancedCollapse = wrapExampleCode(<<<'CODE'
// Advanced collapse with icon and custom styling
echo ThemedComponent::make('content/collapse')
    ->id('advanced-collapse')
    ->trigger([
        'text' => 'Show Details',
        'variant' => 'info',
        'icon' => 'bi bi-chevron-down',
        'class' => 'mb-3'
    ])
    ->show(true)
    ->content('
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Expanded by Default</h5>
                <p class="card-text">This collapse is shown by default and includes an icon in the trigger.</p>
            </div>
        </div>
    ')
    ->render();
CODE);

$advancedCollapse .= ThemedComponent::make($component)
    ->id('advanced-collapse')
    ->trigger([
        'text' => 'Show Details',
        'variant' => 'info',
        'icon' => 'bi bi-chevron-down',
        'class' => 'mb-3'
    ])
    ->show(true)
    ->content('
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Expanded by Default</h5>
                <p class="card-text">This collapse is shown by default and includes an icon in the trigger.</p>
            </div>
        </div>
    ')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced Collapse Features')
    ->subtitle('Collapse with icon, custom styling, and default expanded state')
    ->content($advancedCollapse)
    ->render();

// ################## Collapse Variations ##################
$collapseVariations = wrapExampleCode(<<<'CODE'
// Link trigger with horizontal collapse
echo ThemedComponent::make('content/collapse')
    ->id('horizontal-collapse')
    ->trigger([
        'tag' => 'a',
        'text' => 'Toggle Horizontal',
        'class' => 'text-decoration-none text-primary'
    ])
    ->horizontal(true)
    ->content('
        <div class="card card-body" style="width: 300px;">
            <p class="mb-0">This content collapses horizontally instead of vertically.</p>
        </div>
    ')
    ->render();

// Multiple triggers for the same collapse
echo ThemedComponent::make('content/collapse')
    ->id('multi-trigger')
    ->trigger([
        'text' => 'Primary Button',
        'variant' => 'primary',
        'class' => 'me-2'
    ])
    ->content('
        <div class="alert alert-info mt-3">
            This content can be toggled by multiple triggers!
        </div>
    ')
    ->render();

echo ThemedComponent::make('content/collapse')
    ->id('multi-trigger')
    ->trigger([
        'tag' => 'a',
        'text' => 'or click this link',
        'class' => 'text-decoration-none'
    ])
    ->render();
CODE);

$collapseVariations .= ThemedComponent::make($component)
    ->id('horizontal-collapse')
    ->trigger([
        'tag' => 'a',
        'text' => 'Toggle Horizontal',
        'class' => 'text-decoration-none text-primary'
    ])
    ->horizontal(true)
    ->content('
        <div class="card card-body" style="width: 300px;">
            <p class="mb-0">This content collapses horizontally instead of vertically.</p>
        </div>
    ')
    ->render();

$collapseVariations .= '<div class="mt-4">';
$collapseVariations .= ThemedComponent::make($component)
    ->id('multi-trigger')
    ->trigger([
        'text' => 'Primary Button',
        'variant' => 'primary',
        'class' => 'me-2'
    ])
    ->content('
        <div class="alert alert-info mt-3">
            This content can be toggled by multiple triggers!
        </div>
    ')
    ->render();

$collapseVariations .= ThemedComponent::make($component)
    ->id('multi-trigger')
    ->trigger([
        'tag' => 'a',
        'text' => 'or click this link',
        'class' => 'text-decoration-none'
    ])
    ->render();
$collapseVariations .= '</div>';

$content .= ThemedComponent::make('layout/section')
    ->title('Collapse Variations')
    ->subtitle('Different collapse styles including horizontal collapse and multiple triggers')
    ->content($collapseVariations)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;
