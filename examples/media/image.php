<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "media/image";

// ################## Component Documentation ##################
$content = componentDocumentation($component);

$content .= fullExample($component, ['excluded_options']);

// ################## Basic Usage Example ##################
$basicImage = wrapExampleCode(<<<'CODE'
// Basic image example
echo ThemedComponent::make($component)
    ->src('https://picsum.photos/150')
    ->alt('Example Image')
    ->caption('This is a basic image caption.')
    ->render();
CODE);

$basicImage .= ThemedComponent::make($component)
    ->src('https://picsum.photos/150')
    ->alt('Example Image')
    ->caption('This is a basic image caption.')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Image Usage')
    ->subtitle('Demonstrates the simplest way to use the image component.')
    ->content($basicImage)
    ->render();

// ################## Advanced Features ##################
$advancedImage = wrapExampleCode(<<<'CODE'
// Advanced image example with additional options
echo ThemedComponent::make($component)
    ->src('https://picsum.photos/300')
    ->alt('Advanced Example Image')
    ->caption('This image has custom dimensions and styling.')
    ->width(300)
    ->height(200)
    ->class('custom-class')
    ->render();
CODE);

$advancedImage .= ThemedComponent::make($component)
    ->src('https://picsum.photos/300')
    ->alt('Advanced Example Image')
    ->caption('This image has custom dimensions and styling.')
    ->width(300)
    ->height(200)
    ->class('custom-class')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced Image Features')
    ->subtitle('Shows additional customization options for the image component.')
    ->content($advancedImage)
    ->render();

// ################## Variations ##################
$variationsImage = wrapExampleCode(<<<'CODE'
// Image size variations
echo ThemedComponent::make($component)
    ->src('https://picsum.photos/100')
    ->alt('Small Image')
    ->caption('Small size image')
    ->width(100)
    ->render();

echo ThemedComponent::make($component)
    ->src('https://picsum.photos/500')
    ->alt('Large Image')
    ->caption('Large size image')
    ->width(500)
    ->render();
CODE);

$variationsImage .= ThemedComponent::make($component)
    ->src('https://picsum.photos/100')
    ->alt('Small Image')
    ->caption('Small size image')
    ->width(100)
    ->render();

$variationsImage .= ThemedComponent::make($component)
    ->src('https://picsum.photos/500')
    ->alt('Large Image')
    ->caption('Large size image')
    ->width(500)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Image Variations')
    ->subtitle('Demonstrates different sizes of the image component.')
    ->content($variationsImage)
    ->render();

// ################## Figure Example ##################
$figureImage = wrapExampleCode(<<<'CODE'
// Image with figure and caption alignment
echo ThemedComponent::make($component)
    ->src('https://picsum.photos/400')
    ->alt('Figure Example Image')
    ->figure(true)
    ->caption('This is a centered figure caption')
    ->caption_align('text-center')
    ->fluid(true)
    ->render();
CODE);

$figureImage .= ThemedComponent::make($component)
    ->src('https://picsum.photos/400')
    ->alt('Figure Example Image')
    ->figure(true)
    ->caption('This is a centered figure caption')
    ->caption_align('text-center')
    ->fluid(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Figure Example')
    ->subtitle('Shows how to use the figure wrapper with caption alignment')
    ->content($figureImage)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;