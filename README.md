spotify-export
==============

Export your Spotify library as JSON!

Requirements
============

To view local apps you need to have a developer account, you can apply for one here: https://developer.spotify.com/technologies/apps/#developer-account

Usage
======

Create a folder called Spotify in your home directory (if you don't already have one):
```
mkdir ~/Spotify
```

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
