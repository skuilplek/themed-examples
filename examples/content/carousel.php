<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "content/carousel";

// ################## Component Documentation ##################
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Usage Example ##################
$basicCarousel = wrapExampleCode(<<<'CODE'
// Basic carousel example
echo ThemedComponent::make($component)
    ->id('basicCarousel')
    ->items([
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=1',
                'alt' => 'First slide'
            ],
            'title' => 'First Slide',
            'caption' => 'This is the first slide description.'
        ],
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=2',
                'alt' => 'Second slide'
            ],
            'title' => 'Second Slide',
            'caption' => 'This is the second slide description.'
        ],
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=3',
                'alt' => 'Third slide'
            ],
            'title' => 'Third Slide',
            'caption' => 'This is the third slide description.'
        ]
    ])
    ->controls(true)
    ->indicators(true)
    ->render();
CODE);

$basicCarousel .= ThemedComponent::make($component)
    ->id('basicCarousel')
    ->items([
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=1',
                'alt' => 'First slide'
            ],
            'title' => 'First Slide',
            'caption' => 'This is the first slide description.'
        ],
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=2',
                'alt' => 'Second slide'
            ],
            'title' => 'Second Slide',
            'caption' => 'This is the second slide description.'
        ],
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=3',
                'alt' => 'Third slide'
            ],
            'title' => 'Third Slide',
            'caption' => 'This is the third slide description.'
        ]
    ])
    ->controls(true)
    ->indicators(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Carousel Usage')
    ->subtitle('Shows a simple carousel with three slides, navigation controls, and indicators')
    ->content($basicCarousel)
    ->render();

// ################## Advanced Features ##################
$advancedCarousel = wrapExampleCode(<<<'CODE'
// Advanced carousel with custom styling and buttons
echo ThemedComponent::make($component)
    ->id('advancedCarousel')
    ->items([
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=4',
                'alt' => 'Feature slide'
            ],
            'title' => 'Feature Slide',
            'caption' => 'This slide includes call-to-action buttons.',
            'caption_class' => 'text-start bg-dark bg-opacity-75 p-4',
            'buttons' => [
                [
                    'text' => 'Learn More',
                    'url' => '#',
                    'style' => 'primary'
                ],
                [
                    'text' => 'Contact Us',
                    'url' => '#',
                    'style' => 'outline-light'
                ]
            ]
        ],
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=5',
                'alt' => 'Feature slide 2'
            ],
            'title' => 'Custom Aspect Ratio',
            'caption' => 'This carousel maintains a 16:9 aspect ratio.'
        ]
    ])
    ->controls(true)
    ->indicators(true)
    ->aspect_ratio(56.25)
    ->fade(true)
    ->dark_controls(true)
    ->dark_indicators(true)
    ->styles(true)
    ->render();
CODE);

$advancedCarousel .= ThemedComponent::make($component)
    ->id('advancedCarousel')
    ->items([
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=4',
                'alt' => 'Feature slide'
            ],
            'title' => 'Feature Slide',
            'caption' => 'This slide includes call-to-action buttons.',
            'caption_class' => 'text-start bg-dark bg-opacity-75 p-4',
            'buttons' => [
                [
                    'text' => 'Learn More',
                    'url' => '#',
                    'style' => 'primary'
                ],
                [
                    'text' => 'Contact Us',
                    'url' => '#',
                    'style' => 'outline-light'
                ]
            ]
        ],
        [
            'image' => [
                'src' => 'https://picsum.photos/800/400?random=5',
                'alt' => 'Feature slide 2'
            ],
            'title' => 'Custom Aspect Ratio',
            'caption' => 'This carousel maintains a 16:9 aspect ratio.'
        ]
    ])
    ->controls(true)
    ->indicators(true)
    ->aspect_ratio(56.25)
    ->fade(true)
    ->dark_controls(true)
    ->dark_indicators(true)
    ->styles(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced Carousel Features')
    ->subtitle('Demonstrates fade transition, fixed aspect ratio, custom caption styling, and call-to-action buttons')
    ->content($advancedCarousel)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;
