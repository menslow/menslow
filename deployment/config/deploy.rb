# Application name - used on shop for deployment directory
set :application, "esd"

# Options
set :use_sudo, false
set :keep_releases, 5

# Exclude the following files
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules", "env_local", "env_prod", "env_stage"]

# Source Control - defaults to git
set :scm, :git
# Repository
set :repo_user, "menslow"
set :repo_name, "esd"
set :repository, "git@github.com:#{repo_user}/#{repo_name}.git"  # Your clone URL
# Default repository branch to checkout
set :branch, "master"
# Using Git Submodules?
set :git_enable_submodules, 0

# Tell Capistrano to use agent forwarding with this command; uses your local keys instead of keys installed on the server
ssh_options[:forward_agent] = true
ssh_options[:keys] = [File.join(ENV["HOME"], ".ssh", "id_mistermachineshop_rsa")]

# Timestamp
set :time_stamp, Time.now.to_i

# Set theme path for uploaded minified assets
set :theme_path, "../application/wp-content/themes/esd"

# Config for test server on mistermachineshop.com
# Extracted from deploy/dev.rb until we need to deploy to multiple servers

# Where should the site deploy to?
set :deploy_to, "/var/www/#{application}"

server "mistermachineshop.com", :app, :web, :db, :primary => true

# Deploy settings

# Fetch only the changes since the last
set :deploy_via, :remote_cache

# This is the server user account
set :user, "root"

# Specify when to run tasks
after "deploy:update_code", "shared:deploy_assets", "shared:make_symlinks", "shared:update_htaccess"
after "deploy", "deploy:cleanup"
