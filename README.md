# nCSS
[![Build](https://github.com/lime360/ncss/actions/workflows/build.yml/badge.svg)](https://github.com/lime360/ncss/actions/workflows/build.yml) [![Install directly with Stylus](https://img.shields.io/badge/Install%20directly%20with-Stylus-00adad.svg)](https://raw.githubusercontent.com/lime360/ncss/main/n.user.css)

[Neocities](https://neocities.org) default styling as a classless CSS stylesheet.

## Building
These is a SASS version at `n.scss`, it's basically the same thing as the original CSS, but with additional variables to customize your stylesheet.

Simply install SASS and run `npm run build` to generate minified CSS in the `dist/` folder.

## Hosting the build server
The build server is a single PHP file that requires and external source for the regular CSS (you can use any filehost you want, but I personally prefer hosting it on GitHub or any other Git hosting service) and the minified one in the root directory.

You must also upload either `.htaccess` for Apache or `nginx.conf` for nginx to the root, or else the server won't work properly.