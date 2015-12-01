# Detect Plugin for [Morfy CMS](http://morfy.org/)

![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square "Version")
![DLE](https://img.shields.io/badge/Morfy-2.x-green.svg?style=flat-square "Morfy Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/pafnuty-morfy-plugins/morfy-plugin-detect/blob/master/LICENSE)

The plugin to define the different types of devices from which the user browses the site. Based on [Mobile_Detect](http://mobiledetect.net/) class.

Special thanks https://github.com/Awilum for an example implementation code.


## Install
See [this instruction](http://morfy.org/documentation/plugins/plugins-installation)

## Usage
In any site template:
```smarty
{Detect::getUserAgent()}

{Detect::mobileGrade()}

{if Detect::isMobile()}
    {* Do something fot Mobile *}
{/if}

{if Detect::isTablet()}
    {* Do something fot Tablet *}
{/if}

{if Detect::isiPhone()}
    {* Do something fot iPhone *}
{/if}

{if Detect::isiPad()}
    {* Do something fot iPad *}
{/if}

{if Detect::isIOS()}
    {* Do something fot IOS *}
{/if}

{if Detect::isAndroid()}
    {* Do something fot Android *}
{/if}

{if Detect::isChrome()}
    {* Do something fot Chrome *}
{/if}

{if Detect::isOpera()}
    {* Do something fot Opera *}
{/if}

{if Detect::isFirefox()}
    {* Do something fot Firefox *}
{/if}

{if Detect::isIE()}
    {* Do something fot IE *}
{/if}
```


## License 
[MIT](https://github.com/pafnuty-morfy-plugins/morfy-plugin-detect/blob/master/LICENSE)