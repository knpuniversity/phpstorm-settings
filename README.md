# PhpStorm Live Templates (+ other settings)

This repository includes [live templates](http://knpuniversity.com/screencast/phpstorm/live-templates)
for PhpStorm (and may contain other settings in the future).

**Share your Favorite Settings!** This isn't meant to be a readonly repository. Have
something you love about your PhpStorm setup? Create a pull request and share it.

[See the Live Templates](#live-templates)

## Installation

1. Go to *PhpStorm Preferences | Tools | Settings Repository*

2. Add Read-only Source https://github.com/knpuniversity/phpstorm-settings

3. Restart PhpStorm

You can see and manage all the snippets under the *Preferences | Editor | Live Templates* 

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
