<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "feedback/progress-stacked";

$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Stacked Progress Examples ##################
$basicStackedCode = wrapExampleCode(<<<'CODE'
// Basic stacked progress
echo ThemedComponent::make('feedback/progress-stacked')
    ->segments([
        [
            'value' => 15,
            'label' => 'Segment one'
        ],
        [
            'value' => 30,
            'label' => 'Segment two',
            'variant' => 'success'
        ],
        [
            'value' => 20,
            'label' => 'Segment three',
            'variant' => 'info'
        ]
    ])
    ->class('mb-3')
    ->render();

// Stacked progress with text backgrounds
echo ThemedComponent::make('feedback/progress-stacked')
    ->segments([
        [
            'value' => 20,
            'label' => 'Primary segment',
            'variant' => 'primary',
            'textBg' => true
        ],
        [
            'value' => 25,
            'label' => 'Success segment',
            'variant' => 'success',
            'textBg' => true
        ],
        [
            'value' => 15,
            'label' => 'Warning segment',
            'variant' => 'warning',
            'textBg' => true
        ]
    ])
    ->render();
CODE);

$basicStackedContent = ThemedComponent::make('feedback/progress-stacked')
    ->segments([
        [
            'value' => 15,
            'label' => 'Segment one'
        ],
        [
            'value' => 30,
            'label' => 'Segment two',
            'variant' => 'success'
        ],
        [
            'value' => 20,
            'label' => 'Segment three',
            'variant' => 'info'
        ]
    ])
    ->class('mb-3')
    ->render();

$basicStackedContent .= ThemedComponent::make('feedback/progress-stacked')
    ->segments([
        [
            'value' => 20,
            'label' => 'Primary segment',
            'variant' => 'primary',
            'textBg' => true
        ],
        [
            'value' => 25,
            'label' => 'Success segment',
            'variant' => 'success',
            'textBg' => true
        ],
        [
            'value' => 15,
            'label' => 'Warning segment',
            'variant' => 'warning',
            'textBg' => true
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Stacked Progress Bars')
    ->subtitle('Multiple progress bars stacked together')
    ->content($basicStackedCode . $basicStackedContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
