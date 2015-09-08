<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder->in(__DIR__.'/../templates')
    ->name('*.xml');

$md = '';
foreach ($finder as $templateFile) {
    $xml = file_get_contents($templateFile);

    $element = simplexml_load_string($xml);
    $name = (string) $element->attributes()->group;
    // remove any knp_ prefix
    $name = str_replace('knp_', '', $name);
    $name = str_replace('_', ' ', $name);
    $name = ucwords($name);

    $md .= sprintf("### %s Templates\n\n", $name);

    foreach ($element->template as $templateElement) {
        $template = (string)$templateElement->attributes()->value;
        $name = (string)$templateElement->attributes()->name;
        $description = (string)$templateElement->attributes()->description;

        $md .= sprintf("#### %s\n\n", $name);
        if ($description) {
            $md .= $description."\n\n";
        }
        $md .= sprintf("```php\n%s\n```\n\n", $template);
    }

}

echo $md."\n";


