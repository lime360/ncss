# nCSS
[Neocities](https://neocities.org) default styling as a classless CSS stylesheet.

## Installation
```html
<!-- In an HTML <link> tag -->
<link rel="stylesheet" href="https://raw.githubusercontent.com/lime360/ncss/main/n.css">
<!-- In a stylesheet -->
<style>
@import "https://raw.githubusercontent.com/lime360/ncss/main/n.css";
</style>
```

You can also place `n.css` in your site!

## Building
These is a SASS version at `n.scss`, but it's basically the same thing as the original CSS, but with additional variables to customize your stylesheet.

Simply install SASS and run `npm run build` to generate minified CSS in the `dist/` folder.