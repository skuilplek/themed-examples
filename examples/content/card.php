<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "content/card";

// ################## Component Documentation ##################
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Usage Example ##################
$basicCard = wrapExampleCode(<<<'CODE'
// Basic card with title and content
echo ThemedComponent::make(content/card)
    ->id('basic-card')
    ->body([
        'title' => 'Card Title',
        'content' => '<p>Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>'
    ])
    ->render();
CODE);

$basicCard .= ThemedComponent::make($component)
    ->id('basic-card')
    ->body([
        'title' => 'Card Title',
        'content' => '<p>Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>'
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Card Usage')
    ->subtitle('A simple card with title and text content')
    ->content($basicCard)
    ->render();

// ################## Advanced Features ##################
$advancedCard = wrapExampleCode(<<<'CODE'
// Advanced card with image, header, and footer
echo ThemedComponent::make('content/card')
    ->id('featured-article')
    ->variant('light')
    ->border('primary')
    ->header([
        'content' => 'Featured Article',
        'variant' => 'primary'
    ])
    ->image([
        'src' => 'https://picsum.photos/800/400',
        'alt' => 'Article thumbnail',
        'position' => 'top'
    ])
    ->body([
        'title' => 'Special Feature',
        'subtitle' => 'Discover what\'s new',
        'content' => '<p>This card demonstrates various features including a header with variant, 
                     full-width image at the top, and a footer with additional information.</p>
                     <a href="#" class="btn btn-primary">Read more</a>'
    ])
    ->footer([
        'content' => '<small class="text-muted">Last updated 3 mins ago</small>',
        'class' => 'text-end'
    ])
    ->render();
CODE);

$advancedCard .= ThemedComponent::make($component)
    ->id('featured-article')
    ->variant('light')
    ->border('primary')
    ->header([
        'content' => 'Featured Article',
        'variant' => 'primary'
    ])
    ->image([
        'src' => 'https://picsum.photos/800/400',
        'alt' => 'Article thumbnail',
        'position' => 'top'
    ])
    ->body([
        'title' => 'Special Feature',
        'subtitle' => 'Discover what\'s new',
        'content' => '<p>This card demonstrates various features including a header with variant, 
                     full-width image at the top, and a footer with additional information.</p>
                     <a href="#" class="btn btn-primary">Read more</a>'
    ])
    ->footer([
        'content' => '<small class="text-muted">Last updated 3 mins ago</small>',
        'class' => 'text-end'
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced Card Features')
    ->subtitle('Card with header, image, body content, and footer')
    ->content($advancedCard)
    ->render();

// ################## Card Variations ##################
$cardVariations = wrapExampleCode(<<<'CODE'
// Horizontal card with image
echo ThemedComponent::make('content/card')
    ->id('horizontal-card')
    ->horizontal(true)
    ->image([
        'src' => 'https://picsum.photos/200/200',
        'alt' => 'Card image',
        'class' => 'img-fluid rounded-start'
    ])
    ->body([
        'title' => 'Horizontal Layout',
        'content' => '<p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>'
    ])
    ->render();

// Grid container for card variations
echo '<div class="row g-4">';

// Horizontal card with image
echo '<div class="col-md-6">';
echo ThemedComponent::make('content/card')
    ->id('horizontal-card')
    ->horizontal(true)
    ->image([
        'src' => 'https://picsum.photos/200/200',
        'alt' => 'Card image',
        'class' => 'img-fluid rounded-start'
    ])
    ->body([
        'title' => 'Horizontal Layout',
        'content' => '<p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>'
    ])
    ->render();
echo '</div>';

// Card with image overlay
echo '<div class="col-md-6">';
echo ThemedComponent::make('content/card')
    ->id('overlay-card')
    ->class('text-white')
    ->image([
        'src' => 'https://picsum.photos/800/400',
        'alt' => 'Card background',
        'position' => 'overlay'
    ])
    ->body([
        'title' => 'Image Overlay',
        'content' => '<p>This is a card with an image overlay effect. The text appears on top of the image.</p>'
    ])
    ->render();
echo '</div>';

echo '</div>';
CODE);

$cardVariations .= '<div class="row g-4">';

// Horizontal card
$cardVariations .= '<div class="col-md-6">';
$cardVariations .= ThemedComponent::make($component)
    ->id('horizontal-card')
    ->horizontal(true)
    ->image([
        'src' => 'https://picsum.photos/200/200',
        'alt' => 'Card image',
        'class' => 'img-fluid rounded-start'
    ])
    ->body([
        'title' => 'Horizontal Layout',
        'content' => '<p>This is a wider card with supporting text below as a natural lead-in to additional content.</p>'
    ])
    ->render();
$cardVariations .= '</div>';

// Overlay card
$cardVariations .= '<div class="col-md-6">';
$cardVariations .= ThemedComponent::make($component)
    ->id('overlay-card')
    ->class('text-white')
    ->image([
        'src' => 'https://picsum.photos/800/400',
        'alt' => 'Card background',
        'position' => 'overlay'
    ])
    ->body([
        'title' => 'Image Overlay',
        'content' => '<p>This is a card with an image overlay effect. The text appears on top of the image.</p>'
    ])
    ->render();
$cardVariations .= '</div>';

$cardVariations .= '</div>';

$content .= ThemedComponent::make('layout/section')
    ->title('Card Variations')
    ->subtitle('Different card layouts including horizontal and overlay styles')
    ->content($cardVariations)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;
