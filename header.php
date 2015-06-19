<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Last Edition
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "MusicGroup",
    "@id": "https://musicbrainz.org/artist/ac12e562-2e59-4e9b-b71f-a516ff42645a",
    "name": "Last Edition",
    "sameAs": "http://www.last-edition.co.uk",
    "foundingLocation": {
        "@type": "City",
        "name": "Leicester"
    },
    "member": [
      {
        "@type": "OrganizationRole",
        "member": {
          "@type": "Person",
          "name": "Matt Williamson"
        },
        "startDate": "2007",
        "roleName": ["guitar", "lead vocals"]
      },
      {
        "@type": "OrganizationRole",
        "member": {
          "@type": "Person",
          "name": "Sam Sharpe"
        },
        "startDate": "2009",
        "roleName": ["bass guitar", "vocals"]
      },
      {
        "@type": "OrganizationRole",
        "member": {
          "@type": "Person",
          "name": "Sam Topley"
        },
        "startDate": "2007",
        "roleName": "saxophone"
      },
      {
        "@type": "OrganizationRole",
        "member": {
          "@type": "Person",
          "name": "Arron Watson"
        },
        "startDate": "2012",
        "roleName": ["drums", "vocals"]
      }
    ]
}
</script>

<header id="masthead" class="site-header" role="banner">

	<div id="header-logo" class="logo" itemscope itemtype="http://schema.org/musicGroup">

		<a itemprop="url" href="/" rel="home" >

			<img itemprop="logo" src="<?php echo get_template_directory_uri() .'/images/last-edition-logo-white.svg'; ?>" id="mainlogo" alt="West London Community College Logo" />

		</a>

	</div>

	<a href="#" class="toggle-nav">Menu</a>

	<nav id="site-navigation" class="main-navigation" role="navigation">

		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

	</nav>

</header>