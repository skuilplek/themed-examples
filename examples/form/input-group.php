<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Skuilplek\Themed\ThemedComponent;

$component = "form/input-group";

$content = componentDocumentation($component);
$content .= fullExample($component);

// ################## Basic Input Groups ##################
$basicInputGroupCode = wrapExampleCode(<<<'CODE'
// Username with @ prepend
echo ThemedComponent::make('form/input-group')
    ->name('username1')
    ->prepend('@')
    ->placeholder('Username')
    ->class('mb-3')
    ->render();

// Email with domain append
echo ThemedComponent::make('form/input-group')
    ->name('username2')
    ->append('@example.com')
    ->placeholder("Recipient's username")
    ->class('mb-3')
    ->render();

// URL input with form group
echo ThemedComponent::make('form/form-group')
    ->label('Your vanity URL')
    ->for('basic-url')
    ->control(
        ThemedComponent::make('form/input-group')
            ->name('basic-url')
            ->id('basic-url')
            ->prepend('https://example.com/users/')
            ->render()
    )
    ->help('Example help text goes outside the input group.')
    ->render();
CODE);

$basicInputGroupContent = ThemedComponent::make('form/input-group')
    ->name('username1')
    ->prepend('@')
    ->placeholder('Username')
    ->class('mb-3')
    ->render();

$basicInputGroupContent .= ThemedComponent::make('form/input-group')
    ->name('username2')
    ->append('@example.com')
    ->placeholder("Recipient's username")
    ->class('mb-3')
    ->render();

$basicInputGroupContent .= ThemedComponent::make('form/form-group')
    ->label('Your vanity URL')
    ->for('basic-url')
    ->control(
        ThemedComponent::make('form/input-group')
            ->name('basic-url')
            ->id('basic-url')
            ->prepend('https://example.com/users/')
            ->render()
    )
    ->help('Example help text goes outside the input group.')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Basic Input Groups')
    ->subtitle('Input groups with text addons and help text')
    ->content($basicInputGroupCode . $basicInputGroupContent)
    ->render();

// ################## Multiple Addons ##################
$multipleAddonsCode = wrapExampleCode(<<<'CODE'
// Currency input with $ and .00
echo ThemedComponent::make('form/input-group')
    ->name('amount')
    ->prepend('$')
    ->append('.00')
    ->placeholder('Amount')
    ->class('mb-3')
    ->render();

// Multiple inputs with @ separator
echo ThemedComponent::make('form/input-group')
    ->name('username3')
    ->control(
        ThemedComponent::make('form/input')
            ->name('username3')
            ->placeholder('Username')
            ->render()
    )
    ->middle('@')
    ->secondControl(
        ThemedComponent::make('form/input')
            ->name('server')
            ->placeholder('Server')
            ->render()
    )
    ->class('mb-3')
    ->render();
CODE);

$multipleAddonsContent = ThemedComponent::make('form/input-group')
    ->name('amount')
    ->prepend('$')
    ->append('.00')
    ->placeholder('Amount')
    ->class('mb-3')
    ->render();

$multipleAddonsContent .= ThemedComponent::make('form/input-group')
    ->name('username3')
    ->control(
        ThemedComponent::make('form/input')
            ->name('username3')
            ->placeholder('Username')
            ->render()
    )
    ->middle('@')
    ->secondControl(
        ThemedComponent::make('form/input')
            ->name('server')
            ->placeholder('Server')
            ->render()
    )
    ->class('mb-3')
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Multiple Addons')
    ->subtitle('Input groups with multiple addons and inputs')
    ->content($multipleAddonsCode . $multipleAddonsContent)
    ->render();

// ################## Different Controls ##################
$differentControlsCode = wrapExampleCode(<<<'CODE'
// Input group with textarea
echo ThemedComponent::make('form/input-group')
    ->name('textarea')
    ->prepend('With textarea')
    ->control(
        ThemedComponent::make('form/textarea')
            ->name('textarea')
            ->rows(3)
            ->render()
    )
    ->render();
CODE);

$differentControlsContent = ThemedComponent::make('form/input-group')
    ->name('textarea')
    ->prepend('With textarea')
    ->control(
        ThemedComponent::make('form/textarea')
            ->name('textarea')
            ->rows(3)
            ->render()
    )
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Different Controls')
    ->subtitle('Input groups with different form controls')
    ->content($differentControlsCode . $differentControlsContent)
    ->render();

// ################## Multiple Inputs with Shared Label ##################
$sharedLabelCode = wrapExampleCode(<<<'CODE'
// Two inputs with shared label
echo ThemedComponent::make('form/input-group')
    ->name('name')
    ->prepend('First and last name')
    ->control(
        ThemedComponent::make('form/input')
            ->name('first_name')
            ->placeholder('First name')
            ->render()
    )
    ->secondControl(
        ThemedComponent::make('form/input')
            ->name('last_name')
            ->placeholder('Last name')
            ->render()
    )
    ->render();
CODE);

$sharedLabelContent = ThemedComponent::make('form/input-group')
    ->name('name')
    ->prepend('First and last name')
    ->control(
        ThemedComponent::make('form/input')
            ->name('first_name')
            ->placeholder('First name')
            ->render()
    )
    ->secondControl(
        ThemedComponent::make('form/input')
            ->name('last_name')
            ->placeholder('Last name')
            ->render()
    )
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Multiple Inputs with Shared Label')
    ->subtitle('Input group with two inputs sharing a single label')
    ->content($sharedLabelCode . $sharedLabelContent)
    ->render();

// ################## Dropdown Buttons ##################
$dropdownCode = wrapExampleCode(<<<'CODE'
// Prepend dropdown
echo ThemedComponent::make('form/input-group')
    ->name('dropdown1')
    ->prepend(
        ThemedComponent::make('buttons/dropdown')
            ->text('Dropdown')
            ->type('outline-secondary')
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->placeholder('Text input with dropdown button')
    ->class('mb-3')
    ->render();

// Append dropdown
echo ThemedComponent::make('form/input-group')
    ->name('dropdown2')
    ->append(
        ThemedComponent::make('buttons/dropdown')
            ->text('Dropdown')
            ->type('outline-secondary')
            ->menuEnd(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->placeholder('Text input with dropdown button')
    ->class('mb-3')
    ->render();

// Multiple dropdowns
echo ThemedComponent::make('form/input-group')
    ->name('dropdown3')
    ->prepend(
        ThemedComponent::make('buttons/dropdown')
            ->text('Dropdown')
            ->type('outline-secondary')
            ->items([
                ['text' => 'Action before', 'href' => '#'],
                ['text' => 'Another action before', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->append(
        ThemedComponent::make('buttons/dropdown')
            ->text('Dropdown')
            ->type('outline-secondary')
            ->menuEnd(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->placeholder('Text input with 2 dropdown buttons')
    ->class('mb-3')
    ->render();

// Segmented dropdown buttons
echo ThemedComponent::make('form/input-group')
    ->name('dropdown4')
    ->prepend(
        ThemedComponent::make('buttons/dropdown')
            ->text('Action')
            ->type('outline-secondary')
            ->segmented(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->placeholder('Text input with segmented dropdown button')
    ->class('mb-3')
    ->render();

// Segmented dropdown buttons at both ends
echo ThemedComponent::make('form/input-group')
    ->name('dropdown5')
    ->control(
        ThemedComponent::make('form/input')
            ->name('dropdown5')
            ->placeholder('Text input with segmented dropdown buttons')
            ->render()
    )
    ->prepend(
        ThemedComponent::make('buttons/dropdown')
            ->text('Action')
            ->type('outline-secondary')
            ->segmented(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->append(
        ThemedComponent::make('buttons/dropdown')
            ->text('Action')
            ->type('outline-secondary')
            ->segmented(true)
            ->menuEnd(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->render();
CODE);

$dropdownContent = ThemedComponent::make('form/input-group')
    ->name('dropdown1')
    ->prepend(
        ThemedComponent::make('buttons/dropdown')
            ->text('Dropdown')
            ->type('outline-secondary')
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->placeholder('Text input with dropdown button')
    ->class('mb-3')
    ->render();

$dropdownContent .= ThemedComponent::make('form/input-group')
    ->name('dropdown2')
    ->append(
        ThemedComponent::make('buttons/dropdown')
            ->text('Dropdown')
            ->type('outline-secondary')
            ->menuEnd(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->placeholder('Text input with dropdown button')
    ->class('mb-3')
    ->render();

$dropdownContent .= ThemedComponent::make('form/input-group')
    ->name('dropdown3')
    ->prepend(
        ThemedComponent::make('buttons/dropdown')
            ->text('Dropdown')
            ->type('outline-secondary')
            ->items([
                ['text' => 'Action before', 'href' => '#'],
                ['text' => 'Another action before', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->append(
        ThemedComponent::make('buttons/dropdown')
            ->text('Dropdown')
            ->type('outline-secondary')
            ->menuEnd(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->placeholder('Text input with 2 dropdown buttons')
    ->class('mb-3')
    ->render();

// Add segmented dropdown button examples
$dropdownContent .= ThemedComponent::make('form/input-group')
    ->name('dropdown4')
    ->prepend(
        ThemedComponent::make('buttons/dropdown')
            ->text('Action')
            ->type('outline-secondary')
            ->segmented(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->placeholder('Text input with segmented dropdown button')
    ->class('mb-3')
    ->render();

$dropdownContent .= ThemedComponent::make('form/input-group')
    ->name('dropdown5')
    ->control(
        ThemedComponent::make('form/input')
            ->name('dropdown5')
            ->placeholder('Text input with segmented dropdown buttons')
            ->render()
    )
    ->prepend(
        ThemedComponent::make('buttons/dropdown')
            ->text('Action')
            ->type('outline-secondary')
            ->segmented(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->append(
        ThemedComponent::make('buttons/dropdown')
            ->text('Action')
            ->type('outline-secondary')
            ->segmented(true)
            ->menuEnd(true)
            ->items([
                ['text' => 'Action', 'href' => '#'],
                ['text' => 'Another action', 'href' => '#'],
                ['text' => 'Something else here', 'href' => '#'],
                ['divider' => true],
                ['text' => 'Separated link', 'href' => '#']
            ])
            ->render()
    )
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('Dropdown Buttons')
    ->subtitle('Input groups with dropdown buttons')
    ->content($dropdownCode . $dropdownContent)
    ->render();

// ################## File Input Groups ##################
$fileInputCode = wrapExampleCode(<<<'CODE'
// File input with label prepend
echo ThemedComponent::make('form/input-group')
    ->name('inputGroupFile01')
    ->prepend('Upload')
    ->control(
        ThemedComponent::make('form/input')
            ->type('file')
            ->name('inputGroupFile01')
            ->id('inputGroupFile01')
            ->render()
    )
    ->class('mb-3')
    ->render();

// File input with label append
echo ThemedComponent::make('form/input-group')
    ->name('inputGroupFile02')
    ->control(
        ThemedComponent::make('form/input')
            ->type('file')
            ->name('inputGroupFile02')
            ->id('inputGroupFile02')
            ->render()
    )
    ->append('Upload')
    ->class('mb-3')
    ->render();

// File input with button prepend
echo ThemedComponent::make('form/input-group')
    ->name('inputGroupFile03')
    ->prepend(
        ThemedComponent::make('buttons/button')
            ->text('Button')
            ->type('outline-secondary')
            ->id('inputGroupFileAddon03')
            ->render()
    )
    ->control(
        ThemedComponent::make('form/input')
            ->type('file')
            ->name('inputGroupFile03')
            ->id('inputGroupFile03')
            ->ariaDescribedby('inputGroupFileAddon03')
            ->ariaLabel('Upload')
            ->render()
    )
    ->class('mb-3')
    ->render();

// File input with button append
echo ThemedComponent::make('form/input-group')
    ->name('inputGroupFile04')
    ->control(
        ThemedComponent::make('form/input')
            ->type('file')
            ->name('inputGroupFile04')
            ->id('inputGroupFile04')
            ->ariaDescribedby('inputGroupFileAddon04')
            ->ariaLabel('Upload')
            ->render()
    )
    ->append(
        ThemedComponent::make('buttons/button')
            ->text('Button')
            ->type('outline-secondary')
            ->id('inputGroupFileAddon04')
            ->render()
    )
    ->render();
CODE);

$fileInputContent = ThemedComponent::make('form/input-group')
    ->name('inputGroupFile01')
    ->prepend('Upload')
    ->control(
        ThemedComponent::make('form/input')
            ->type('file')
            ->name('inputGroupFile01')
            ->id('inputGroupFile01')
            ->render()
    )
    ->class('mb-3')
    ->render();

$fileInputContent .= ThemedComponent::make('form/input-group')
    ->name('inputGroupFile02')
    ->control(
        ThemedComponent::make('form/input')
            ->type('file')
            ->name('inputGroupFile02')
            ->id('inputGroupFile02')
            ->render()
    )
    ->append('Upload')
    ->class('mb-3')
    ->render();

$fileInputContent .= ThemedComponent::make('form/input-group')
    ->name('inputGroupFile03')
    ->prepend(
        ThemedComponent::make('buttons/button')
            ->text('Button')
            ->type('outline-secondary')
            ->id('inputGroupFileAddon03')
            ->render()
    )
    ->control(
        ThemedComponent::make('form/input')
            ->type('file')
            ->name('inputGroupFile03')
            ->id('inputGroupFile03')
            ->ariaDescribedby('inputGroupFileAddon03')
            ->ariaLabel('Upload')
            ->render()
    )
    ->class('mb-3')
    ->render();

$fileInputContent .= ThemedComponent::make('form/input-group')
    ->name('inputGroupFile04')
    ->control(
        ThemedComponent::make('form/input')
            ->type('file')
            ->name('inputGroupFile04')
            ->id('inputGroupFile04')
            ->ariaDescribedby('inputGroupFileAddon04')
            ->ariaLabel('Upload')
            ->render()
    )
    ->append(
        ThemedComponent::make('buttons/button')
            ->text('Button')
            ->type('outline-secondary')
            ->id('inputGroupFileAddon04')
            ->render()
    )
    ->render();

$content .= ThemedComponent::make('layout/section')
    ->title('File Input Groups')
    ->subtitle('Input groups with file inputs and various addons')
    ->content($fileInputCode . $fileInputContent)
    ->render();
    
// ##################  Show full .twig template for this component ##################
$content .= showComponentTemplate($component);

echo $content;
