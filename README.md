spotify-export
==============

A bit of a hack to export all your Spotify playlists as JSON.

Usage
======

Clone the repo into your Spotify app folder
````
cd ~/Spotify
git clone git://github.com/jamesrwhite/spotify-export.git
````

Now we need to generate the list of playlist files that the app uses
````
cd ~/Spotify/spotify-export
php spotify.php
````

If this works you should get a response saying 'Success!'

Now open up Spotify and paste this into the search box
````
spotify:app:export
````

After a brief bit of loading you should see something like this:

![Spotify Export Preview](http://i.imgur.com/mbLGGbT.png)

Drawbacks
========
Mac support only right now. Althought it should be pretty easy to make it work for Windows/Linux. I'd imagine it just requires changing the directory structure.

Credits
========
The terminal colour script is from http://www.if-not-true-then-false.com/2010/php-class-for-coloring-php-command-line-cli-scripts-output-php-output-colorizing-using-bash-shell-colors/
