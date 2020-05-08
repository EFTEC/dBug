dBug
====
my mod of dBug
A debug output library which is used to visualize different datatypes.
Initially was developed by ospinto.

For more info visit [https://kolanich.github.com/dBug/]

[![openhub stats](https://openhub.net/p/php-dbug/widgets/project_partner_badge.gif)](https://openhub.net/p/php-dbug)

## This fork 2020

This forks adds the changes from kolanich and ospinto.

It also adds a new functionality, to be able to show the values without the variable types.

Usage:

```php
new dBug\dBug(new Vegetable("spinach"));
```




```php
new dBug\dBug(new Vegetable("spinach"),'',false,false);
```



## Installing this version via Composer

Add the next lines to composer.json and rebuild

```json
{
  "name":  "eftec/dBug",
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/eftec/dBug.git"
    }
  ],
  "require": {
    "eftec/dBug": "dev-master"
  }
}
```




## Very very brief list of features

Extended PHP version of ColdFusion's cfdump.

Outputs colored and structured tabular variable information.

Variable types supported are: Arrays, Classes/Objects, Database and XML Resources.

Ability to force certain types of output. Example: You can force an
object variable to be outputted as an array type variable.

Stylesheet can be easily edited.

Table cells can be expanded and collapsed.

It's FREE!!!
