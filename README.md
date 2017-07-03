# _Leetspeak_

#### _Epicodus-PHP, Week 2 PHP BDD Practice, 07.3.2017_

#### By _**Brittany Kerr and Nathan Stewart**_

## Description

_This PHP exercise allows the user to enter a word or phrase and will return it using LeetSpeak:  replacing 'e' with '3', 'o' with '0', capital 'I' with '1' and 's' with 'z', but only if the 's' is not the beginning of the word._

## Prerequisites

_You will need the following properly installed on your computer:_

* [MAMP](https://www.mamp.info/en/) for Windows or MacOS
* [PHP](https://secure.php.net/)
* [Composer](https://getcomposer.org/)

## Configuration/Dependencies

_The app will use Silex, Twig, and PHPUnit._

## Setup/Installation

* Open GitHub site on your browser: https://github.com/GStewartN/Ping
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
  * type 'cd desktop' and press enter
  * type 'git clone' then paste the repository link and press enter
  * type 'cd Contacts' to access the path on your computer
  * type 'composer install' in terminal to download dependencies
  * type 'cd web' to enter the web folder, then type 'php -S localhost:8000' to open local server
* In your browser, enter 'localhost:8000' to view the webpage on your browser


## Specifications

| Behavior | Input | Output |
|----------|-------|--------|
| User visits landing page | User enters the word 'tree' into form and clicks translate button | The word appears with the 'e' replaced by '3': 'tr33' |
| User visits landing page | User enters the word 'house' and clicks translate button | The word appears with the letter 'o' replaced by '0' and 'e' replaced by '3': 'h0us3' |
| User visits landing page | User enters the word 'Indentation' and clicks translate button | The word appears with the capital letter 'I' replaced with '1', 'o' replaced by '0' and 'e' replaced by '3': '1nd3ntati0n'|
| User visits landing page |  User enters the word 'Indentations' and clicks translate button | The word appears with the letter 's' replaced with 'z' unless it is the first letter of the word, the  capital letter 'I' replaced with '1', 'o' replaced by '0' and 'e' replaced by '3': '1nd3ntati0nz'|
| User visits landing page |  User enters multiple words: 'I eat lots of potatoes' and clicks translate button | The word appears with the letter 's' replaced with 'z' unless it is the first letter of the word, the  capital letter 'I' replaced with '1', 'o' replaced by '0' and 'e' replaced by '3': '1 3at l0tz 0f p0tat03z'|


## Technologies Used

* _PHP_
* _HTML_
* _Bootstrap_
*  _CSS_
* _Silex_
* _Twig_
* _Composer_
* _MAMP_
* _PHPUnit_

### License

MIT License

Copyright &copy; 2017 Brittany Kerr and Nathan Stewart

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
