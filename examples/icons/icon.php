<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;
use Skuilplek\Themed\Themed;

$component = "icons/icon";

$output = '';
$output .= componentDocumentation($component);
$output .= fullExample($component, ['svg']);

// ##################  Usage Example - Custom and predefined colors & sizes ##################
$predefinedIconOptions = '';

// Add the code we use below as an example to wrapExampleCode
$predefinedIconOptions .= wrapExampleCode(<<<'CODE'
// Example usage of pre-defined icon sizes & colors in icon.css
$output = "";
$presetColors = [
    "primary",
    "secondary",
    "success",
    "danger",
    "warning",
    "info",
    "dark"
];

$customSizes = [
    "xs" => "0.75rem",
    "sm" => "0.875rem",
    "lg" => "1.25rem",
    "xl" => "1.5rem",
    "2xl" => "2rem",
    "3xl" => "3rem"
];

$i = 0;
foreach ($customSizes as $size => $description) {
    $color = $presetColors[$i % count($presetColors)];
    $output .= ThemedComponent::make("icons/icon")
        ->name("star-fill")
        ->preset_size($size)
        ->preset_color($color)
        ->title("Size: {$description} - ({$color})")
        ->render();
    $i++;
}
    
$echo $output
CODE);

$presetColors = [
    'primary',
    'secondary',
    'success',
    'danger',
    'warning',
    'info',
    'dark'
];

$customSizes = [
    'xs' => '0.75rem',
    'sm' => '0.875rem',
    'lg' => '1.25rem',
    'xl' => '1.5rem',
    '2xl' => '2rem',
    '3xl' => '3rem'
];

$i = 0;
foreach ($customSizes as $size => $description) {
    $color = $presetColors[$i % count($presetColors)];
    $predefinedIconOptions .= ThemedComponent::make($component)
        ->name('star-fill')
        ->preset_size($size)
        ->preset_color($color)
        ->title("Size: {$description} - ({$color})")
        ->render();
    $i++;
}

// Section: Predefined Colors & Sizes
$output .= ThemedComponent::make('layout/section')
    ->title('Predefined Colors & Sizes')
    ->subtitle('Icons can be displayed in different colors using Bootstrap theme colors.')
    ->content($predefinedIconOptions)
    ->render();

// ##################  Usage Example - Generate a list of random icons ##################

//Get a bunch of random icon files
$icons = glob(Themed::getThemePath() . "icons/*.svg");

// Get 100 random icons
$iconList = array_rand($icons, 500);

// Add the code we use below as an example to wrapExampleCode
$iconGallery = wrapExampleCode(<<<'CODE'
// Generating a list of random icons
//Get a bunch of random icon files
$icons = glob( "/path_to_template/icons/*.svg");

// Get 100 random icons
$iconList = array_rand($icons, 500);

$output = "";
foreach ($iconList as $icon) {
    $color = randomColor();
    $name = basename($icons[$icon], '.svg');
    $size = rand(20, 40);
    $title = $name . ".svg ({$size}px) - {$color}";

    $output .= ThemedComponent::make('icons/icon')
            ->name($name)
            ->size($size.'px')
            ->title($title)
            ->color($color)
            ->render();
}
echo $output;
CODE);

// Generate the icon gallery
foreach ($iconList as $icon) {
    $color = randomColor();
    $name = basename($icons[$icon], '.svg');
    $size = rand(20, 40);
    $title = $name . ".svg ({$size}px) - {$color}";
    $iconGallery .= ThemedComponent::make('icons/icon')
        ->name($name)
        ->size($size . 'px')
        ->title($title)
        ->color($color)
        ->render();
}

// Section: Icon Gallery
$output .= ThemedComponent::make('layout/section')
    ->title('Random Icons')
    ->subtitle('Generate a bunch of random icons in random colors.')
    ->content($iconGallery)
    ->render();

// ##################  Show fill .twig template for this component ##################
$output .= showCOmponentTemplate($component);

echo $output;