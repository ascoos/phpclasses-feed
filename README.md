# How to use the package.

This package can display the latest package from PHPClasses.

Creates a formatted table in frame style, showing the latest packages published on the PHP Classes website.

This package is a variant of [original](https://github.com/ascoos/phpclasses_latest) for use outside Ascoos Cms.

You can easily embed it into any code as long as you follow the instructions mentioned below in the details.

Unfortunately, the configuration has to be done manually, unless you create code that makes it more organized and automatic, as is the case when we create modules for cms.


## Installation

Install the package in any folder within your Web page, as long as you include the following code in the HTML where you want it to appear.

```
    <div class="efp-template">
        <?php require_once([PATH]/'phpclasses-feed.php'); ?>
    </div>
```

You should also make sure that the following are included in the HTML HEAD:

```
    <link rel="stylesheet" href="assets/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/main.css" type="text/css" />
    <script type="text/javascript" src="assets/js/jquery.js" charset="UTF-8"></script> 
```

## Configure the package
````
    libs/config.php
````

- Change the presets according to your needs.

```
        'lang'          => 'en',        // Current Language of package
        'show_title'    => true,        // Show Title in block element.
        'method'        => 'rss',       // What feed method is used (XML or RSS)?
        'count'         => 10,			// How many classes will be displayed.
        'user'		    => 'bigfriend',	// PHPClasses User
        'show_summary'	=> true,		// Show Summary Description
        'show_days'	    => true,		// Show Days
        'theme'         => 'cleargray'	// The Block theme
```  

Now you can run it either through another cms, or as a standalone one, like the example that came with the package.

--- 

An online demo can be viewed [HERE](https://demo.ascoos.com/tests/phpclasses-feed/)
