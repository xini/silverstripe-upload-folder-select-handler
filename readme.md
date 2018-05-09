# SilverStripe default file select folder

[![Version](http://img.shields.io/packagist/v/innoweb/silverstripe-upload-folder-select-handler.svg?style=flat-square)](https://packagist.org/packages/innoweb/silverstripe-upload-folder-select-handler)
[![License](http://img.shields.io/packagist/l/innoweb/silverstripe-upload-folder-select-handler.svg?style=flat-square)](license.md)

## Overview

Changes the default folder for choosing existing files through `UploadField` to the folder set with `setFolder()` (if set).

SilverStripe 3.2 introduced a [new default behavior for `UploadField`](https://docs.silverstripe.org/en/3.2/changelogs/3.2.0/#uploadfield-select-from-files-shows-files-in-all-folders-by-default) that shows files in all folders by default when "Select from files" is selected.

Now, if you tried to keep the assets tidy in the past, you have probably used 'setFolder()' on your UploadFields to define a folder within assets where your particular files should be uploaded to. To let a user select files from that particular upload folder, you would now have to add 'setDisplayFolderName()' as well:

```
UploadField::create('MyField')->setFolder('MyUploads')->setDisplayFolderName('MyUploads');
```

This module removes this extra step by automatically setting the display folder to the upload folder if that is defined for an `UploadField`.

### SilverStripe 4 compatibility

This module will be obsolete by the changes introduced in [this pull request](https://github.com/silverstripe/silverstripe-asset-admin/pull/763) (probably SS 4.2). There won't be a SS4 compatible version of this module.

## Requirements

* SilverStripe Framework ~3.2

## Installation

Install the module using composer:
```
composer require innoweb/silverstripe-upload-folder-select-handler dev-master
```
or download or git clone the module into a ‘upload-folder-select-handler’ directory in your webroot.

Then run dev/build.

## License

BSD 3-Clause License, see [License](license.md)
