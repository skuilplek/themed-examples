<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;

$component = "navigation/navbar";

$output = '';
$output .= componentDocumentation($component);
$output .= fullExample($component);

$example = wrapExampleCode(<<<'CODE'
ThemedComponent::make('navigation/navbar')
    ->brand([
        'text' => 'Docs',
        'url' => 'index.php'
    ])
    ->style('dark')
    ->bg('dark')
    ->container(true)
    ->expand('md')
    ->collapse([
        'id' => 'navbarCollapse'
    ])
    ->items([
        [
            'text' => 'Home',
            'url' => '#!'
        ],
        [
            'text' => 'Features',
            'url' => '#!'
        ],
        [
            'text' => 'Dropdown',
            'dropdown' => [
                [
                    'text' => 'Dropdown Item 1',
                    'url' => '#!'
                ],
                [
                    'text' => 'Dropdown Item 2',
                    'url' => '#!'
                ],
                [
                    'text' => 'Dropdown Item 3',
                    'url' => '#!'
                ],
            ],
        ]
    ])
    ->class('mb-2 mb-md-0')
    ->render();
CODE);

$output .= ThemedComponent::make('layout/section')
    ->content($example)
    ->title('Navbar usage example')
    ->subtitle('Example of how to use the navbar component')
    ->render();

$output .= showComponentTemplate($component);

echo $output;