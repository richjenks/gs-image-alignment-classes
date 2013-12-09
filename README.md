# GS Image Alignment Classes

by [richjenks.com](http://richjenks.com)

CKEditor (the WYSIWYG content editor used by GetSimple) adds inline styles to aligned images in the form of the `float` CSS property. This prevents theme developers from adding custom styles to aligned images, such as margins to prevent text from being flat against (and list bullets from overlapping) the image.

Image Alignment Classes solves this problem by adding a class to aligned images — it searches for `img` elements then adds the class `img-left` and `img-right` to left- and right-aligned (floated) images, respectively.

## Requirements

- Theme must include jQuery
- Theme must use `get_footer()` template tag (for "theme-footer" hook)
- jQuery must be included before footer

## Installation

1. Move image-alignment-classes.php to your plugins folder
2. Enable the plugin in GS Admin

## Usage

This plugin exposes the CSS classes `img-left` and `img-right`. Example usage:

```css
.img-left,
.img-right {
    margin-bottom: 1em;
}

.img-left {
    margin-right: 1em;
}

.img-right {
    margin-left: 1em;
}
```

The CSS above solves the problem this plugin was created to solve (floated images do not have text flat against them) while allowing theme developers to add their own rules.

Contact me via [richjenks.com](http://richjenks.com) if you have any problems.