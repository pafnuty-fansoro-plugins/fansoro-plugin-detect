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
    isMobile
{/if}

{if Detect::isTablet()}
    isTablet
{/if}

{if Detect::isiPhone()}
    isiPhone
{/if}

{if Detect::isiPad()}
    isiPad
{/if}

{if Detect::isIOS()}
    isIOS
{/if}

{if Detect::isAndroid()}
    isAndroid
{/if}

{if Detect::isChrome()}
    isChrome
{/if}

{if Detect::isOpera()}
    isOpera
{/if}

{if Detect::isFirefox()}
    isFirefox
{/if}

{if Detect::isIE()}
    isIE
{/if}
```


## License 
[MIT](https://github.com/pafnuty-morfy-plugins/morfy-plugin-detect/blob/master/LICENSE)