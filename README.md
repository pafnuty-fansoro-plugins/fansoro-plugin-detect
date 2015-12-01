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
{Detect::getUserAgent()} <br>
{Detect::mobileGrade()} <br>

{if Detect::isMobile()}
    isMobile <br>
{/if}

{if Detect::isTablet()}
    isTablet <br>
{/if}

{if Detect::isiPhone()}
    isiPhone <br>
{/if}

{if Detect::isiPad()}
    isiPad <br>
{/if}

{if Detect::isIOS()}
    isIOS <br>
{/if}
{if Detect::isAndroid()}
    isAndroid <br>
{/if}
{if Detect::isChrome()}
    isChrome <br>
{/if}
{if Detect::isOpera()}
    isOpera <br>
{/if}
{if Detect::isFirefox()}
    isFirefox <br>
{/if}
{if Detect::isIE()}
    isIE <br>
{/if}
```


## License 
[MIT](https://github.com/pafnuty-morfy-plugins/morfy-plugin-detect/blob/master/LICENSE)