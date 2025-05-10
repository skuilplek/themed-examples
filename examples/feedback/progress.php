<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "feedback/progress";

$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Progress Examples ##################
$basicProgressCode = wrapExampleCode(<<<'CODE'
// Basic progress bars
echo ThemedComponent::make('feedback/progress')
    ->value(0)
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(25)
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(50)
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(100)
    ->render();
CODE);

$basicProgressContent = ThemedComponent::make('feedback/progress')
    ->value(0)
    ->class('mb-3')
    ->render();

$basicProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(25)
    ->class('mb-3')
    ->render();

$basicProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(50)
    ->class('mb-3')
    ->render();

$basicProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->class('mb-3')
    ->render();

$basicProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(100)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Progress Bars')
    ->subtitle('Simple progress bars with different values')
    ->content($basicProgressCode . $basicProgressContent)
    ->render();

// ################## Progress Variants ##################
$variantProgressCode = wrapExampleCode(<<<'CODE'
// Progress bar variants
echo ThemedComponent::make('feedback/progress')
    ->value(25)
    ->variant('success')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(50)
    ->variant('info')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->variant('warning')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(100)
    ->variant('danger')
    ->render();

// Progress bar variants with text background
echo ThemedComponent::make('feedback/progress')
    ->value(25)
    ->variant('success')
    ->textBg(true)
    ->showLabel(true)
    ->label('Success example')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(50)
    ->variant('info')
    ->textBg(true)
    ->showLabel(true)
    ->label('Info example')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->variant('warning')
    ->textBg(true)
    ->showLabel(true)
    ->label('Warning example')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(100)
    ->variant('danger')
    ->textBg(true)
    ->showLabel(true)
    ->label('Danger example')
    ->render();
CODE);

$variantProgressContent = ThemedComponent::make('feedback/progress')
    ->value(25)
    ->variant('success')
    ->class('mb-3')
    ->render();

$variantProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(50)
    ->variant('info')
    ->class('mb-3')
    ->render();

$variantProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->variant('warning')
    ->class('mb-3')
    ->render();

$variantProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(100)
    ->variant('danger')
    ->class('mb-3')
    ->render();

$variantProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(25)
    ->variant('success')
    ->textBg(true)
    ->showLabel(true)
    ->label('Success example')
    ->class('mb-3')
    ->render();

$variantProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(50)
    ->variant('info')
    ->textBg(true)
    ->showLabel(true)
    ->label('Info example')
    ->class('mb-3')
    ->render();

$variantProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->variant('warning')
    ->textBg(true)
    ->showLabel(true)
    ->label('Warning example')
    ->class('mb-3')
    ->render();

$variantProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(100)
    ->variant('danger')
    ->textBg(true)
    ->showLabel(true)
    ->label('Danger example')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Progress Bar Variants')
    ->subtitle('Progress bars with different color variants')
    ->content($variantProgressCode . $variantProgressContent)
    ->render();

// ################## Striped Progress Variants ##################
$stripedProgressCode = wrapExampleCode(<<<'CODE'
// Default striped progress bar
echo ThemedComponent::make('feedback/progress')
    ->value(10)
    ->striped(true)
    ->label('Default striped example')
    ->class('mb-3')
    ->render();

// Success striped progress bar
echo ThemedComponent::make('feedback/progress')
    ->value(25)
    ->striped(true)
    ->variant('success')
    ->label('Success striped example')
    ->class('mb-3')
    ->render();

// Info striped progress bar
echo ThemedComponent::make('feedback/progress')
    ->value(50)
    ->striped(true)
    ->variant('info')
    ->label('Info striped example')
    ->class('mb-3')
    ->render();

// Warning striped progress bar
echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->variant('warning')
    ->label('Warning striped example')
    ->class('mb-3')
    ->render();

// Danger striped progress bar
echo ThemedComponent::make('feedback/progress')
    ->value(100)
    ->striped(true)
    ->variant('danger')
    ->label('Danger striped example')
    ->class('mb-3')
    ->render();

// Animated striped progress bars
echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->label('Animated striped example')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->variant('success')
    ->label('Success animated example')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->variant('info')
    ->label('Info animated example')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->variant('warning')
    ->label('Warning animated example')
    ->class('mb-3')
    ->render();

echo ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->variant('danger')
    ->label('Danger animated example')
    ->render();
CODE);

$stripedProgressContent = ThemedComponent::make('feedback/progress')
    ->value(10)
    ->striped(true)
    ->label('Default striped example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(25)
    ->striped(true)
    ->variant('success')
    ->label('Success striped example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(50)
    ->striped(true)
    ->variant('info')
    ->label('Info striped example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->variant('warning')
    ->label('Warning striped example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(100)
    ->striped(true)
    ->variant('danger')
    ->label('Danger striped example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->label('Animated striped example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->variant('success')
    ->label('Success animated example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->variant('info')
    ->label('Info animated example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->variant('warning')
    ->label('Warning animated example')
    ->class('mb-3')
    ->render();

$stripedProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(75)
    ->striped(true)
    ->animated(true)
    ->variant('danger')
    ->label('Danger animated example')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Striped and Animated Progress')
    ->subtitle('Progress bars with striped patterns and animations')
    ->content($stripedProgressCode . $stripedProgressContent)
    ->render();

// ################## Progress with Labels ##################
$labelProgressCode = wrapExampleCode(<<<'CODE'
// Progress bar with label
echo ThemedComponent::make('feedback/progress')
    ->value(25)
    ->showLabel(true)
    ->class('mb-3')
    ->render();

// Progress bar with custom min/max
echo ThemedComponent::make('feedback/progress')
    ->value(7500)
    ->min(0)
    ->max(10000)
    ->showLabel(true)
    ->render();
CODE);

$labelProgressContent = ThemedComponent::make('feedback/progress')
    ->value(25)
    ->showLabel(true)
    ->class('mb-3')
    ->render();

$labelProgressContent .= ThemedComponent::make('feedback/progress')
    ->value(7500)
    ->min(0)
    ->max(10000)
    ->showLabel(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Progress with Labels')
    ->subtitle('Progress bars with visible labels and custom ranges')
    ->content($labelProgressCode . $labelProgressContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
