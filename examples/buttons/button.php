<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;

// Initialize content
$content = componentDocumentation('buttons/button');
$content .= fullExample('buttons/button');

// Basic Buttons
$basicButtonsCode = <<<'CODE'
$variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'];

foreach ($variants as $variant) {
    echo ThemedComponent::make('buttons/button')
        ->variant($variant)
        ->text(ucfirst($variant))
        ->class('me-2 mb-2')
        ->render();
}
CODE;

$basicButtonsContent = function () {
    $variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'];
    $output = '';
    foreach ($variants as $variant) {
        $output .= ThemedComponent::make('buttons/button')
            ->variant($variant)
            ->text(ucfirst($variant))
            ->class('me-2 mb-2')
            ->render();
    }
    return $output;
};

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Buttons')
    ->subtitle('Standard button styles for actions in forms, dialogs, and more.')
    ->content('<pre class="bg-light p-3 rounded mb-4">' . htmlspecialchars($basicButtonsCode) . '</pre>' . $basicButtonsContent())
    ->render();

// Outline Buttons
$outlineButtonsCode = <<<'CODE'
$variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

foreach ($variants as $variant) {
    echo ThemedComponent::make('buttons/button')
        ->variant($variant)
        ->outline(true)
        ->text(ucfirst($variant))
        ->class('me-2 mb-2')
        ->render();
}
CODE;

$outlineButtonsContent = function () {
    $variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];
    $output = '';
    foreach ($variants as $variant) {
        $output .= ThemedComponent::make('buttons/button')
            ->variant($variant)
            ->outline(true)
            ->text(ucfirst($variant))
            ->class('me-2 mb-2')
            ->render();
    }
    return $output;
};

$content .= ThemedComponent::make('layout/section')
    ->title('Outline Buttons')
    ->subtitle('Alternative button styles with transparent backgrounds.')
    ->content('<pre class="bg-light p-3 rounded mb-4">' . htmlspecialchars($outlineButtonsCode) . '</pre>' . $outlineButtonsContent())
    ->render();

// Button Sizes
$sizeButtonsCode = <<<'CODE'
$sizes = ['sm', null, 'lg'];

foreach ($sizes as $size) {
    $label = $size ? ucfirst($size) : 'Default';
    echo ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->size($size)
        ->text($label . ' button')
        ->class('me-2 mb-2')
        ->render();
}
CODE;

$sizeButtonsContent = function () {
    $sizes = ['sm', null, 'lg'];
    $output = '';
    foreach ($sizes as $size) {
        $label = $size ? ucfirst($size) : 'Default';
        $output .= ThemedComponent::make('buttons/button')
            ->variant('primary')
            ->size($size)
            ->text($label . ' button')
            ->class('me-2 mb-2')
            ->render();
    }
    return $output;
};

$content .= ThemedComponent::make('layout/section')
    ->title('Button Sizes')
    ->subtitle('Different button sizes for varied contexts.')
    ->content('<pre class="bg-light p-3 rounded mb-4">' . htmlspecialchars($sizeButtonsCode) . '</pre>' . $sizeButtonsContent())
    ->render();

// Icon Buttons
$iconButtonsCode = <<<'CODE'
$icons = [
    ['text' => 'Add', 'icon' => 'plus-circle'],
    ['text' => 'Edit', 'icon' => 'pencil'],
    ['text' => 'Delete', 'icon' => 'trash', 'variant' => 'danger'],
    ['text' => 'Next', 'icon' => 'arrow-right', 'icon_position' => 'end'],
];

foreach ($icons as $icon) {
    echo ThemedComponent::make('buttons/button')
        ->variant($icon['variant'] ?? 'primary')
        ->text($icon['text'])
        ->icon($icon['icon'])
        ->iconPosition($icon['icon_position'] ?? 'start')
        ->class('me-2 mb-2')
        ->render();
}
CODE;

$iconButtonsContent = function () {
    $icons = [
        ['text' => 'Add', 'icon' => 'plus-circle'],
        ['text' => 'Edit', 'icon' => 'pencil'],
        ['text' => 'Delete', 'icon' => 'trash', 'variant' => 'danger'],
        ['text' => 'Next', 'icon' => 'arrow-right', 'icon_position' => 'end'],
    ];
    $output = '';
    foreach ($icons as $icon) {
        $output .= ThemedComponent::make('buttons/button')
            ->variant($icon['variant'] ?? 'primary')
            ->text($icon['text'])
            ->icon($icon['icon'])
            ->iconPosition($icon['icon_position'] ?? 'start')
            ->class('me-2 mb-2')
            ->render();
    }
    return $output;
};

$content .= ThemedComponent::make('layout/section')
    ->title('Icon Buttons')
    ->subtitle('Buttons with icons for enhanced visual communication.')
    ->content('<pre class="bg-light p-3 rounded mb-4">' . htmlspecialchars($iconButtonsCode) . '</pre>' . $iconButtonsContent())
    ->render();

// Button States
$stateButtonsCode = <<<'CODE'
// Normal state
echo ThemedComponent::make('buttons/button')
    ->variant('primary')
    ->text('Normal')
    ->class('me-2 mb-2')
    ->render();

// Active state
echo ThemedComponent::make('buttons/button')
    ->variant('primary')
    ->text('Active')
    ->active(true)
    ->class('me-2 mb-2')
    ->render();

// Disabled state
echo ThemedComponent::make('buttons/button')
    ->variant('primary')
    ->text('Disabled')
    ->disabled(true)
    ->class('me-2 mb-2')
    ->render();

// Loading state
echo ThemedComponent::make('buttons/button')
    ->variant('primary')
    ->text('Loading...')
    ->loading(true)
    ->class('me-2 mb-2')
    ->render();
CODE;

$stateButtonsContent = function () {
    $output = '';

    // Normal state
    $output .= ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->text('Normal')
        ->class('me-2 mb-2')
        ->render();

    // Active state
    $output .= ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->text('Active')
        ->active(true)
        ->class('me-2 mb-2')
        ->render();

    // Disabled state
    $output .= ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->text('Disabled')
        ->disabled(true)
        ->class('me-2 mb-2')
        ->render();

    // Loading state
    $output .= ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->text('Loading...')
        ->loading(true)
        ->class('me-2 mb-2')
        ->render();

    return $output;
};

$content .= ThemedComponent::make('layout/section')
    ->content('<pre class="bg-light p-3 rounded mb-4">' . htmlspecialchars($stateButtonsCode) . '</pre>' . $stateButtonsContent())
    ->subtitle('Various button states including active, disabled, and loading.')
    ->title('Button States')
    ->render();

// Block Buttons
$blockButtonsCode = <<<'CODE'
// Block button
echo ThemedComponent::make('buttons/button')
    ->variant('primary')
    ->text('Block Button')
    ->block(true)
    ->class('mb-2')
    ->render();

// Responsive block button
echo ThemedComponent::make('buttons/button')
    ->variant('secondary')
    ->text('Responsive Block Button')
    ->block('sm')
    ->class('mb-2')
    ->render();
CODE;

$blockButtonsContent = function () {
    $output = '';

    // Block button
    $output .= ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->text('Block Button')
        ->block(true)
        ->class('mb-2')
        ->render();

    // Responsive block button
    $output .= ThemedComponent::make('buttons/button')
        ->variant('secondary')
        ->text('Responsive Block Button')
        ->block('sm')
        ->class('mb-2')
        ->render();

    return $output;
};

$content .= ThemedComponent::make('layout/section')
    ->title('Block Buttons')
    ->subtitle('Full-width buttons that span the entire width of the parent element.')
    ->content('<pre class="bg-light p-3 rounded mb-4">' . htmlspecialchars($blockButtonsCode) . '</pre>' . $blockButtonsContent())
    ->render();

// Button Tags
$buttonTagsCode = <<<'CODE'
// Button tag (default)
echo ThemedComponent::make('buttons/button')
    ->variant('primary')
    ->text('Button')
    ->class('me-2 mb-2')
    ->render();

// Anchor tag
echo ThemedComponent::make('buttons/button')
    ->variant('primary')
    ->text('Link')
    ->tag('a')
    ->href('#!')
    ->class('me-2 mb-2')
    ->render();

// Input tag
echo ThemedComponent::make('buttons/button')
    ->variant('primary')
    ->text('Input')
    ->tag('input')
    ->type('submit')
    ->class('me-2 mb-2')
    ->render();
CODE;

$buttonTagsContent = function () {
    $output = '';

    // Button tag (default)
    $output .= ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->text('Button')
        ->class('me-2 mb-2')
        ->render();

    // Anchor tag
    $output .= ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->text('Link')
        ->tag('a')
        ->href('#!')
        ->class('me-2 mb-2')
        ->render();

    // Input tag
    $output .= ThemedComponent::make('buttons/button')
        ->variant('primary')
        ->text('Input')
        ->tag('input')
        ->type('submit')
        ->class('me-2 mb-2')
        ->render();

    return $output;
};

$content .= ThemedComponent::make('layout/section')
    ->title('Button Tags')
    ->subtitle('Buttons can be rendered as different HTML elements.')
    ->content('<pre class="bg-light p-3 rounded mb-4">' . htmlspecialchars($buttonTagsCode) . '</pre>' . $buttonTagsContent())
    ->render();

// Show Template File
$content .= showCOmponentTemplate('buttons/button');

// Render the page
echo $content;
