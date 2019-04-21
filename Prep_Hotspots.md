## Topics that need to be reviewed and researched:
(from the [lead developer](https://github.com/ChexWarrior/) of this project)


### Text Editors and IDEs
You can use whatever editor you'd like, If you go with VSCode, I'd suggest reading through it's [manual](https://code.visualstudio.com/docs) and then installing the following extensions: [PHP Debug](https://github.com/felixfbecker/vscode-php-debug) and [PHP Intellisense](https://github.com/felixfbecker/vscode-php-intellisense). Also, you can try out [PHPStorm](https://www.jetbrains.com/phpstorm/), which is the IDE that professional PHP programmers use.  As a [student](https://www.jetbrains.com/student/) you can download this IDE for free. (Can consult the lead developer for setup & configuration.)

### Git
[Git Basics](https://git-scm.com/book/en/v1/Git-Basics) (Read this entire chapter, it covers the basic commands of Git!)

The other important Git thing to know is our branching model:
- We will only have two branches - `master` and `develop` (if you don't know what I mean by branches then read the documentation I linked above).
- All work on new features and bug fixes will be done in the `develop` branch.
- Once the team is satisfied the work, lead developer will merge the `develop` branch into the `master` branch.

### Homestead
Remember that Homestead is just an environment for [Vagrant](https://vagrantup.com) for developing PHP projects.  

There are several commands you need to know:   
`homestead up` - Will boot up a new VM with your dev environment ready
`homestead destroy` - Will remove the VM
`homestead suspend` - Will save the current VM to disk
`homestead resume` - Will start a suspended VM back up

The local version of the Hotspots application can be reached on your machine at http://hotspots.local

### PHP
(NOTE: If this doesn't seem to work don't worry, will figure it out later. Stay tuned.)


Walk through the [PHP Tutorial](https://www.php.net/manual/en/tutorial.php).
- If the tutorial talks at all about setting up a webserver ignore it.  Since you already have Homestead on your machine just run `homestead up` from the terminal.  
- Then open the directory where you cloned this repository in your preferred code editor and follow the tutorial.

### Symfony 4
Symfony 4 is a framework for PHP to build web applications and is what we will be using to build our app.  
Please read through the [documentation](https://github.com/cs691projecthotspots/webapp/issues/new) and try creating some pages or routes!
