<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Skuilplek\Themed\ThemedComponent;

$component = "overlays/offcanvas";

$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Offcanvas ##################
$basicOffcanvasCode = wrapExampleCode(<<<'CODE'
// Basic offcanvas with button and link triggers
echo ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasExample')
    ->title('Offcanvas')
    ->content('
        <div>
          Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        </div>
        <div class="dropdown mt-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Dropdown button
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
    ')
    ->triggers([
        [
            'text' => 'Link with href',
            'type' => 'link',
            'class' => 'me-2'
        ],
        [
            'text' => 'Button with data-bs-target',
            'type' => 'button'
        ]
    ])
    ->render();
CODE);

$basicOffcanvasContent = ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasExample')
    ->title('Offcanvas')
    ->content('
        <div>
          Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
        </div>
        <div class="dropdown mt-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Dropdown button
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
    ')
    ->triggers([
        [
            'text' => 'Link with href',
            'type' => 'link',
            'class' => 'me-2'
        ],
        [
            'text' => 'Button with data-bs-target',
            'type' => 'button'
        ]
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Offcanvas')
    ->subtitle('Basic offcanvas with button and link triggers')
    ->content($basicOffcanvasCode . $basicOffcanvasContent)
    ->render();

// ################## Offcanvas Placement ##################
$placementOffcanvasCode = wrapExampleCode(<<<'CODE'
// Top placement
echo ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasTop')
    ->title('Top Offcanvas')
    ->content('This is a top-placed offcanvas.')
    ->placement('top')
    ->triggers([
        ['text' => 'Toggle top offcanvas']
    ])
    ->class('mb-3')
    ->render();

// End placement
echo ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasEnd')
    ->title('End Offcanvas')
    ->content('This is a right-placed offcanvas.')
    ->placement('end')
    ->triggers([
        ['text' => 'Toggle right offcanvas']
    ])
    ->class('mb-3')
    ->render();

// Bottom placement
echo ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasBottom')
    ->title('Bottom Offcanvas')
    ->content('This is a bottom-placed offcanvas.')
    ->placement('bottom')
    ->triggers([
        ['text' => 'Toggle bottom offcanvas']
    ])
    ->render();
CODE);

$placementOffcanvasContent = ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasTop')
    ->title('Top Offcanvas')
    ->content('This is a top-placed offcanvas.')
    ->placement('top')
    ->triggers([
        ['text' => 'Toggle top offcanvas']
    ])
    ->class('mb-3')
    ->render();

$placementOffcanvasContent .= ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasEnd')
    ->title('End Offcanvas')
    ->content('This is a right-placed offcanvas.')
    ->placement('end')
    ->triggers([
        ['text' => 'Toggle right offcanvas']
    ])
    ->class('mb-3')
    ->render();

$placementOffcanvasContent .= ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasBottom')
    ->title('Bottom Offcanvas')
    ->content('This is a bottom-placed offcanvas.')
    ->placement('bottom')
    ->triggers([
        ['text' => 'Toggle bottom offcanvas']
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Offcanvas Placement')
    ->subtitle('Different placement options for the offcanvas')
    ->content($placementOffcanvasCode . $placementOffcanvasContent)
    ->render();

// ################## Offcanvas Options ##################
$optionsOffcanvasCode = wrapExampleCode(<<<'CODE'
// Enable body scrolling
echo ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasScroll')
    ->title('Enable Body Scrolling')
    ->content('Try scrolling the rest of the page while this offcanvas is open.')
    ->scroll(true)
    ->triggers([
        ['text' => 'Enable body scrolling']
    ])
    ->class('mb-3')
    ->render();

// Enable backdrop static
echo ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasStatic')
    ->title('Static Backdrop')
    ->content('Click the button below to toggle the static offcanvas. It will not close when clicking outside.')
    ->static(true)
    ->triggers([
        ['text' => 'Toggle static offcanvas']
    ])
    ->class('mb-3')
    ->render();

// Disable backdrop
echo ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasNoBackdrop')
    ->title('No Backdrop')
    ->content('Click the button below to toggle the offcanvas without backdrop.')
    ->backdrop(false)
    ->triggers([
        ['text' => 'Toggle offcanvas without backdrop']
    ])
    ->render();
CODE);

$optionsOffcanvasContent = ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasScroll')
    ->title('Enable Body Scrolling')
    ->content('Try scrolling the rest of the page while this offcanvas is open.')
    ->scroll(true)
    ->triggers([
        ['text' => 'Enable body scrolling']
    ])
    ->class('mb-3')
    ->render();

$optionsOffcanvasContent .= ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasStatic')
    ->title('Static Backdrop')
    ->content('Click the button below to toggle the static offcanvas. It will not close when clicking outside.')
    ->static(true)
    ->triggers([
        ['text' => 'Toggle static offcanvas']
    ])
    ->class('mb-3')
    ->render();

$optionsOffcanvasContent .= ThemedComponent::make('overlays/offcanvas')
    ->id('offcanvasNoBackdrop')
    ->title('No Backdrop')
    ->content('Click the button below to toggle the offcanvas without backdrop.')
    ->backdrop(false)
    ->triggers([
        ['text' => 'Toggle offcanvas without backdrop']
    ])
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Offcanvas Options')
    ->subtitle('Various options for customizing offcanvas behavior')
    ->content($optionsOffcanvasCode . $optionsOffcanvasContent)
    ->render();

// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
