=== Flat Blocks ===
Contributors: Tim Nicholson / XtremelySocial
Requires at least: 6.2
Tested up to: 6.2
Requires PHP: 7.4
Stable tag: 1.2.10
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Flat Blocks is a modern “flat” style theme with a nice color palette, full and wide width support, and support for the new “Full Site Editing” in WordPress.

== Quick Start Guide ==

= Menus = 

The first thing you'll want to do is go into the Site Editor and select the navigation menus you want for the header and the footer. Once you do, your old menus will be copied into the header and footer templates and stored there.

Note that if you are running the Gutenberg Plugin and have menus named "header" and "footer", they should be defaulted already. Otherwise, go into Appearance -> Customize -> Menus -> View All Locations and select them there. WordPress v6 doesn't have this functionality, so the menus must be selected manually in the Editor per above. 

= Header, Footer, and Blog Layouts = 

One of the cool things about this theme is that we provide numerous header, footer, and blog layouts (Query Loops). While you are in the Site Editor, check them out. Just be sure to replace the "Header Default" block not the main Header block. The same thing applies to the "Footer Default". For blog layouts, change the "Query Loop" block instead of the Query block.

Note that the theme is setup this way so that you can change the header, footer, and query layout across the entire site. If you change the actual Header, Footer, and Query blocks, you'll only be changing them on the Home Page that you are editing by default in the Site Editor.

= Site Home as Blog or Page = 

You can decide whether you want your site home to display your blog or any page on your site. This theme is designed to work well either way. If you have the blog as the home page, it uses the Index template ("index.html") and will have a cover image and title-and-text box at the top that you can edit.

If you have the home page set to a page, then the blog page uses the Home template ("home.html") which has just the standard header on it.

= Page and Block Patterns = 

This theme provides TONS of Block Patterns that you can insert into your pages and posts to quickly build out content. It also includes full Page Patterns that will pull in a whole series of Block Patterns to easily build a Home, About, Services, or Portfolio page. 

Note that Block and Page Patterns are copied into your page or post and unlike Block Templates above, edits you make to Block Patterns are stored only on that page or post.

= More Information About This Theme = 

For more information, see these pages on the XtremelySocial.com website:
* How to use our Block Themes: https://xtremelysocial.com/userguide/block-themes/
* Our Theme Block Styles: https://xtremelysocial.com/userguide/block-styles/
* Our Theme Block Patterns: https://xtremelysocial.com/userguide/block-patterns/

You can check out our other themes here: https://xtremelysocial.com/wordpress/

== Changelog ==

= 1.2.10 = 
July 11, 2023

* Added global theme style for auto dark mode! This is the second style right afer the default one. It will automatically change to a dark background with light text when the operating system gets set to dark mode. For example in Windows, iOS, etc.
* Added two new colors: Light Blue and Light Yellow. Updated the theme gradient colors to use them to provide a wider range of color. Also updated the Orange, Yellow, & Midnight Blue global theme style to use the new light yellow color. Updated the Yellow, Orange, & Midnight Blue global theme style to bold links in Post and Page content so they stand out more. 
* Refine CSS for images with hard-coded widths, mainly for the WordPress.org theme preview which uses older (non-block) markup.

= 1.2.9 = 
July 7, 2023

* Refine CSS for buttons to reduce unintentional styling of buttons in 3rd-party plugins.
* Refine CSS for images with hard-coded widths to reduce the chance of breaking the page layout. 
* Update minimum PHP required to v7.4, which is the minimum that WordPress itself recommends. Note that PHP v8.1 is preferred, but this theme doesn't require anything beyond what WordPress itself does.

= 1.2.8 = 
July 5, 2023

* Adjust logic for blog on home page so that it shows the extra "Content Top" Template Part only on the first page.
* Remove large padding in all Header Template Parts, so now defaults to Small spacing.
* Along with Header padding changes, remove Header Compact since its no longer any different than Header Default.
* Add template parts for footer block 1, block 2, and about block. Update the footer templates that use them. This way when the component blocks are edited, the updates will be reflected in all the footer templates that use them.
* In conjunction with adding the footer blocks, revise the CSS for vertical margin on template parts.
* Only display Post Comment Count on blog if Gutenberg plugin is enabled. This Block isn't part of standard WordPress. This was done with a new hidden pattern (hidden-post-date.php).
* Adjust font-size on Site Map page template to match the others ("larger" font size).
* For global theme style with drop-shadow buttons and link underlines, remove underline from nav menus
* Set Post/Page Excerpt length to 25 words if used in Post Title or Page Title Template Part. However, it still uses the default 55 words on the blog. 

= 1.2.7 = 
June 30, 2023

* Clean up CSS for input fields and buttons
* Updated readme.txt to discuss setting the blog or a page as the site home page.

= 1.2.6 = 
June 28, 2023

* Update icon color to be white for social media icon patterns, both 3-column and 4-column. This looks better on all colored-backgrounds.
* To better support user's older post and page content and older plubins, added CSS to style non-block buttons, forms, and input fields to better match the block-based ones styled in theme.json.
* For Comments template part, keep avatar and user name on the same line (don't collapse on mobile)
* Added bottom padding on sidebar
* Add filter for child themes to be able to specify whether to remove core WordPress block patterns or not. The filter name is 'flatblocks_remove_core_patterns'. The default is true.

= 1.2.5 = 
June 27, 2023

* Fix issue with CSS for images with hard-coded dimensions

= 1.2.4 = 
June 26, 2023

* Update theme screenshot to show primary, secondary, and tertiary color for a better theme preview on WordPress.org.
* Update the CSS for images to prevent older block editor markup that uses wp-block-caption from breaking the layout. 

= 1.2.3 = 
June 26, 2023

* Fix font color on post meta box when using dark theme style.
* Darken link color on Purple global theme style.
* Change Title and Text block pattern to have secondary background color so its different than the cover image which uses the primary color.
* Fix WordPress bug where columns block doesn't have gap in the Block Editor.
* Added feature to functions.php to load child theme's /assets/css/custom-styles.css file if it exists.

= 1.2.2 = 
June 23, 2023

* Updates for more accurate theme previews on WordPress.org Theme Directory:
	* Remove bottom margin on columns block
	* On blog, put date and comment count on the same line to take up less space
	* Renumbered global theme styles so more colorful options are at the beginning.
* When Gutenburg plugin active, allow user to set various menus in the Customizer. This is an easy way to assign menus without having to edit the menu Template Parts themselves.
* Cleaned up some CSS for the included Dashicon font icons, image block top margins, featured image top margin, post content bottom margin, heading bottom margin, post title line height, and image captions on dark backgrounds.
* Change font color to foreground-alt on pricing tables and social icons to look better on theme styles with dark backgrounds.

= 1.2.1 =
June 21, 2023

* Updates for inclusion in the WordPress.org Theme Directory:
	* Added content to the top of the front (home) page for when the user has it set to display the blog. So added a template part for Content Page Top and a Front Page template in PHP to conditionally load it when appropriate. Also added Home template for the blog when static page is set to the front page.
	* Modified Page Home template and pattern to match the new front page template.
	* Updated the screenshot to match the new front page template.
* Updated entry content bottom margin to be on the last block so that user can override it by setting margin-bottom to 0.
* Added spacing around Team block patterns (both 3 column and 4 column).
* Changed custom page templates Page Featured Image and Page Featured Cover to allow full width.
* Removed CSS classes on <main> to denote template file since WordPress already puts this on the <body> tag.
* Fixed issue with images not having top margin according to the overall vertical spacing.
* Added post date and author fields to Post Meta, specifically so post templates without title will show this information.
* Changed template part name for default query to query-loop-2-columns to better denote which layout it is. 


= 1.2 =
June 8, 2023

Updates for WordPress v6.2:
* Updated the theme to use core WordPress v6.2 default, wide, and full width handling (useRootPaddingAwareAlignments). Set the overall layout to have left and right padding (preset spacing 50 which is responsive from small to large).
* In conjunction with the above, updated all templates to use the new "layout":{"type":"constrained"} versus the old "layout":{"inherit":true}. This is important for properly handling full and wide with layouts.
* Added more preset responsive spacing sizes and renamed them to match core WordPress v6.2.
* Fixes for various block patterns for WordPress v6.2: all the cover images, the button in the 2-column call-to-action, and the large social media icons.
* Added new pattern for Call to Action Rounded. This is a wide-with group with colored background and rounded borders.
* Added new pattern for Testimonial. This is a full-wide colored group with profile pic, quote, and the person's name.
* Cleaned up Quote styling, such as vertical space above the quote author (cite).
* Remove bold font files (weight 700) as we use weights 300, 400, and 500 only. This reduces the overall size of the theme.
* Updated the various theme styles that specify fonts to set it at the heading level now that WordPress v6.2 supports that. Previously we had to specify each individual h1, h2, h3, etc.
* Reduced the number of custom group styles to only the ones used directly in the theme templates, template parts, and patterns. In WordPress v6.2 its very easy for users to choose preset spacing for padding and margin, so fewer group styles related to those are needed.
* Added a new header menu dark template part and set header dark and header dark fixed to use it. This way those header menus will have a dark background to match the header background itself.
* Added link and hover color to the Site Title in theme.json (core/site-title) now that it doesn't default from the overall theme link and hover colors.
* Added button hover color to theme.json and removed the css from flat-blocks.css.
* Add Bullet style to latest posts and latest comments blocks since default is now plain (no bullets).
* Remove extra padding on sub-menus that have colored backgrounds.
* Remove custom border thin, normal, thick, and style and replace with hard-coded values. custom-border-color and custom-border-radius are still in place and used in the theme CSS
* Fix rounded image styles when global image style has a border radius.
* Add border to rounded profile pic (avatar) on testimonials pattern.
* Fix for center align on images now that WordPress uses the figure tag.
* Set Outline button padding to match regular buttons factoring in the outline button border width.
* Style the file download and search buttons to match other buttons
* Better support for users turning on link underlining. Added several blocks to theme.json to not display link underlines, such as Lists, Latest Posts, Latest Comments, etc. because it was just TOO much underlining.
* Added more image duotones. Turned off default WordPress duotones as the colors clash.
* Added more gradient colors.
* Add new custom variable to theme.json to control button drop-shadow (--wp--custom--button--shadow).
* Add new custom variable to theme.json for focus outline color (--wp--custom--outline--color).
* Set border radius on input fields, including text areas.
* Set outline (focus) to gray drop-shadow instead of the browser defaults.
* Inherit text color on colored backgrounds for when user defaults headings to a color.
* Added new global theme style for button drop-shadow and link underlines.
* Changed default theme style tertiary color to orange.
* Added light purple to the color palette and changed the purple theme style to use that one.
* Updated the global theme styles to have duotones that match each style's color scheme.

= 1.1 =
April 14, 2023

Updates for WordPress v6.1:
* Preset spacing sliders for padding and margins. These are based on the site gap (18px by default but can be overriden in the Global Styles Editor).
* Implemented the new more flexible WordPress comment blocks

= 1.0 =
March 10, 2023

Initial theme version

== Copyright ==

Flat Blocks WordPress Theme, (C) 2023 Tim Nicholson / XtremelySocial
Flat Blocks is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

This theme bundles the following third-party resources:

Lato font
Copyright (c) 2010-2014 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato"
This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at:
http://scripts.sil.org/OFL

Lora font
Copyright 2011 The Lora Project Authors (https://github.com/cyrealtype/Lora-Cyrillic), with Reserved Font Name "Lora".
This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at:
http://scripts.sil.org/OFL

Nunito font
Copyright 2014 The Nunito Project Authors (https://github.com/googlefonts/nunito)
This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at:
http://scripts.sil.org/OFL

Playfair Display font
Copyright 2017 The Playfair Display Project Authors (https://github.com/clauseggers/Playfair-Display), with Reserved Font Name "Playfair Display"
This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at:
http://scripts.sil.org/OFL

Raleway font
Copyright 2010 The Raleway Project Authors (impallari@gmail.com), with Reserved Font Name "Raleway".
This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at:
http://scripts.sil.org/OFL

Roboto font
Copyright Christian Robertson
This font is licensed under the Apache License, Version 2.0.
You can use them in your products & projects – print or digital, commercial or otherwise.

Source Sans Pro font
Copyright 2010, 2012, 2014 Adobe Systems Incorporated (http://www.adobe.com/), with Reserved Font Name ‘Source’.
This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at:
http://scripts.sil.org/OFL

Source Serif Pro font
Copyright 2014 - 2021 Adobe Systems Incorporated (http://www.adobe.com/), with Reserved Font Name 'Source'. All Rights Reserved. Source is a trademark of Adobe Systems Incorporated in the United States and/or other countries.
This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is available with a FAQ at: http://scripts.sil.org/OFL

Style Script font
Copyright 2013 The Style Script Project Authors (https://github.com/googlefonts/style-script)
This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

Block Pattern Images:
All images from https://pexels.com licensed under the GPL, including modifications made for Flat Blocks to adjust image sizes.