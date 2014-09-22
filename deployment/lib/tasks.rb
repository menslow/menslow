namespace :shared do
	desc "Symlinking files"
	task :make_symlinks, :roles => :web do
		run "ln -nfs #{shared_path}/.env #{release_path}/application/.env"
		run "ln -nfs #{shared_path}/uploads #{release_path}/application/wp-content/uploads"
	end
	# TODO: make this an insert instead of using a separate htaccess file
	desc "Adding server auth to test server htaccess"
	task :update_htaccess, :roles => :web do
		run "rm #{release_path}/application/.htaccess"
		run "cp #{release_path}/application/.htaccess-test #{release_path}/application/.htaccess"
		run "rm #{release_path}/application/.htaccess-test"
	end
	desc "Minify and upload css and js files"
	task :deploy_assets, :roles => :web do
		# run_locally( "cd ..; grunt")
		upload( "#{theme_path}/lib/js/scripts.min.js", "#{release_path}/application/wp-content/themes/esd/lib/js/scripts.min.js" )
		upload( "#{theme_path}/style.min.css", "#{release_path}/application/wp-content/themes/esd/style.min.css" )
	end
end
