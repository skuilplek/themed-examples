<?php

require_once 'functions.php';

use Skuilplek\Themed\ThemedComponent;
use Skuilplek\Themed\Themed;

// Initialize content
$content = '';

// Auto-generate navbar menu structure from template/bs5/components
$basePath = Themed::getThemePath() . 'components';

$folders = array_filter(glob($basePath . '/*'), 'is_dir');
$menu = [];

foreach ($folders as $folder) {
    $folderName = basename($folder);
    $twigFiles = glob($folder . '/*.twig');

    if (!empty($twigFiles)) {
        // Create dropdown items for each .twig file
        $dropdownItems = [];
        foreach ($twigFiles as $file) {
            $exists = '';
            $exampleFile = __DIR__ . '/' . basename($folder) . '/' . basename($file, '.twig') . '.php';
            if (!file_exists($exampleFile)) {
                $exists = ' [TODO]';
            }
            $fileName = str_replace('-', ' ', basename($file, '.twig'));
            $dropdownItems[] = [
                'text' => ucwords($fileName) . $exists,
                'url' => 'index.php?example=' . $folderName . '/' . strtolower(str_replace(' ', '-', $fileName)),
            ];
        }

        // Add the folder as a dropdown menu item
        $menu[] = [
            'text' => ucfirst($folderName),
            'dropdown' => $dropdownItems
        ];
    }
}

$menu[] = [
    'icon' => ThemedComponent::make('icons/icon')->name('github')->render(),
    'url' => 'https://github.com/skuilplek/themed',
    'target' => '_blank',
    'title' => "View the project on Github",
    "style" => "float:right;"
];

// Get and validate the requested component from the URL
$requestedComponent = $_GET['example'] ?? '';

// Sanitize and validate the component path
// Initialize error message
$errorMessage = '';

if (!empty($requestedComponent) && !isValidComponentPath($requestedComponent, $menu)) {
    $errorMessage = 'Invalid component path format.';
    $requestedComponent = '';  // Reset to home page if invalid
}

if (empty($requestedComponent)) {
    $content = showDefaultContent($errorMessage);
} else {
    // Try to include the component's example file
    $exampleFile = realpath(__DIR__ . '/' . $requestedComponent . '.php');

    // Additional security check: Ensure the file is within the examples directory
    $examplesDir = realpath(__DIR__);
    if ($exampleFile === false || strpos($exampleFile, $examplesDir) !== 0) {
        $errorMessage = 'Invalid component path. The requested path is not allowed.';
        $content = showDefaultContent($errorMessage);
    } else {
        if (file_exists($exampleFile)) {
            ob_start();
            include $exampleFile;
            $componentContent = ob_get_clean();
            $content = $componentContent; // Replace the entire content with the component's content
        } else {
            // Component doesn't exist, show error with default content
            $errorMessage = 'The component "' . htmlspecialchars($requestedComponent) . '" does not exist.';
            $content = showDefaultContent($errorMessage);
        }
    }
}

$navBar = ThemedComponent::make('navigation/navbar')
    ->brand([
            'text' => 'Themed',
            'url' => 'index.php',
        ])
        ->style('dark')
        ->position('fixed-top')
        ->bg('dark')
        ->container(true)
        ->expand('md')
        ->collapse([
            'id' => 'navbarCollapse'
        ])
        ->items($menu)
        ->class('mb-2 mb-md-0')
        ->render();

// Output the complete HTML
echo ThemedComponent::make('layout/page')
    ->content("<br/><br/>".$content)
    ->title('Bootstrap 5 Component Examples')
    ->description('Examples and documentation of Bootstrap 5 components and their usage.')
    ->container_class('py-5')
    ->navbar($navBar)
    ->header_scripts(Themed::headerScripts())
    ->footer_scripts(Themed::footerScripts())
    ->render();