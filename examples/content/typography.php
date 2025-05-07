<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "content/typography";

// ################## Component Documentation ##################
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Usage Example ##################
$basicTypography = wrapExampleCode(<<<'CODE'
// Basic headings
echo ThemedComponent::make('content/typography')
    ->tag('h1')
    ->content('Heading 1')
    ->render();

echo ThemedComponent::make('content/typography')
    ->tag('p')
    ->content('This is a regular paragraph with normal text.')
    ->render();

echo ThemedComponent::make('content/typography')
    ->tag('p')
    ->lead(true)
    ->content('This is a lead paragraph that stands out at the beginning of a section.')
    ->render();
CODE);

$basicTypography .= ThemedComponent::make($component)
    ->tag('h1')
    ->content('Heading 1')
    ->render();

$basicTypography .= ThemedComponent::make($component)
    ->tag('p')
    ->content('This is a regular paragraph with normal text.')
    ->render();

$basicTypography .= ThemedComponent::make($component)
    ->tag('p')
    ->lead(true)
    ->content('This is a lead paragraph that stands out at the beginning of a section.')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Typography')
    ->subtitle('Simple text elements including headings and paragraphs')
    ->content($basicTypography)
    ->render();

// ################## Advanced Features ##################
$advancedTypography = wrapExampleCode(<<<'CODE'
// Display headings
echo ThemedComponent::make('content/typography')
    ->tag('h1')
    ->display('1')
    ->content('Display 1 Heading')
    ->render();

// Text styles and alignment
echo ThemedComponent::make('content/typography')
    ->tag('p')
    ->align('center')
    ->transform('uppercase')
    ->font('bold')
    ->content('Centered, uppercase, and bold text')
    ->render();

// Muted text with decoration
echo ThemedComponent::make('content/typography')
    ->tag('p')
    ->muted(true)
    ->decoration('underline')
    ->content('Muted and underlined text')
    ->render();
CODE);

$advancedTypography .= ThemedComponent::make($component)
    ->tag('h1')
    ->display('1')
    ->content('Display 1 Heading')
    ->render();

$advancedTypography .= ThemedComponent::make($component)
    ->tag('p')
    ->align('center')
    ->transform('uppercase')
    ->font('bold')
    ->content('Centered, uppercase, and bold text')
    ->render();

$advancedTypography .= ThemedComponent::make($component)
    ->tag('p')
    ->muted(true)
    ->decoration('underline')
    ->content('Muted and underlined text')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Advanced Typography Features')
    ->subtitle('Display headings, text styles, and decorations')
    ->content($advancedTypography)
    ->render();

// ################## Typography Variations ##################
$typographyVariations = wrapExampleCode(<<<'CODE'
// Responsive text
echo ThemedComponent::make('content/typography')
    ->tag('p')
    ->responsive(true)
    ->content('This text changes size across different breakpoints')
    ->render();

// Monospace with wrapping
echo ThemedComponent::make('content/typography')
    ->tag('p')
    ->monospace(true)
    ->wrap('nowrap')
    ->content('This is monospace text that does not wrap to new lines')
    ->render();

// Font styles with truncation
echo ThemedComponent::make('content/typography')
    ->tag('div')
    ->font_style('italic')
    ->truncate(true)
    ->content('This is a very long text that will be truncated with an ellipsis at the end because it exceeds the container width.')
    ->render();
CODE);

$typographyVariations .= ThemedComponent::make($component)
    ->tag('p')
    ->responsive(true)
    ->content('This text changes size across different breakpoints')
    ->render();

$typographyVariations .= ThemedComponent::make($component)
    ->tag('p')
    ->monospace(true)
    ->wrap('nowrap')
    ->content('This is monospace text that does not wrap to new lines')
    ->render();

$typographyVariations .= ThemedComponent::make($component)
    ->tag('div')
    ->font_style('italic')
    ->truncate(true)
    ->content('This is a very long text that will be truncated with an ellipsis at the end because it exceeds the container width.')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Typography Variations')
    ->subtitle('Responsive text, monospace, and text truncation')
    ->content($typographyVariations)
    ->render();

// ################## Template File ##################
$content .= showComponentTemplate($component);

// Display the content
echo $content;
