<?php
/**
 * Examples showcasing Bootstrap 5's alert component.
 */
require_once __DIR__ . '/../vendor/autoload.php';


use Skuilplek\Themed\ThemedComponent;
$component = "feedback/alert";

$content = '';
$content .= componentDocumentation($component);
$content .= fullExample($component);

// ##################  Usage Example - Basic Alerts ##################

$basicAlertsContent = wrapExampleCode(<<<'CODE'
// Initialize variables
$variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

// Basic Alerts Section
$basicAlertsContent = function() use ($variants) {
    $alertContent = '';
    foreach ($variants as $x => $variant) {
        $alertContent .= ThemedComponent::make('feedback/alert')
            ->type($variant)
            ->message(ucfirst($variant) . ' alert with an example message.')
            ->class('mb-3')
            ->dismissible($x % 2 == 0)
            ->render();
    }
    return $alertContent;
};
CODE);

// Initialize variables
$variants = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

// Basic Alerts Section
foreach ($variants as $x => $variant) {
    $basicAlertsContent .= ThemedComponent::make('feedback/alert')
        ->type($variant)
        ->message(ucfirst($variant) . ' alert with an example message.')
        ->class('mb-3')
        ->dismissible($x % 2 == 0)
        ->render();
}

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Alerts')
    ->subtitle('Simple alert examples with different styles.')
    ->content($basicAlertsContent)
    ->render();

// ##################  Usage Example - Alerts with Icons ##################

$alertsWithIconsContent = wrapExampleCode(<<<'CODE'
$iconAlerts = [
    ['type' => 'success', 'icon' => 'bi bi-check-circle-fill', 'message' => 'Operation completed successfully!'],
    ['type' => 'danger', 'icon' => 'bi bi-exclamation-triangle-fill', 'message' => 'Error occurred during processing.'],
    ['type' => 'info', 'icon' => 'bi bi-info-circle-fill', 'message' => 'Please review the updated information.']
];

// Alerts with Icons Section
$alertContent = '';
foreach ($iconAlerts as $x => $alert) {
    $alertsWithIconsContent .= ThemedComponent::make('feedback/alert')
        ->type($alert['type'])
        ->icon(
            ThemedComponent::make('icons/icon')
                ->name($alert['icon'])
                ->preset_color($alert['type'])
                ->size("24px")
                ->render()
        )
        ->dismissible($x % 2 == 0)
        ->message($alert['message'])
        ->class('mb-3')
        ->render();
}
CODE);

$iconAlerts = [
    ['type' => 'success', 'icon' => 'check-circle-fill', 'message' => 'Operation completed successfully!'],
    ['type' => 'danger', 'icon' => 'exclamation-triangle-fill', 'message' => 'Error occurred during processing.'],
    ['type' => 'info', 'icon' => 'info-circle-fill', 'message' => 'Please review the updated information.']
];

// Alerts with Icons Section
$alertContent = '';
foreach ($iconAlerts as $x => $alert) {
    $alertsWithIconsContent .= ThemedComponent::make('feedback/alert')
        ->type($alert['type'])
        ->icon(
            ThemedComponent::make('icons/icon')
                ->name($alert['icon'])
                ->preset_color($alert['type'])
                ->size("24px")
                ->render()
        )
        ->dismissible($x % 2 == 0)
        ->message($alert['message'])
        ->class('mb-3')
        ->render();
}

$content .= ThemedComponent::make('layout/section')
    ->title('Alerts with Icons')
    ->subtitle('Alert messages with Bootstrap Icons.')
    ->content($alertsWithIconsContent)
    ->render();

// ##################  Usage Example - Rich Content Alerts ##################

$richAlertsContent = wrapExampleCode(<<<'CODE'
// Alert with heading
$richAlertsContent .= ThemedComponent::make('feedback/alert')
    ->type('success')
    
    ->icon(
        ThemedComponent::make('icons/icon')
            ->name('check-circle-fill')
            ->preset_color('success')
            ->size('24px')
            ->render()
    )
    ->heading('Well done!')
    ->dismissible(false)
    ->message('You successfully read this important alert message.')
    ->additional('<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>')
    ->class('mb-3')
    ->render();

// Alert with list
$richAlertsContent .= ThemedComponent::make('feedback/alert')
    ->type('info')
    ->icon(
        ThemedComponent::make('icons/icon')
            ->name('info-circle-fill')
            ->preset_color('info')
            ->size('24px')
            ->render()
    )
    ->heading('Update Available')
    ->message('A new software update is available with the following changes:')
    ->additional('<ul class="mb-0"><li>Enhanced security features</li><li>Performance improvements</li><li>Bug fixes and stability updates</li></ul>')
    ->dismissible(true)
    ->class('mb-3')
    ->render();
CODE);

// Alert with heading
$richAlertsContent .= ThemedComponent::make('feedback/alert')
    ->type('success')
    ->icon(
        ThemedComponent::make('icons/icon')
            ->name('check-circle-fill')
            ->preset_color('success')
            ->size('24px')
            ->render()
    )
    ->heading('Well done!')
    ->dismissible(false)
    ->message('You successfully read this important alert message.')
    ->additional('<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>')
    ->class('mb-3')
    ->render();

// Alert with list
$richAlertsContent .= ThemedComponent::make('feedback/alert')
    ->type('info')
    ->icon(
        ThemedComponent::make('icons/icon')
            ->name('info-circle-fill')
            ->preset_color('info')
            ->size('24px')
            ->render()
    )
    ->heading('Update Available')
    ->message('A new software update is available with the following changes:')
    ->additional('<ul class="mb-0"><li>Enhanced security features</li><li>Performance improvements</li><li>Bug fixes and stability updates</li></ul>')
    ->dismissible(true)
    ->class('mb-3')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Rich Content Alerts')
    ->subtitle('Alert messages with rich content.')
    ->content($richAlertsContent)
    ->render();

// ##################  Show fill .twig template for this component ##################
$content .= showComponentTemplate($component);

// Render the page with all components
echo $content;
