PHP-Boilerplate
===============
This is a boilerplate for starting a small site or app with `PHP`, it was created because every time I needed to create a small something I ended up wishing it was set up to expand into something bigger i.e. now I need to set up GRUNT, or I need to connect to a db so now lets code that out...  It was started by downloading the [HTML5 boilerplate](http://html5boilerplate.com/) and hacking it into something more dynamic with PHP. then I started adding functionality in the way of [classes](http://www.php.net/manual/en/language.oop5.php) to connect to db's and start sessions and such. Then I erased all the superfluous garbage i didn't need

###Proposed Ideas to implement:

- Easy navigation set up
- db integration
- `<head>` and `<footer>` set dynamically
- Page config set in array for easy SEO edits to whole site
- Each page has the ability to have custom css or JS
- Favicons set up for multiple devices
- Easy form creation & processing with custom set of form objects
- Themes
- [GRUNT](http://gruntjs.com/) workflow built in with: 
    - [concat](https://www.npmjs.org/package/grunt-contrib-concat) *(concatinate all JS)*
    - [uglify](https://www.npmjs.org/package/grunt-contrib-uglify) *(minimize all JS)*
    - [imagemin](https://www.npmjs.org/package/grunt-contrib-imagemin) *(minimizes images)*
    - [SASS](http://sass-lang.com/) *(parse sass)*
    - [autoprefixer](https://www.npmjs.org/package/grunt-autoprefixer) *(add vendor prefixes to css)*
    - GRUNT will also [watch](https://www.npmjs.org/package/grunt-contrib-watch) for changes as well

####To-Do's
- [ ] Log-in system prebuilt
- [ ] Install script for db creation
- [ ] Backend form for easy creation of new pages
- [ ] Create first base theme & pages *(index, about, contact-form)*

###This is a work in progress
If you plan to clone and play with please keep in mind that it is a work in progress, so any issues please let me know or fix it yourself and submit a pull.

###Status so far
Most of the main segments are built as of now. I think the next step for me is to use it to build a small site and see where the holes are cause I'm sure there are a lot of them.

###instructions on use
This section will be written once I conduct my initial test of building a small site with the boilerplate.