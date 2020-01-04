### About ###

Mansion is a free photoblogger’s theme. It features a flexible-width thumbnail grid for both images and photo journal entries. Mansion is perfect for those who want to primarily showcase their photographs and occasionally write blog posts.

### Installation ###

1. Download the zip file from your [members dashboard](https://graphpaperpress.com/dashboard/). This will always be the most current version of the theme.
2. Log in to your WordPress dashboard. This can be found at yourdomain.com/wp-admin
3. Go to Appearance &gt; Themes and click on the *Install Themes* tab
4. Click on the *Upload* link
5. Upload the zip file that you downloaded from your members dashboard and click *Install Now*
6. Click *Activate* to use the theme you just installed.

![installing your Graph Paper Press theme](http://graphpaperpress.s3.amazonaws.com/images/instructions/install_themes.png)

For more details about installing your themes, please view [Installing Your Theme](http://graphpaperpress.com/support/installing-your-theme/)


### Demo content ###

Optional: You can download a demo content file [here](http://graphpaperpress-demo-content.s3.amazonaws.com/mansion.xml) that you can import in Tools > Import.


### Media Settings ###

You will want to change your media settings to ensure that your images are cropped to the correct sizes. You can do this in Settings &gt; Media. 

On this page, change your media settings to:

* Thumbnail size
	* Width: 200
	* Height: 150
	* [checked] Crop thumbnails to exact dimensions (normally thumbnails are proportional)
* Medium size
	* Max Width: 495
	* Max Height: 0
* Large size
	* Max Width: 950
	* Max Height: 0
* Embeds
	* [checked] When possible, embed the media content from a URL directly onto the page. For example: links to Flickr and YouTube.
	* Maximum embed size
		* Width: 495
		* Height: 0

*Please Note: If you are switching from another theme, you will want to install and run the [Regenerate Thumbnails](http://wordpress.org/extend/plugins/regenerate-thumbnails/) WordPress plugin to resize your existing images.*


### Theme Customizer ###

With the Theme Customizer, you can set your title and tagline, assign your menus, and choose a static home page. You can preview your changes by clicking the Customize link below your active theme on your Appearance &gt; Themes page.

*Please note: Setting a static home page will remove the default homepage layout built into the theme. You must keep this set to* Display Latest Posts *to display the homepage options.*


### Theme Options ###

Go to Appearance &gt; Theme Options to select a blog category and choose to display either your featured image or all of your posts's images on the homepage.


### Widgets ###

This theme supports widgetized areas. For more detail about adding widgets to your site, please read [Adding Widgets](http://graphpaperpress.com/support/using-widgets/).


### Menus ###

Our themes use WordPress’s custom menus option. These can be created in Appearance > Menus. To add a new menu to your site:

1. Go to Appearance > Menus.
2. Create a new menu item by clicking the + tab.
3. Select the pages you want to display in your menu and click the Add to Menu button. If you do not see the type of page (category, tag, portfolio, gallery, etc) you want to display, click the Screen Options link at the top of the page and make sure the page type is checked.
4. Once you have set your menu as you want it, click the Save Menu button.
5. Then, assign that menu to your desired theme location to ensure your menu appears where you want it and click Save.

![Add a Custom Menu](http://graphpaperpress.s3.amazonaws.com/images/instructions/custom_menu.jpg)


### Always Set Featured Images ###

This theme relies heavily on Featured Images. If your post is missing a Featured Image, the post may not appear on the homepage or on archive pages. 

To choose the image you want to set as a featured image for this post and click the *Set as Featured Image* button. For best results use images that are at least 200 px wide.

![Add a Featured Image](http://graphpaperpress.s3.amazonaws.com/images/instructions/featured_image.png)


### Page Templates ###

This theme provides two page templates: Default and Blog.

1. The Default page template is the standard page layout.
2. The Blog page template will display all of the posts in the category set as the blog category in your theme options on the page. You can determine how many posts will appear on each page before the 'Older Entries' link in Settings &gt; Reading, by setting a value for 'Blog Pages Display at Most'.


### Embed Multimedia into Posts or Pages ###

For externally hosted videos (for example a YouTube or Vimeo video), you can directly paste the link of your video page into the content editor. You do not have to paste the embed code. WordPress will automatically embed the video from the link.

You can easily embed videos from a Video hosting service such as Vimeo or YouTube into your posts or pages.

To add a video:

1. From your WordPress dashboard, add a new post or page (or edit an existing post or page).
2. Paste in your video’s URL, for example https://vimeo.com/31985752.
3. Publish or Update your post or page.

*Please note: If your video is not appearing correctly, remove the ‘s’ from the URL, so https becomes http.*


### Installation Troubleshooting ###
 
If you've performed a clean install of the theme and are still having issues, check the following recommendations:

* Ensure you are using the latest version of Mansion.
* Ensure your file permissions are set correctly. On most servers, the theme files permissions should be set to 644 and folders should be set to 755.
* Ensure your theme folder is named `mansion`, with no extra spaces, characters, or uppercase letters. Also ensure that there is not a second folder called `mansion` inside the first.
* Mansion uses jQuery for much of its functionality. If your theme appears broken or unresponsive, you likely have a JavaScript conflict with one of your plugins. Deactivate **all** of your plugins. If that resolves the issue, reactivate them one at a time until you find the one causing the conflict.

### Theme Internationalization ###

Mansion is currently only available in English. It contains a default.pot file which you can use to translate to any other language you want.  See [WordPress in Your Language](http://codex.wordpress.org/WordPress_in_Your_Language) for more information about translating your theme into another language.