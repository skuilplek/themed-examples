<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;

$component = "layout/section";

$output = '';
$output .= componentDocumentation($component);
$output .= fullExample($component);

$example = wrapExampleCode(<<<'CODE'

ThemedComponent::make('layout/section')
    ->content('Some HTML content')
    ->title('Section usage example')
    ->subtitle('Example of how to use the section component')
    ->render();
CODE);

$output .= ThemedComponent::make('layout/section')
    ->content($example)
    ->title('Section usage example')
    ->subtitle('Example of how to use the section component')
    ->render();

$output .= showComponentTemplate($component);

echo $output;