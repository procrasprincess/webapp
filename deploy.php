<?php
namespace Deployer;

require 'recipe/symfony.php';

// Project name
set('application', 'hotspots');

// Project repository
set('repository', 'git@github.com:cs691projecthotspots/webapp.git');
set('branch', 'master');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', [
    'vendor',
]);

// Writable dirs by web server
add('writable_dirs', [
    '/var/www/html/hotspots/current/public'
]);

set('http_user', 'www-data');
set('keep_releases', 10);
set('deploy_path', '/var/www/html/hotspots');
set('composer_options', 'install --no-dev --optimize-autoloader');

// Hosts
host('hotspots-deploy');

// Tasks
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:writable',
    'deploy:unlock',
    'cleanup',
    'success'
]);

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// // Migrate database before symlink new release.
// before('deploy:symlink', 'database:migrate');
