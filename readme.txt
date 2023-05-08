=== Flat Blocks ===
Contributors: Tim Nicholson / XtremelySocial
Requires at least: 6.2
Tested up to: 6.2
Requires PHP: 5.7
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Flat Blocks is a modern “flat” style theme with a nice color palette, full and wide width support, and support for the new “Full Site Editing” in WordPress.

== Quick Start Guide ==

= Menus = 

The first thing you'll want to do is go into the Site Editor and select the navigation menus you want for the header and the footer. Once you do your old menus will be copied into the header and footer templates and stored there.

Note that if you are running the Gutenberg and have menus named "header" and "footer", they will be defaulted already. WordPress v6.0 core doesn't have this functionality so the menus must be selected manually. 

= Header, Footer, and Blog Layouts = 

One of the cool things about this theme is that we provide numerous header, footer, and blog layouts (Query Loops). While you are in the Site Editor, check them out. Just be sure to replace the "Header Default" block not the main Header block. The same thing applies to the "Footer Default". For blog layouts, change the "Query Loop" block instead of the Query block.

Note that the theme is setup this way so that you can change the header, footer, and query layout across the entire site. If you change the actual Header, Footer, and Query blocks, you'll only be changing them on the Home Page that you are editing by default in the Site Editor.

= Page and Block Patterns = 

This theme provides TONS of Block Patterns that you can insert into your pages and posts to quickly build out content. It also includes full Page Patterns that will pull in a whole series of Block Patterns to easily build a Home, About, Services, or Portfolio page. 

Note that Block and Page Patterns are copied into your page or post and unlike Block Templates above, edits you make to Block Patterns are stored only on that page or post.

= More Information About This Theme = 

For more information, see these pages on the XtremelySocial.com website:
* How to use our Block Theme: https://xtremelysocial.com/userguide/block-themes/
* Our Theme Block Patterns: https://xtremelysocial.com/userguide/block-patterns/

You can check out our other themes here: https://xtremelysocial.com/wordpress/

== Changelog ==

= 1.2 =
May 7, 2023

Updates for WordPress v6.2:
* Updated the theme to use core WordPress v6.2 default, wide, and full width handling (useRootPaddingAwareAlignments). Set the overall layout to have left and right padding (preset spacing 52 which is responsive from small to large).
* In conjunction with the above, updated all templates to use the new "layout":{"type":"constrained"} versus the old "layout":{"inherit":true}. This is important for properly handling full and wide with layouts.
* Added more preset spacing sizes and renamed them to match core WordPress v6.2. 
* Fixes for various block patterns for WordPress v6.2: all the cover images, the button in the 2-column call-to-action, and the large social media icons.
* Added new pattern for Call to Action Rounded. This is a wide-with group with colored background and rounded borders.
* Added new pattern for Testimonial. This is a full-wide colored group with profile pic, quote, and the person's name.
* Cleaned up Quote styling, such as vertical space above the quote author (cite).
* Remove bold font files (weight 700) as we use weights 300, 400, and 500 only. This reduces the overall size of the theme.
* Updated the various theme styles that specify fonts to set it at the heading level now that WordPress v6.2 supports that. Previously we had specify each individual h1, h2, h3, etc.
* Reduced the number of custom group styles to only the ones used directly in the theme templates, template parts, and patterns. In WordPress v6.2 its very easy for users to choose preset spacing for padding and margin, so fewer group styles related to those are needed.
* Added a new header menu dark template part and set header dark and header dark fixed to use it. This way those header menus will have a dark background to match the header background itself.
* Added link and hover color to the Site Title in theme.json (core/site-title) now that it doesn't default from the overall theme link and hover colors.
* Added button hover color to theme.json and removed the css from flat-blocks.css.
* Add Bullet style to latest posts and latest comments blocks since default is now plain (no bullets).
* Remove extra padding on sub-menus that have colored backgrounds.
* Fix for center align on images now that WordPress uses the figure tag.

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