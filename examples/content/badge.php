<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = 'content/badge';

// Show component documentation and full example
$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Badges ##################
$basicBadgesCode = <<<'CODE'
// Basic badge with default style
echo ThemedComponent::make('content/badge')
    ->text('Default')
    ->render();

// Badges with different colors
echo ThemedComponent::make('content/badge')
    ->text('Primary')
    ->type('primary')
    ->render();

echo ThemedComponent::make('content/badge')
    ->text('Success')
    ->type('success')
    ->render();
CODE;

$basicBadgesContent = wrapExampleCode($basicBadgesCode);

$basicBadgesContent .= ThemedComponent::make('content/badge')
    ->text('Default')
    ->render();

$basicBadgesContent .= ' ';

$basicBadgesContent .= ThemedComponent::make('content/badge')
    ->text('Primary')
    ->type('primary')
    ->render();

$basicBadgesContent .= ' ';

$basicBadgesContent .= ThemedComponent::make('content/badge')
    ->text('Success')
    ->type('success')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Badges')
    ->subtitle('Simple badges with different background colors')
    ->content($basicBadgesContent)
    ->render();

// ################## Pill Badges ##################
$pillBadgesCode = <<<'CODE'
// Pill-shaped badges
echo ThemedComponent::make('content/badge')
    ->text('Info')
    ->type('info')
    ->pill(true)
    ->render();

echo ThemedComponent::make('content/badge')
    ->text('Warning')
    ->type('warning')
    ->pill(true)
    ->render();
CODE;

$pillBadgesContent = wrapExampleCode($pillBadgesCode);

$pillBadgesContent .= ThemedComponent::make('content/badge')
    ->text('Info')
    ->type('info')
    ->pill(true)
    ->render();

$pillBadgesContent .= ' ';

$pillBadgesContent .= ThemedComponent::make('content/badge')
    ->text('Warning')
    ->type('warning')
    ->pill(true)
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Pill Badges')
    ->subtitle('Badges with rounded corners using the pill option')
    ->content($pillBadgesContent)
    ->render();

// ################## Positioned Badges ##################
$positionedBadgesCode = <<<'CODE'
// Button with positioned notification badge
echo ThemedComponent::make('layout/wrapper')
    ->tag('button')
    ->class('btn btn-primary position-relative')
    ->content(
        'Inbox ' .
        ThemedComponent::make('content/badge')
            ->text('99+')
            ->type('danger')
            ->positioned(true)
            ->position(['top' => '0', 'start' => '100'])
            ->visually_hidden('unread messages')
            ->render()
    )
    ->render();

// Profile button with dot indicator
echo ThemedComponent::make('layout/wrapper')
    ->tag('button')
    ->class('btn btn-primary position-relative')
    ->content(
        'Profile ' .
        ThemedComponent::make('content/badge')
            ->text('')
            ->class('p-2 border border-light rounded-circle')
            ->type('danger')
            ->positioned(true)
            ->position(['top' => '0', 'start' => '100'])
            ->visually_hidden('New alerts')
            ->render()
    )
    ->render();
CODE;

$positionedBadgesContent = wrapExampleCode($positionedBadgesCode);

$positionedBadgesContent .= ThemedComponent::make('layout/wrapper')
    ->tag('button')
    ->class('btn btn-primary position-relative')
    ->content(
        'Inbox ' .
        ThemedComponent::make('content/badge')
            ->text('99+')
            ->type('danger')
            ->positioned(true)
            ->position(['top' => '0', 'start' => '100'])
            ->visually_hidden('unread messages')
            ->render()
    )
    ->render();

$positionedBadgesContent .= ' ';

$positionedBadgesContent .= ThemedComponent::make('layout/wrapper')
    ->tag('button')
    ->class('btn btn-primary position-relative')
    ->content(
        'Profile ' .
        ThemedComponent::make('content/badge')
            ->text('')
            ->class('p-2 border border-light rounded-circle')
            ->type('danger')
            ->positioned(true)
            ->position(['top' => '0', 'start' => '100'])
            ->visually_hidden('New alerts')
            ->render()
    )
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Positioned Badges')
    ->subtitle('Badges positioned relative to their container, perfect for notifications')
    ->content($positionedBadgesContent)
    ->render();

// ################## Badges in Headings ##################
$headingBadgesCode = <<<'CODE'
// Badges in different heading sizes
echo ThemedComponent::make('layout/wrapper')
    ->tag('h1')
    ->content(
        'Heading 1 ' .
        ThemedComponent::make('content/badge')
            ->text('New')
            ->render()
    )
    ->render();

echo ThemedComponent::make('layout/wrapper')
    ->tag('h3')
    ->content(
        'Heading 3 ' .
        ThemedComponent::make('content/badge')
            ->text('Latest')
            ->type('info')
            ->render()
    )
    ->render();
CODE;

$headingBadgesContent = wrapExampleCode($headingBadgesCode);

$headingBadgesContent .= ThemedComponent::make('layout/wrapper')
    ->tag('h1')
    ->content(
        'Heading 1 ' .
        ThemedComponent::make('content/badge')
            ->text('New')
            ->render()
    )
    ->render();

$headingBadgesContent .= ThemedComponent::make('layout/wrapper')
    ->tag('h3')
    ->content(
        'Heading 3 ' .
        ThemedComponent::make('content/badge')
            ->text('Latest')
            ->type('info')
            ->render()
    )
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Badges in Headings')
    ->subtitle('Badges scale automatically when used within headings')
    ->content($headingBadgesContent)
    ->render();

// Show the template file
$content .= showComponentTemplate($component);

// Display all content
echo $content;
