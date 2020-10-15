<!---
title: Installation
author: Robin Radic
icon: fa fa-legal
-->

###### Composer
```JSON
"laradic/themes": "~1.0"
```
###### Laravel
Add the ThemesServiceProvider to your config.
```php
'Sunveloper\TeeplussThemes\ThemesServiceProvider'
```

Optionally, you can add any of the Facades below:
```php
array(
    'Themes' => 'Sunveloper\TeeplussThemes\Facades\Themes',
    'Asset' => 'Sunveloper\TeeplussThemes\Facades\Asset',
    'Navigation' => 'Sunveloper\TeeplussThemes\Facades\Navigation'
);
```
