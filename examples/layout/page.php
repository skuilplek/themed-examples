<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;
use Skuilplek\Themed\Themed;

$component = "layout/page";

$output = '';
$output .= componentDocumentation($component);

$example = wrapExampleCode(<<<'CODE'
ThemedComponent::make('layout/page')
    ->title('Bootstrap 5 Component Examples')
    ->description('Examples and documentation of Bootstrap 5 components and their usage.')
    ->container_class('py-5')
    ->navbar(
        ThemedComponent::make('navigation/navbar')
            ->brand([
                'text' => 'Themed',
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
            ->render()
    )
    ->content($content)
    ->header_scripts(Themed::headerScripts()) //Add last so all the scripts have a chance to load first
    ->footer_scripts(Themed::footerScripts()) //Add last so all the scripts have a chance to load first
    ->render();
CODE);

$output .= ThemedComponent::make('layout/section')
    ->content($example)
    ->title('Page usage example')
    ->subtitle('Example of how to use the page component')
    ->render();

$output .= showComponentTemplate($component);



echo $output;