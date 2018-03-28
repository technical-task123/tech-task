# How check result
- checkout repo
- run docker compose
- go to http://0.0.0.0:8099/ on host machine
- see result
- run php unit test

# Finalised files:
- src/GlobalFunction/GlobalFunctionLib/Base/CreateObject.php
- apache.conf  - way of my thinks and result.
- Dockerfile

# Especially files
- test/Lib/CreateObject/CreateObjectBaseTest.php as example of easy check and for remember:
  - what class has changed namespace (specially or accidentally(!))
  - what class has ceased to exist.
- test/Lib/CreateObject/CreateObjectAdditionalTest.php as example of right relations in tests:
  - tests where called method "run" have not reason call while test for method "run" is not successfully. 
  - when possible used DRY for tests.  
  - used data providers for compact cover of most possible situations.
     
# Useful test    
   - /test/indexTest.php verify stdout and stderr after call public/index.php.

# Integrated thoughts in the project:
- comment thoughts in appropriate places. It helps to self and another developer 
  to right and fully understand all risk before edited the code.
  - Comments answer on questions
    - why next code/directive need there ? 
    - why not in another way ?
    - what to do there in future and why ? by @todo
    - when modified code ? Comment with @since. 
    - who modified code ? Comment with @author. Who can help.
    
    Examples:
    - apache.conf
    - src/GlobalFunction/GlobalFunctionLib/Base/CreateObject.php
    - Dockerfile
    
  - Marked by @deprecated and @since before delete unused functions/files. 
    And set @todo for resolve situation. 
    
    Examples: 
    - src/Alib.php
    
  - Add @see to link hidden related files/methods/classes/...
    
    Examples: 
    - src/GlobalFunction/IGlobalFunction.php
    
  - Add @uses to link hidden implemented files/methods/classes.
    
    Examples:
    - src/GlobalFunction/GlobalFunction.php
     
- namespace alike "<unique_vendor>/<unique_package>" is best way 
  of make accessible all current project's classes to any another project.
  For this project it is DanchukAS\AmadeusTechTask123.
  For test of this project it is DanchukAS\AmadeusTechTask123Test. 
  @todo Add namespace to all files.
  
- namespaces for type of entities is good 
  for identify, differ from another class with same or similar names.
        
- but namesplaces like PSR-4 is not really necessary there. 
  Auto generating class map give more freedom to refactor 
  alike adding intermediate file directory without manipulation with longer namespace.
  
  Examples: 
  - directory src/GlobalFunction,
  - directory src/GlobalFunction/GlobalFunctionLib/Base 
  - file src/GlobalFunction/GlobalFunctionLib/Base/CreateObject.php
  
- For more readable files, class names and code used them:
  - Interfaces have prefix I instead suffix Interface
  - Traits have prefix T instead suffix Trait
  - Abstract classes have prefix A instead prefix Abstract
            
- Some settings from .idea existed in repo for share setting 
  and equally inspect project together.    
    
# Resolutions of problems:
- set "classmap" in composer.json for auto generating map.
- PHPStorm's FileWatcher with command composer update. Run too often. (Exist in repo)
    - Sometimes(not relate of time after last execution) composer not update class map
      (but why?). For resolve repeat composer update few ones.
    - Need manual composer update (in PHPStorm: Tools->Composer->Update) 
      after create files or after edit class names or namespace.
- util/ILibGenerator generate interfaces for "middleware classes" 
  which has __call instead implementation of methods.      
  
# Directory structure of project:
- public Place for accessible files for web server
- src/Ability Library of animal abilities. 
  What animals can do and what default action for ability.
- src/ActionFunction Implementation of actions, not only for animal.
- src/ActionObject Library of actions.
  What can to do with animal, what ability animal need for available run action.
- src/GlobalFunction Main library of functions.
- src/LifeCycle Library of object's life cycles.
  What object to do step by step.
- src/Object Other no sorted entities.
- util Place for console utility for code support.
- test/Mock Examples/Mocks for tests.
- test/Provider - combine and prepare mocks for use in tests.

# Main files:
- public/index.php Main entry point.
- util/ILibGenerator.php Generate interfaces for possible IDE auto complete methods 
  of some classes as GlobalFunction, ActionFunction.
- ALib Realise 1 file = 1 class = 1 method. Any subdirectories for group files. 
  Subdirectories have not any affect. They increase usefully search necessaries files. 
- test/TestCase.php It is parent only for base test of classes.
- apache.conf Available run script by browser. Used by Dockerfile.
- composer.json Autoloader by class map, provide phpunit.
- Dockerfile, docker-compose.yml Available easy run project on clear machine, 
  test minimal requirements.
- phpunit.xml Check covering by tests. Where are tests, how load them.
  
# Todo:
- usable builders
- usable naming
- usable directory hierarchy
- review todo in files
- add time step for life cycle process