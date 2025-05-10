<?php
require_once __DIR__ . '/vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;
use Skuilplek\Themed\Themed;

// Security: Validate the component path
function isValidComponentPath($path, $menuItems)
{
    // Only allow alphanumeric characters, hyphens, and forward slashes
    if (!preg_match('/^[a-zA-Z0-9\-\/]+$/', $path)) {
        return false;
    }

    // Prevent directory traversal
    if (strpos($path, '..') !== false) {
        return false;
    }

    // Check if the path has exactly one forward slash (for folder/file structure)
    $slashCount = substr_count($path, '/');
    if ($slashCount !== 1 && !empty($path)) {
        return false;
    }

    // Validate against known component folders
    if (!empty($path)) {
        $parts = explode('/', $path);
        $folder = $parts[0];

        // Check if the folder exists in our menu structure
        $validFolder = false;
        foreach ($menuItems as $menuItem) {
            if (strtolower($menuItem['text']) === strtolower($folder)) {
                $validFolder = true;
                break;
            }
        }

        if (!$validFolder) {
            return false;
        }
    }

    return true;
}

function fullExample($component, $excludeOptions = [])
{
    $parameters = ThemedComponent::make($component)->getParameters();
    $componentDoc = file_get_contents(Themed::getThemePath() . 'components/' . $component . '.twig');
    preg_match('/{#(.*?)#}/s', $componentDoc, $matches);
    $documentation = $matches[1] ?? '';
    $pattern = "/- (\w+): ([^-]+)/";
    preg_match_all($pattern, $documentation, $matches, PREG_SET_ORDER);

    $descriptions = [];
    foreach ($matches as $match) {
        $key = trim($match[1]);
        $value = trim($match[2]);
        //TODO add array support
        $descriptions[$key] = $value;
    }

    $output = '
    ThemedComponent::make("' . $component . '")' . "\n";

    foreach ($parameters as $key => $value) {
        if (in_array($key, $excludeOptions)) {
            continue;
        }
        if (is_array($value)) {
            continue;
        }
        $output .= "\t->{$key}('value') <i style='color:grey;'>//";
        $output .= (substr($value, 0, 8) == 'content.') ? (!empty($descriptions[$key]) ? $descriptions[$key] . " - component specific" : 'custom to component') : $value;
        $output .= "</i>\n";
    }

    $output .= "\t->render();\n";
    // $output = htmlspecialchars($output);
    return ThemedComponent::make('layout/section')
        ->title("All available options for the " . ucfirst(basename($component)) . ' component')
        ->subtitle("All available options for the " . ucfirst(basename($component)) . ' component')
        ->content('<pre class="bg-light p-3 rounded mb-4"><code class="language-php">' . ($output) . '</code></pre>')
        ->render();
}

function showComponentTemplate($component)
{
    $componentFilePath = Themed::getThemePath() . 'components/' . $component;
    $templateContent = '';

    $cssContent = '';
    if (file_exists($componentFilePath . '.css')) {
        $cssContent = "<b>Content of the " . basename($componentFilePath) . '.css file</b>' . "\n\n";
        $cssContent .= wrapExampleCode(file_get_contents($componentFilePath . '.css'));
    }
    $templateContent .= $cssContent;

    $javascriptContent = '';
    if (file_exists($componentFilePath . '.js')) {
        $javascriptContent = "<b>Content of the " . basename($componentFilePath) . '.js file</b>' . "\n\n";
        $javascriptContent .= wrapExampleCode(file_get_contents($componentFilePath . '.js'));
    }
    $templateContent .= $javascriptContent;

    $twigContent = '';
    if (file_exists($componentFilePath . '.twig')) {
        $twigContent = "<b>Content of the " . basename($componentFilePath) . '.twig file</b>' . "\n\n";
        $twigContent .= wrapExampleCode(file_get_contents($componentFilePath . '.twig'));
    } else {
        $twigContent = 'Template file not found: ' . basename($componentFilePath) . '.twig';
    }
    $templateContent .= $twigContent;

    return ThemedComponent::make('layout/section')
        ->title(ucfirst(basename($component)) . ' component template')
        ->subtitle("The Twig template file for the " . ucfirst(basename($component)) . ' component')
        ->content($templateContent)
        ->render();
}


// Function to show the default homepage content
function showDefaultContent($errorMessage = '')
{
    $content = '';

    // If there's an error message, show it before the content
    if (!empty($errorMessage)) {
        $content .= ThemedComponent::make('feedback/toast')
            ->title('Error')
            ->content($errorMessage)
            ->subtitle('just now')
            ->icon(ThemedComponent::make('icons/icon')
                ->name('x-circle')
                ->render())
            ->variant('danger')
            ->position('top-right')
            ->show(true)
            ->autohide(true)
            ->delay(5000)
            ->render();
    }
    $sourceFolder = __DIR__ . '/vendor/skuilplek/themed/';
    $mdFile = "README.md";
    if(isset($_GET['read'])) {
        $tmpFilename = $_GET['read'];

        // Strip out all characters that are not allowed in filenames
        $tmpFilename = preg_replace('/[^a-zA-Z0-9\/._-]/', '', $tmpFilename);

        // Prevent directory traversal
        $tmpFilename = str_replace('../', '', $tmpFilename); 

        if(file_exists($sourceFolder . $tmpFilename)) {
            $mdFile = $tmpFilename;
        }
    }

    // Show README.md content
    $readmeContent = file_get_contents($sourceFolder . $mdFile);
    $parsedown = new \Parsedown();
    $htmlContent = $parsedown->text($readmeContent);

    $content .= ThemedComponent::make('layout/section')
        ->title('Themed Component Library')
        ->content($htmlContent)
        ->render();

    return $content;
}

function wrapExampleCode($text)
{
    return '<pre class="bg-light p-3 rounded mb-4"><code style="overflow-wrap:normal;">' . htmlspecialchars($text) . '</code></pre>';
}

// Get documentation from component/name
function componentDocumentation($component)
{
    // Get the component documentation
    $componentDoc = file_get_contents(Themed::getThemePath() . 'components/' . $component . '.twig');
    preg_match('/{#(.*?)#}/s', $componentDoc, $matches);
    $documentation = $matches[1] ?? '';
    $title = ucwords(str_replace('/', ' ', $component));
    // Add documentation section
    $content = ThemedComponent::make('layout/section')
        ->title($title . ' Component Documentation')
        ->content(wrapExampleCode($documentation))
        ->render();
    return $content;
}

function randomColor()
{
    //Generate a random hex color code
    return '#' . substr(str_shuffle('0123456789ABCDEF'), 0, 6);
}