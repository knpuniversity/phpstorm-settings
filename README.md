# PhpStorm Live Templates (+ other settings)

This repository includes [live templates](http://knpuniversity.com/screencast/phpstorm/live-templates)
for PhpStorm (and may contain other settings in the future).

**Share your Favorite Settings!** This isn't meant to be a readonly repository. Have
something you love about your PhpStorm setup? Create a pull request and share it.

[See the Live Templates](#live-templates)

## Installation

Before you do this, make sure PhpStorm is not running, or it will overwrite the changed
files before shutting down.

Your installation of PhpStorm has various directories and configuration files. By
putting some configuration files from this repository into the right place, you'll
be able to get new features, like live templates.

## Find your config folder

For PhpStorm starting from 2016.1, replace 'YYYY.X' with the version number of PhpStorm.

OS | Location
---|---------
Windows XP | `C:\Documents and Settings\<User name>\.PhpStormYYYY.X\config`
Windows Vista | `C:\Users\<User name>\.PhpStormYYYY.X\config`
Linux | `~/.PhpStormYYYY.X/config`
OS X | `~/Library/Preferences/PhpStormYYYY.X`

For PhpStorm before 2016.1, replace 'XX' with the version number of PhpStorm: WebIde80 for PhpStorm 8, WebIde90
for PhpStorm 9, etc. 

OS | Location
---|---------
Windows XP | `C:\Documents and Settings\<User name>\.WebIdeXX\config`
Windows Vista | `C:\Users\<User name>\.WebIdeXX\config`
Linux | `~/.WebIdeXX/config`
OS X | `~/Library/Preferences/WebIdeXX`


See
[Directories used by the IDE to store settings, caches, plugins and logs](https://intellij-support.jetbrains.com/hc/en-us/articles/206544519-Directories-used-by-the-IDE-to-store-settings-caches-plugins-and-logs)
for more information about the configuration directory structure.

## Download the files you want

Inside your config folder, you'll see a number of directories:

Directory | Contents
----------|---------
codestyles | Code Style settings (Editor > Code Style)
colors | Colors & Fonts settings (Editor > Colors & Fonts)
fileTemplates | File and Code Templates (Editor > File and Code Templates)
filetypes | File Types (Editor > File Types)
inspection | Inspection profiles (Editor > Inspections)
keymaps | Keyboard shortcuts (Appearance & Behavior > Keymap)
templates | Live templates (Editor > Live Templates)

Suppose you want the Symfony live templates from this repository - which are located
at [templates/knp_symfony.xml](https://github.com/knpuniversity/phpstorm-settings/blob/master/templates/knp_symfony.xml).
Follow these steps:

1. Download that file - you can clone the whole repository, or just download that
one file.

1. Move the file into the `templates/` subdirectory of your config folder

1. Start PhpStorm (because of course, you closed it before trying all of this...
didn't you???)

That's it! In the PhpStorm Settings, under "Editor > Live Templates", you should
see the new "symfony" live templates.

## Live Templates

### Frontend Templates

#### lorem

```php
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
```

### Symfony Templates

#### formhandle

Adds controller form-handling code

```php
$form = $this->createForm($CLASSNAME$::class);

$form->handleRequest($request);
if ($form->isSubmitted() && $form->isValid()) {
    // todo - do some work, like saving stuff

    $this->addFlash('success', '$SUCCESSMESSAGE$');

    return $this->redirectToRoute('$ROUTENAME$', []);
}
```

#### formrow

```php
{{ form_row(form.$FIELD$) }}
```

#### formrowfull

Renders widget/label/errors

```php
<div class="form-control">
    {{ form_label(form.$FIELD$) }}
    {{ form_widget(form.$FIELD$) }}
    {{ form_errors(form.$FIELD$) }}
</div>
```

#### repofind

Queries from a doctrine repository in a controller

```php
$this->getDoctrine()
    ->getRepository('$REPO$')->$METHOD$($ARG$);
```

#### rendertwig

Renders a Twig template from a controller

```php
return $this->render('$TEMPLATE$', [
    $END$
]);

```

#### 404unless

404 if statement for your controller

```php
if ($CONDITION$) {
    throw $this->createNotFoundException($MESSAGE$);
}
```

#### include

```php
{{ include('$TEMPLATE$') }}
```

#### method

```php
@Method("$METHOD$")
```

#### path

```php
{{ path('$ROUTE$', { $END$ }) }}
```

#### render

```php
{{ render(controller('$CONTROLLER$', { $END$ })) }}
```

#### route

```php
@Route("/$PATH$", name="$NAME$")
```

#### action

Creates a controller action.

```php
/**
 * @Route("/$PATH$", name="$ROUTE_NAME$")
 */
public function $NAME$Action()
{
    $END$
}
```

#### service

Creates a YML service

```php
$NAME$:
    class: $CLASS$
    arguments:
        - '$ARG1$'
```

#### tags

Yaml service tags

```php
tags:
    - { name: $TAGNAME$ }
```

#### createquery

Query objects in repositories with DQL

```php
$this->getEntityManager()
    ->createQuery('SELECT $ALIAS$
                   FROM $ENTITY$ $ALIAS$
                   WHERE $ALIAS$.$PROPERTY$ = :$PARAMETER$')
    ->setParameter('$PARAMETER$', $ARGUMENT$)
    ->execute();
```

#### getem

```php
$em = $this->getDoctrine()->getManager();
```

#### getrepo

```php
$em->getRepository('$ENTITY$');
```

#### doctrinecolumn

Adds a property with @ORM annotations

```php
/**
 * @ORM\Column(type="$TYPE$")
 */
private $$$PROPERTYNAME$;
```

#### asset

```php
{{ asset('$PATH$') }}
```

#### asseticjs

```php
{% javascripts
    '$PATH$'$END$
%}
    <script type="text/javascript" src="{{ asset_url }}"></script>
{% endjavascripts %}
```

#### asseticcss

```php
{% stylesheets
    '$PATH$'$END$
    filter='cssrewrite'
%}
    <link rel="stylesheet" href="{{ asset_url }}" />
{% endstylesheets %}
```

#### xmlservices

Generates an XML services file

```php
<?xml version="1.0" ?>

<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">

    <services>
        <service id="$SERVICEID$" class="$CLASS$" />
    </services>
</container>
```

#### yamlroute

YAML route

```php
$NAME$:
    path:   /$PATH$
    defaults:  { _controller: $CONTROLLER$ }
```

#### querybuilder

Query objects in repositories using query builder

```php
$this->createQueryBuilder('$ALIAS$')
            ->where('$ALIAS$.$PROPERTY$ = :$PARAMETER$')
            ->setParameter('$PARAMETER$', $ARGUMENT$)
            ->getQuery();
```

#### trans

Allows fast entering of translated messages

```php
{{ '$MESSAGE$'|trans }}
```

#### servix

Creates a XML service

```php
<service id="$NAME$" class="$CLASS$">
    <argument type="service" id="$ARG1$"/>
</service>
```

## Credits

First, a thanks to [nicwortel](https://github.com/nicwortel) for this https://github.com/nicwortel/phpstorm-ide-config
repository, which contains some nice settings (including stuff that we don't have
here). He also did a really nice job with his README, and I've borrowed parts of it
shamelessly.

A number of people have contributed to this repository. Additionally, some templates
were adapted from https://github.com/raulfraile/sublime-symfony2.
