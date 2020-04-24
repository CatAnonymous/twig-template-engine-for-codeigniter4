# Introduction
Twig for Codeigniter 4, Twig Template Engine for Codeigniter 4x stable

Tested on Twig 3.0.3, PHP 7.4.5 and Codeigniter 4.0.2

## Requirements
• PHP 7.2 or newer

• Codeigniter 4x stable

## Folder Structure
Extract the entire file to the root of the application
```
codeigniter/
└── app/
    └── Twig/
        └── Template.php
└── vendor/
    └── twig/
        └── ...
    └── ...
```

## Usage
Create file App/Views/example.twig with content
```
Hi, {{name}}!
```

Put the following code in the Controller you want to display
```
$template = new \App\Twig\Template;
$template->display('example', ['name' => 'Codeigniter']);
```

By default, the code will automatically add all CI4 functions. To add a function use
```
$template->addFunction($name, $callable);
```

To add a filter use
```
$template->addFilter($name, $callable);
```

## Contact
• Email: khaiphan9x@gmail.com

• Facebook: https://fb.com/khaiphan9x

If you need more features, please create a issue.
