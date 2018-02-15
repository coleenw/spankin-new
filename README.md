# README #

Still a WIP.

======

### What is this repository for? ###

Sets up directory and necessary dependencies to get project started.

### Requires ###

You will need the following installed **globally** on your machine first:

- Node.js
- Npm
- Gulp

### How do I get set up? ###

1. Create a new project directory.
2. Clone this repo into that directory.
3. Remove the existing .git folder (if it exists) so you don't overwrite things here.
4. Do an 'npm install' and 'npm init' to set up your project.
5. Open up the gulpfile.js file and change the project folder to your new project folder.
6. Do a 'git init' in your project folder to set up git.
7. Create a new git repo on bitbucket and add new remote origin to your project.
8. Do a commit & push to make sure all is dandy.
9. Code.

#### Notes ####

Commands set up for gulp:

- 'gulp build': Spins up local server and runs watch tasks & browserSync.
- 'gulp compressToTheme': Minifies CSS file and puts it in the project folder as defined in the gulpfile.js file.
