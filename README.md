spotify-export
==============

~~A bit of a hack to export all your Spotify playlists as JSON.~~

Export your Spotify library as JSON!

Requirements
============

To view local apps you need to have a developer account, you can apply for one here: https://developer.spotify.com/technologies/apps/#developer-account

Usage
======

Clone the repo into your Spotify app folder
````
cd ~/Spotify
git clone git://github.com/jamesrwhite/spotify-export.git
````
Now you need to set up a quick symlink
````
ln -s ~/Spotify/spotify-export/export ~/Spotify
````

Now open up Spotify and paste this into the search box
````
spotify:app:export
````

After a brief bit of loading you should see something like this:

![Spotify Export Preview](http://i.imgur.com/mbLGGbT.png)

Drawbacks
========
~~Mac support only right now. Althought it should be pretty easy to make it work for Windows/Linux. I'd imagine it just requires changing the directory structure.~~

Should support all platforms now :)
