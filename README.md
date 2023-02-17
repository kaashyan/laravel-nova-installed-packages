Currency Listing Base On Country
======


Installation
-----


Step:- 1)
-----

```

composer require indianic/laravel-nova-installed-packages



Step:- 2)
-----

```
Next up, you must register the tool with Nova. This is typically done in the tools method of the NovaServiceProvider.

// in app/Providers/NovaServiceProvider.php

```bash
  public function tools()
{
    return [
        new \Standardpackage\NovaInstalledPackages\Tool(),
    ];
}

```



