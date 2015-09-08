# PhpStorm Settings (to make you fly)

This repository includes various configuration that can help make your PhpStorm
environment *amazing*!

**Share your Favorite Settings!** This isn't meant to be a readonly repository. Have
something you love about your PhpStorm setup? Create a pull request and share it.

First, a thanks to [nicwortel](https://github.com/nicwortel) for this https://github.com/nicwortel/phpstorm-ide-config
repository, which contains some nice settings (including stuff that we don't have
here). He also did a realy nice job with his README, and I've borrowed parts of it
shamelessly.

## Installation

Before you do this, make sure PhpStorm is not running, or it will overwrite the changed
files before shutting down.

Your installation of PhpStorm has various directories and configuration files. By
putting some configuration files from this repository into the right place, you'll
be able to get new features, like live templates.

## Find your config folder

OS | Location
---|---------
Windows XP | `C:\Documents and Settings\<User name>\.WebIdeXX\config`
Windows Vista | `C:\Users\<User name>\.WebIdeXX\config`
Linux | `~/.WebIdeXX/config`
OS X | `~/Library/Preferences/WebIdeXX`

Replace 'XX' with the version number of PhpStorm: WebIde80 for PhpStorm 8, WebIde90
for PhpStorm 9, etc. See
[Project and IDE settings](https://www.jetbrains.com/phpstorm/help/project-and-ide-settings.html#d739736e149)
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
at [templates/symfony.xml](https://github.com/knpuniversity/phpstorm-settings/blob/master/templates/symfony.xml).
Follow these steps:

1. Download that file - you can clone the whole repository, or just download that
one file.

1. Move the file into the `templates/` subdirectory of your config folder

1. Start PhpStorm (because of course, you closed it before trying all of this...
didn't you???)

That's it! In the PhpStorm Settings, under "Editor > Live Templates", you should
see the new "symfony" live templates.

## Credits

A number of people have contributed to this repository. Additionally, some templates
were adapted from https://github.com/raulfraile/sublime-symfony2.
