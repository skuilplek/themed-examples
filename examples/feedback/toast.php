<?php
/**
 * Examples showcasing Bootstrap 5's toast component.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;
$component = "feedback/toast";

$content = '';
$content .= componentDocumentation($component);
$content .= fullExample($component);

// ##################  Usage Example - Basic Toasts ##################

$basicToastsContent = wrapExampleCode(<<<'CODE'
$variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info'];
foreach ($variants as $variant) {
    $basicToastsContent .= ThemedComponent::make($component)
        ->content('This is a ' . $variant . ' toast message.')
        ->title(ucfirst($variant) . ' Toast')
        ->subtitle('just now')
        ->variant($variant)
        ->autohide(false)
        ->render();
}
CODE);

// Basic Toasts Section
$variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info'];
foreach ($variants as $variant) {
    $basicToastsContent .= ThemedComponent::make($component)
        ->content('This is a ' . $variant . ' toast message.')
        ->title(ucfirst($variant) . ' Toast')
        ->subtitle('just now')
        ->variant($variant)
        ->autohide(false)
        ->render();
}

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Toasts')
    ->subtitle('Examples of basic toast notifications.')
    ->content($basicToastsContent)
    ->render();

// ##################  Usage Example - Toast Positions ##################

$toastPositionsContent = wrapExampleCode(<<<'CODE'
$positions = [
    'top-right' => 'Top Right',
    'top-left' => 'Top Left',
    'bottom-right' => 'Bottom Right',
    'bottom-left' => 'Bottom Left'
];
foreach ($positions as $position => $label) {
    $toastPositionsContent .= ThemedComponent::make('feedback/toast')
        ->content('This toast appears in the ' . strtolower($label) . ' position.')
        ->title($label . ' Toast')
        ->subtitle('2 seconds ago')
        ->position($position)
        ->variant('primary')
        ->autohide(false)
        ->render();
}
CODE);

$positions = [
    'top-right' => 'Top Right',
    'bottom-right' => 'Bottom Right',
    'bottom-left' => 'Bottom Left'
];
foreach ($positions as $position => $label) {
    $toastPositionsContent .= ThemedComponent::make('feedback/toast')
        ->content('This toast appears in the ' . strtolower($label) . ' position.')
        ->title($label . ' Toast')
        ->subtitle('2 seconds ago')
        ->position($position)
        ->variant('primary')
        ->autohide(false)
        ->render();
}

$content .= ThemedComponent::make('layout/section')
    ->title('Toast Positions')
    ->subtitle('Toasts in different screen positions.')
    ->content($toastPositionsContent)
    ->render();

// ##################  Usage Example - Toast with Icons ##################

$toastWithIconsContent = wrapExampleCode(<<<'CODE'
$iconToasts = [
    [
        'title' => 'Success',
        'content' => 'Operation completed successfully.',
        'icon' => 'check-circle',
        'variant' => 'success'
    ],
    [
        'title' => 'Warning',
        'content' => 'Please review your input.',
        'icon' => 'exclamation-triangle',
        'variant' => 'warning'
    ],
    [
        'title' => 'Error',
        'content' => 'An error occurred during processing.',
        'icon' => 'x-circle',
        'variant' => 'danger'
    ]
];
foreach ($iconToasts as $toast) {
    $toastWithIconsContent .= ThemedComponent::make('feedback/toast')
        ->content($toast['content'])
        ->title($toast['title'])
        ->subtitle('just now')
        ->variant($toast['variant'])
        ->autohide(false)
        ->icon(
            ThemedComponent::make('icons/icon')
                ->name($toast['icon'])
                ->preset_color($toast['variant'])
                ->size("24px")
                ->render()
        )
        ->render();
}
CODE);

$iconToasts = [
    [
        'title' => 'Success',
        'content' => 'Operation completed successfully.',
        'icon' => 'check-circle',
        'variant' => 'success'
    ],
    [
        'title' => 'Warning',
        'content' => 'Please review your input.',
        'icon' => 'exclamation-triangle',
        'variant' => 'warning'
    ],
    [
        'title' => 'Error',
        'content' => 'An error occurred during processing.',
        'icon' => 'x-circle',
        'variant' => 'danger'
    ]
];
foreach ($iconToasts as $toast) {
    $toastWithIconsContent .= ThemedComponent::make('feedback/toast')
        ->content($toast['content'])
        ->title($toast['title'])
        ->subtitle('just now')
        ->variant($toast['variant'])
        ->autohide(false)
        ->icon(
            ThemedComponent::make('icons/icon')
                ->name($toast['icon'])
                ->preset_color($toast['variant'])
                ->size("24px")
                ->render()
        )
        ->render();
}

$content .= ThemedComponent::make('layout/section')
    ->title('Toasts with Icons')
    ->subtitle('Toast notifications with icons.')
    ->content($toastWithIconsContent)
    ->render();

// ##################  Usage Example - Auto-hide Toasts ##################

$autohideToastsContent = wrapExampleCode(<<<'CODE'
$delays = [3000, 5000, 8000, 15000];
foreach ($delays as $delay) {
    $autohideToastsContent .= ThemedComponent::make('feedback/toast')
        ->content('This toast will hide after ' . ($delay/1000) . ' seconds.')
        ->title('Auto-hide Toast')
        ->subtitle('just now')
        ->variant('info')
        ->autohide(true)
        ->delay($delay)
        ->render();
}
CODE);

$delays = [3000, 5000, 8000, 15000];
foreach ($delays as $delay) {
    $autohideToastsContent .= ThemedComponent::make('feedback/toast')
        ->content('This toast will hide after ' . ($delay/1000) . ' seconds.')
        ->title('Auto-hide Toast')
        ->subtitle('just now')
        ->variant('info')
        ->autohide(true)
        ->delay($delay)
        ->render();
}

$content .= ThemedComponent::make('layout/section')
    ->title('Auto-hide Toasts')
    ->subtitle('Toasts that automatically hide after a delay.')
    ->content($autohideToastsContent)
    ->render();

// ##################  Usage Example - Rich Content Toasts ##################

$richContentToastsContent = wrapExampleCode(<<<'CODE'
// Toast with Action Buttons
$richContentToastsContent .= ThemedComponent::make('feedback/toast')
    ->content('
        <p>A new software update is available.</p>
        <div class="mt-2 pt-2 border-top">
            <button type="button" class="btn btn-primary btn-sm">Update now</button>
            <button type="button" class="btn btn-secondary btn-sm">Later</button>
        </div>
    ')
    ->title('Update Available')
    ->subtitle('just now')
    ->variant('primary')
    ->html(true)
    ->icon(
        ThemedComponent::make('icons/icon')
            ->name('info-circle')
            ->preset_color('primary')
            ->size("24px")
            ->render()
    )
    ->autohide(false)
    ->render();
        
// Toast with List
$richContentToastsContent .= ThemedComponent::make('feedback/toast')
    ->content('
        <ul class="list-unstyled mb-0">
            <li class="mb-1">
                <strong>John Doe</strong>
                <br>
                <small class="text-muted">Hey, are you available for a meeting?</small>
            </li>
            <li>
                <strong>Jane Smith</strong>
                <br>
                <small class="text-muted">The project files have been updated.</small>
            </li>
        </ul>
    ')
    ->title('New Messages')
    ->subtitle('just now')
    ->variant('info')
    ->html(true)
    ->icon(
        ThemedComponent::make('icons/icon')
            ->name('envelope')
            ->preset_color('info')
            ->size("24px")
            ->render()
    )
    ->autohide(false)
    ->render();
CODE);

// Toast with Action Buttons
$richContentToastsContent .= ThemedComponent::make('feedback/toast')
    ->content('
        <p>A new software update is available.</p>
        <div class="mt-2 pt-2 border-top">
            <button type="button" class="btn btn-primary btn-sm">Update now</button>
            <button type="button" class="btn btn-secondary btn-sm">Later</button>
        </div>
    ')
    ->title('Update Available')
    ->subtitle('just now')
    ->variant('primary')
    ->html(true)
    ->icon(
        ThemedComponent::make('icons/icon')
            ->name('info-circle')
            ->preset_color('primary')
            ->size("24px")
            ->render()
    )
    ->autohide(false)
    ->render();
        
// Toast with List
$richContentToastsContent .= ThemedComponent::make('feedback/toast')
    ->content('
        <ul class="list-unstyled mb-0">
            <li class="mb-1">
                <strong>John Doe</strong>
                <br>
                <small class="text-muted">Hey, are you available for a meeting?</small>
            </li>
            <li>
                <strong>Jane Smith</strong>
                <br>
                <small class="text-muted">The project files have been updated.</small>
            </li>
        </ul>
    ')
    ->title('New Messages')
    ->subtitle('just now')
    ->variant('info')
    ->html(true)
    ->icon(
        ThemedComponent::make('icons/icon')
            ->name('envelope')
            ->preset_color('info')
            ->size("24px")
            ->render()
    )
    ->autohide(false)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Rich Content Toasts')
    ->subtitle('Toasts with rich HTML content.')
    ->content($richContentToastsContent)
    ->render();

// ##################  Show fill .twig template for this component ##################
$content .= showComponentTemplate($component);

// Render the complete page
echo $content;