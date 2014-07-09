1. only use standard opening and closing tag <?php ?>
2. always use E_STRICT forces you to code clean PHP 5 code., i.e., error_reporting(E_ALL | E_STRICT)., its same as using 'use strict' in JavaScript.
3. since php is loosely typed use type safe coding., i.e., don't compare string with integer and vice versa. use strict comparasion "==="
4. Exceptions are good to use but in php it leaks memory if not used properly like don't use in loops or in any validation.
5. some times php errors/warnings/notices are not sufficient, so use debugger like Xdebug - Support for profiling and code-coverage analysis
6. define is slow and const is fast -- with some limitation.
7. use more flexible DateTime class instead of procedural style date() functions http://www.php.net/manual/en/class.datetime.php

6. coding standard -  use PSR-* coding standard to code your program.
    a. Other people have difficulties to read the code (open source)
    b. Maybe someone needs to take over maintenance of your code
    c. You might stumble yourself over it once upon a time
    d. use spl_autoload_register() instead of __autoload() to avoid conflict.
    e. follow DRY pattern
    f. familiarize yourself with some
        i. design patters i.e., singleton, factory, Dependency injections
        ii. meta programming, i.e., magic methods & magic constants
        iii. namespaces
        iv. SPL (standard php library)
        v. tools like composer
        vi. Micro Frameworks, Full-Stack Frameworks, Component Frameworks
    g. PHPUnit
    
    
7. Unicode handling:
    a. use mb_* family string functions for unicode strings.
    b. 
    // Tell PHP that we're using UTF-8 strings until the end of the script
    mb_internal_encoding('UTF-8');
    // Tell PHP that we'll be outputting UTF-8 to the browser
    mb_http_output('UTF-8');
    c. use charset <meta> tag
    d. use charset=utf8mb4 in PDO connection.
    
    
8. Documentation: always document your class/interface/functions, so that u don't need to read the code yourself or any other people who need to work on your code. use phpDocumentor, and also change the doc when code changes.

9. Security: read the OWASIS guide
    1. never trust user input may lead to XSS atack, use output escaping functions/libraries, (use HTML_Purifier library only for large scale application.)
    2. don't use dynamic variable in include statements, keep allow_url_fopen = Off
    3. always use PDO prepare statment to execute sql, don't even use mysql_connect/mysql_real_escape_string, you can also consider using good ORM
    4. use ext/filter and ext/ctype for input validation and sanatization.
    5. proper file permission on your project
    6. Turn off register_globals/magic_quotes
    7. don't store important information in cookie use secure cookie or use server side session.
    8. use salt for hashing passwords/cookies
    
    
10. Performance:
    1. check phpdoc before writting your own function - PHP has very good doc love to learn them, if you need some kind or very heavy time consuming function, and its becoming the bottle neck of your application, then talk to your TLs they will come up with the work around
    2. use echo's multiple parameters instead of string concatenation.
    i.e.,
        echo 'Hello', 'World' // Good
        echo 'Hello' . 'World' // Bad
        
    3. prefer post increment ++$i instead of $++ whereever possible.
    4. OOP is cool, but always discuss with your seniors whether this feature needs to be implemented in oops or not, some times for simple task oop is just over kill.
    5. same applies for string creation if you need dynamic long string use array, instead go with string concatenation.
    NOTE: take a look into the zendengine for some undocumented code if you love coding! (CAUTION: it can screw your mind, you need to be proficient in C)
    6. use caching for static content
    7. Prefer PCRE over EREG (much more powerful and faster!), same as point #4
    8. use mod_zip
    9. consider using built-in Using APC as a persistent key-value store
    10. If you need a distributed cache, use the Memcached client library. Otherwise, use APC.
    
    
    
11. Extras: If you want to be smart/extra productive or enhance your knowledge.
    a. Vagrant/puppet/chef -- virtual machine
    b. BDD - Behat
