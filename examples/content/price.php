<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = 'content/price';

// Show component documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Pricing Plans ##################
$basicPricingCode = <<<'CODE'
// Basic pricing plans with three tiers
echo ThemedComponent::make('content/price')
    ->plans([
        [
            'title' => 'Free',
            'price' => 0,
            'period' => '/mo',
            'features' => [
                '10 users included',
                '2 GB of storage',
                'Email support',
                'Help center access'
            ],
            'button' => [
                'text' => 'Sign up for free',
                'variant' => 'outline-primary'
            ]
        ],
        [
            'title' => 'Pro',
            'price' => 15,
            'period' => '/mo',
            'features' => [
                '20 users included',
                '10 GB of storage',
                'Priority email support',
                'Help center access'
            ],
            'button' => [
                'text' => 'Get started',
                'variant' => 'primary'
            ]
        ],
        [
            'title' => 'Enterprise',
            'price' => 29,
            'period' => '/mo',
            'features' => [
                '30 users included',
                '15 GB of storage',
                'Phone and email support',
                'Help center access'
            ],
            'button' => [
                'text' => 'Contact us',
                'variant' => 'primary'
            ],
            'highlighted' => true
        ]
    ])
    ->render();
CODE;

$basicPricingContent = wrapExampleCode($basicPricingCode);

$basicPricingContent .= ThemedComponent::make('content/price')
    ->plans([
        [
            'title' => 'Free',
            'price' => 0,
            'period' => '/mo',
            'features' => [
                '10 users included',
                '2 GB of storage',
                'Email support',
                'Help center access'
            ],
            'button' => [
                'text' => 'Sign up for free',
                'variant' => 'outline-primary'
            ]
        ],
        [
            'title' => 'Pro',
            'price' => 15,
            'period' => '/mo',
            'features' => [
                '20 users included',
                '10 GB of storage',
                'Priority email support',
                'Help center access'
            ],
            'button' => [
                'text' => 'Get started',
                'variant' => 'primary'
            ]
        ],
        [
            'title' => 'Enterprise',
            'price' => 29,
            'period' => '/mo',
            'features' => [
                '30 users included',
                '15 GB of storage',
                'Phone and email support',
                'Help center access'
            ],
            'button' => [
                'text' => 'Contact us',
                'variant' => 'primary'
            ],
            'highlighted' => true
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Pricing Plans')
    ->subtitle('A standard three-tier pricing plan layout with a highlighted enterprise option')
    ->content($basicPricingContent)
    ->render();

// ################## Custom Pricing Plans ##################
$customPricingCode = <<<'CODE'
// Custom pricing plans with different features and pricing periods
echo ThemedComponent::make('content/price')
    ->plans([
        [
            'title' => 'Basic',
            'price' => 99,
            'period' => '/year',
            'features' => [
                'Single user',
                '5 GB storage',
                'Basic support',
                'Community access'
            ],
            'button' => [
                'text' => 'Choose Basic',
                'variant' => 'outline-primary'
            ]
        ],
        [
            'title' => 'Team',
            'price' => 299,
            'period' => '/year',
            'features' => [
                'Up to 10 users',
                '50 GB storage',
                'Priority support',
                'Team collaboration'
            ],
            'button' => [
                'text' => 'Choose Team',
                'variant' => 'primary'
            ],
            'highlighted' => true
        ]
    ])
    ->class('mt-4')
    ->render();
CODE;

$customPricingContent = wrapExampleCode($customPricingCode);

$customPricingContent .= ThemedComponent::make('content/price')
    ->plans([
        [
            'title' => 'Basic',
            'price' => 99,
            'period' => '/year',
            'features' => [
                'Single user',
                '5 GB storage',
                'Basic support',
                'Community access'
            ],
            'button' => [
                'text' => 'Choose Basic',
                'variant' => 'outline-primary'
            ]
        ],
        [
            'title' => 'Team',
            'price' => 299,
            'period' => '/year',
            'features' => [
                'Up to 10 users',
                '50 GB storage',
                'Priority support',
                'Team collaboration'
            ],
            'button' => [
                'text' => 'Choose Team',
                'variant' => 'primary'
            ],
            'highlighted' => true
        ]
    ])
    ->class('mt-4')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Custom Pricing Plans')
    ->subtitle('Customized pricing plans with yearly billing and different features')
    ->content($customPricingContent)
    ->render();

// Show the template file
$content .= showComponentTemplate($component);

// Display all content
echo $content;
