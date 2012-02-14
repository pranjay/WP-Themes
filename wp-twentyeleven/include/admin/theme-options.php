<?php

$theme_options = get_option('moongale_options');

/**
 * Define our settings sections
 *
 * array key=$id, array value=$title in: add_settings_section( $id, $title, $callback, $page );
 * @return array
 */
function moongale_options_page_sections() {
	
	$sections = array();
	// $sections[$id] 				= __($title, 'moongale');
	$sections['general_section'] 		= __('General', 'moongale');
	$sections['fonts_section'] = __('Fonts','moongale');
	$sections['slider_section'] 	= __('Slider', 'moongale');
	$sections['appearance_section'] 	= __('Appearance', 'moongale');
	$sections['google_section'] 	= __('Google Analytics', 'moongale');
	
	return $sections;	
}

/**
 * Define our form fields (settings) 
 *
 * @return array
 */
function moongale_options_page_fields() {
	// General Form Fields section
	
		$options[] = array(
		"section" => "general_section",
		"id"      => THEME_SHORTNAME . "_logo_img",
		"title"   => __( 'Choose Logo', 'moongale' ),
		"desc"    => __( 'Use the button to select a logo for your site. Once uploaded, click on "Insert into Post". Save changes to finish.', 'moongale' ),
		"type"    => "upload",
		"std"     => "",
		"class"	  => "url"
	);
	
	$options[] = array(
		"section" => "general_section",
		"id"      => THEME_SHORTNAME . "_nohtml_txt_input",
		"title"   => __( 'No HTML!', 'moongale' ),
		"desc"    => __( 'A text input field where no html input is allowed.', 'moongale' ),
		"type"    => "text",
		"std"     => __('Some default value','moongale'),
		"class"   => "nohtml"
	);
	
	$options[] = array(
		"section" => "general_section",
		"id"      => THEME_SHORTNAME . "_numeric_txt_input",
		"title"   => __( 'Numeric Input', 'moongale' ),
		"desc"    => __( 'A text input field where only numeric input is allowed.', 'moongale' ),
		"type"    => "text",
		"std"     => "123",
		"class"   => "numeric"
	);
	
	$options[] = array(
		"section" => "general_section",
		"id"      => THEME_SHORTNAME . "_multinumeric_txt_input",
		"title"   => __( 'Multinumeric Input', 'moongale' ),
		"desc"    => __( 'A text input field where only multible numeric input (i.e. comma separated numeric values) is allowed.', 'moongale' ),
		"type"    => "text",
		"std"     => "123,234,345",
		"class"   => "multinumeric"
	);
	
	$options[] = array(
		"section" => "general_section",
		"id"      => THEME_SHORTNAME . "_url_txt_input",
		"title"   => __( 'URL Input', 'moongale' ),
		"desc"    => __( 'A text input field which can be used for urls.', 'moongale' ),
		"type"    => "text",
		"std"     => "http://wp.tutsplus.com",
		"class"   => "url"
	);
	
	$options[] = array(
		"section" => "general_section",
		"id"      => THEME_SHORTNAME . "_email_txt_input",
		"title"   => __( 'Email Input', 'moongale' ),
		"desc"    => __( 'A text input field which can be used for email input.', 'moongale' ),
		"type"    => "text",
		"std"     => "email@email.com",
		"class"   => "email"
	);
	
	$options[] = array(
		"section" => "general_section",
		"id"      => THEME_SHORTNAME . "_multi_txt_input",
		"title"   => __( 'Multi-Text Inputs', 'moongale' ),
		"desc"    => __( 'A group of text input fields', 'moongale' ),
		"type"    => "multi-text",
		"choices" => array( __('Text input 1','moongale') . "|txt_input1", __('Text input 2','moongale') . "|txt_input2", __('Text input 3','moongale') . "|txt_input3", __('Text input 4','moongale') . "|txt_input4"),
		"std"     => ""
	);
	
	$options[] = array
	(
		"section" => "general_section",
		"title"   => __( '', 'moongale' ),
		"type"    => "submit"
	);
	
	// Fonts Section
	$font_options = moongale_getdefault_fonts();
	$font_size_options = moongale_getdefault_fontsizes();
	
	$options[] = array(
		"section" => "fonts_section",
		"id"      => THEME_SHORTNAME . "_is_googlefonts_enabled",
		"title"   => __( '', 'moongale' ),
		"desc"    => __( 'Enabling this options allows you to choose from 320+ different fonts available through Google. To see a preview of these fonts, head on over to <a href="http://www.google.com/webfonts" target="_blank">Google Web Fonts</a>.', 'moongale' ),
		"type"    => "checkupdate",
		"std"     => ""
	);
	
	
	$options[] = array(
		"section" => "fonts_section",
		"id"      => THEME_SHORTNAME . "_font_body",
		"title"   => __( 'Body Font', 'moongale' ),
		"desc"    => __( 'Choose a font for your website. This affects the main body text of your entire website.', 'moongale' ),
		"type"    => "fontoption",
		"std"     => "",
		"choices" => $font_options,
		"extrachoices" => $font_size_options,
		"extraid" => THEME_SHORTNAME . "_font_body_size"
	);
	
		$options[] = array(
		"section" => "fonts_section",
		"id"      => THEME_SHORTNAME . "_font_headings",
		"title"   => __( 'Headings Font', 'moongale' ),
		"desc"    => __( 'This font is applied to headings of your website - applied to h1, h2, h3, h4 and h5 tags', 'moongale' ),
		"type"    => "fontoption",
		"choices" => $font_options,
		"extrachoices" => $font_size_options,
		"extraid" => THEME_SHORTNAME . "_font_headings_size"
	);
	
	$options[] = array(
		"section" => "fonts_section",
		"title"   => "moongale",
		"type"    => "submit"
	);
	
	// END Fonts Section
	
	// Slider Form Fields Section
	$options[] = array(
		"section" => "slider_section",
		"id"      => THEME_SHORTNAME . "_txtarea_input",
		"title"   => __( 'Textarea - HTML OK!', 'moongale' ),
		"desc"    => __( 'A textarea for a block of text. HTML tags allowed!', 'moongale' ),
		"type"    => "textarea",
		"std"     => __('Some default value','moongale')
	);

	$options[] = array(
		"section" => "slider_section",
		"id"      => THEME_SHORTNAME . "_nohtml_txtarea_input",
		"title"   => __( 'No HTML!', 'moongale' ),
		"desc"    => __( 'A textarea for a block of text. No HTML!', 'moongale' ),
		"type"    => "textarea",
		"std"     => __('Some default value','moongale'),
		"class"   => "nohtml"
	);
	
	$options[] = array(
		"section" => "slider_section",
		"id"      => THEME_SHORTNAME . "_allowlinebreaks_txtarea_input",
		"title"   => __( 'No HTML! Line breaks OK!', 'moongale' ),
		"desc"    => __( 'No HTML! Line breaks allowed!', 'moongale' ),
		"type"    => "textarea",
		"std"     => __('Some default value','moongale'),
		"class"   => "allowlinebreaks"
	);

	$options[] = array(
		"section" => "slider_section",
		"id"      => THEME_SHORTNAME . "_inlinehtml_txtarea_input",
		"title"   => __( 'Some Inline HTML ONLY!', 'moongale' ),
		"desc"    => __( 'A textarea for a block of text. 
		Only some inline HTML 
		(&lt;a&gt;, &lt;b&gt;, &lt;em&gt;, &lt;strong&gt;, &lt;abbr&gt;, &lt;acronym&gt;, &lt;blockquote&gt;, &lt;cite&gt;, &lt;code&gt;, &lt;del&gt;, &lt;q&gt;, &lt;strike&gt;) 
		is allowed!', 'moongale' ),
		"type"    => "textarea",
		"std"     => __('Some default value','moongale'),
		"class"   => "inlinehtml"
	);	
	
	// Appearence Form Fields Section
	$options[] = array(
		"section" => "appearance_section",
		"id"      => THEME_SHORTNAME . "_select_input",
		"title"   => __( 'Select (type one)', 'moongale' ),
		"desc"    => __( 'A regular select form field', 'moongale' ),
		"type"    => "select",
		"std"    => "3",
		"choices" => array( "1", "2", "3")
	);
	
	$options[] = array(
		"section" => "appearance_section",
		"id"      => THEME_SHORTNAME . "_select2_input",
		"title"   => __( 'Select (type two)', 'moongale' ),
		"desc"    => __( 'A select field with a label for the option and a corresponding value.', 'moongale' ),
		"type"    => "select2",
		"std"    => "",
		"choices" => array( __('Option 1','moongale') . "|opt1", __('Option 2','moongale') . "|opt2", __('Option 3','moongale') . "|opt3", __('Option 4','moongale') . "|opt4")
	);
	
	// Google Analytics Form Fields Section
	$options[] = array(
		"section" => "google_section",
		"id"      => THEME_SHORTNAME . "_checkbox_input",
		"title"   => __( 'Checkbox', 'moongale' ),
		"desc"    => __( 'Some Description', 'moongale' ),
		"type"    => "checkbox",
		"std"     => 1 // 0 for off
	);
	
	$options[] = array(
		"section" => "google_section",
		"id"      => THEME_SHORTNAME . "_multicheckbox_inputs",
		"title"   => __( 'Multi-Checkbox', 'moongale' ),
		"desc"    => __( 'Some Description', 'moongale' ),
		"type"    => "multi-checkbox",
		"std"     => '',
		"choices" => array( __('Checkbox 1','moongale') . "|chckbx1", __('Checkbox 2','moongale') . "|chckbx2", __('Checkbox 3','moongale') . "|chckbx3", __('Checkbox 4','moongale') . "|chckbx4")	
	);
	
	return $options;	
}

/**
 * Contextual Help
 */
function moongale_options_page_contextual_help() 
{
	
	$text 	= "<h3>" . __('Wptuts Settings - Contextual Help','moongale') . "</h3>";
	$text 	.= "<p>" . __('Contextual help goes here. You may want to use different html elements to format your text as you want.','moongale') . "</p>";
	
	// must return text! NOT echo
	return $text;
} 


function moongale_option($option)
{
	$options = get_option( 'moongale_options' );
	
		if ( isset( $options[$option] ) )
			return $options[$option];
		else
			return false;
}


function moongale_getdefault_fonts()
{
	$fonts = array('Arial','Helvetica','Arial Black','Gadget','Comic Sans MS','Courier New','Courier','Georgia','Impact','Charcoal','Lucida Console','Monaco','Lucida Sans Unicode','Lucida Grande','Palatino Linotype','Book Antiqua'
					,'Palatino','Tahoma','Geneva','Times New Roman','Times','Trebuchet MS','Helvetica','Verdana','Symbol');
	
	sort($fonts);
	
	if (moongale_option( 'moongale_is_googlefonts_enabled' )) {
			$fonts = array_merge($fonts,moongale_getdefault_googlefonts());
	}
	
	return $fonts;
}

function moongale_getdefault_fontsizes()
{
	return array( "9px","10px","11px","12px","13px","14px","18px","24px","36px","48px" );
}

// Get a list of all Google Web Fonts
function moongale_getdefault_googlefonts()
{
	$google_webfonts = array('Abel','Abril+Fatface','Aclonica','Actor','Adamina','Aguafina+Script','Aladin','Aldrich','Alice','Alike','Alike+Angular','Allan:bold','Allerta','Allerta+Stencil','Amaranth','Amatic+SC','Andada','Andika','Annie+Use+Your+Telescope','Anonymous+Pro','Antic','Anton','Arapey','Architects+Daughter','Arimo','Artifika','Arvo','Asset','Astloch','Atomic+Age','Aubrey','Bangers','Bentham','Bevan','Bigshot+One','Bitter','Black+Ops+One','Bowlby+One','Bowlby+One+SC','Brawler','Bubblegum+Sans','Buda:light','Butcherman+Caps','Cabin','Cabin+Condensed','Cabin+Sketch','Cabin+Sketch:bold','Cabin:bold','Cagliostro','Calligraffitti','Candal','Cantarell','Cardo','Carme','Carter+One','Caudex','Cedarville+Cursive','Changa+One','Cherry+Cream+Soda','Chewy','Chicle','Chivo','Coda','Coda:800','Comfortaa','Coming+Soon','Contrail+One','Convergence','Cookie','Copse','Corben','Corben:bold','Cousine','Coustard','Covered+By+Your+Grace','Crafty+Girls','Creepster+Caps','Crimson','Crushed','Cuprum','Damion','Dancing+Script','Dawning+of+a+New+Day','Days+One','Delius','Delius+Swash+Caps','Delius+Unicase','Devonshire','Didact+Gothic','Dorsa','Dr+Sugiyama','Droid Sans','Droid Sans Mono','Droid Serif','EB+Garamond','Eater+Caps','Expletus+Sans','Fanwood+Text','Federant','Federo','Fjord+One','Fondamento','Fontdiner+Swanky','Forum','Francois+One','Gentium+Basic','Gentium+Book+Basic','Geo','Geostar','Geostar+Fill','Give+You+Glory','Gloria+Hallelujah','Goblin+One','Gochi+Hand','Goudy+Bookletter+1911','Gravitas+One','Gruppo','Hammersmith+One','Herr+Von+Muellerhoff','Holtwood+One+SC','Homemade+Apple','IM Fell','Iceland','Inconsolata','Indie+Flower','Irish+Growler','Istok+Web','Jockey+One','Josefin Sans Std Light','Josefin+Sans','Josefin+Slab','Judson','Julee','Jura','Just+Another+Hand','Just+Me+Again+Down+Here','Kameron','Kelly+Slab','Kenia','Knewave','Kranky','Kreon','Kristi','La+Belle+Aurore','Lancelot','Lato','League+Script','Leckerli+One','Lekton','Lemon','Limelight','Linden+Hill','Lobster','Lobster+Two','Lora','Love+Ya+Like+A+Sister','Loved+by+the+King','Luckiest+Guy','Maiden+Orange','Mako','Marck+Script','Marvel','Mate','Mate+SC','Maven+Pro','Meddon','MedievalSharp','Megrim','Merienda+One','Merriweather','Metrophobic','Michroma','Miltonian','Miltonian+Tattoo','Miss+Fajardose','Miss+Saint+Delafield','Modern+Antiqua','Molengo','Monofett','Monoton','Monsieur+La+Doulaise','Montez','Mountains+of+Christmas','Mr+Bedford','Mr+Dafoe','Mr+De+Haviland','Mrs+Sheppards','Muli','Neucha','Neuton','News+Cycle','Niconne','Nixie+One','Nobile','Nosifer+Caps','Nova+Round','Numans','Nunito','OFL Sorts Mill Goudy TT','OFL Standard TT','Orbitron','Oswald','Over+the+Rainbow','Ovo','PT Sans','PT Sans Narrow','PT+Serif','PT+Serif+Caption','Pacifico','Passero+One','Patrick+Hand','Paytone+One','Permanent+Marker','Petrona','Philosopher','Piedra','Pinyon+Script','Play','Playfair+Display','Podkova','Poller+One','Poly','Pompiere','Prata','Prociono','Puritan','Quattrocento','Quattrocento+Sans','Questrial','Quicksand','Radley','Raleway:100','Rammetto+One','Rancho','Rationale','Redressed','Reenie Beanie','Ribeye','Ribeye+Marrow','Righteous','Rochester','Rock+Salt','Rokkitt','Rosario','Ruslan+Display','Salsa','Sancreek','Sansita+One','Satisfy','Schoolbell','Shadows+Into+Light','Shanti','Short+Stack','Sigmar+One','Signika','Signika+Negative','Six+Caps','Slackey','Smokum','Smythe','Sniglet:800','Snippet','Sorts+Mill+Goudy','Special+Elite','Spinnaker','Spirax','Stardos+Stencil','Sue+Ellen+Francisco','Sunshiney','Supermercado+One','Swanky+and+Moo+Moo','Syncopate','Tangerine','Tenor+Sans','Terminal+Dosis','Terminal+Dosis+Light','The+Girl+Next+Door','Tienne','Tinos','Tulpen+One','Ubuntu','Ubuntu+Condensed','Ubuntu+Mono','Ultra','UnifrakturCook:bold','UnifrakturMaguntia','Unkempt','Unlock','Unna','VT323','Varela','Varela+Round','Vast+Shadow','Vibur','Vidaloka','Volkhov','Vollkorn','Voltaire','Waiting+for+the+Sunrise','Wallpoet','Walter+Turncoat','Wire+One','Yanone Kaffeesatz','Yellowtail','Yeseva+One','Zeyada');

	$google_webfonts = str_replace('+', ' ', $google_webfonts);
	sort($google_webfonts);
	
	return $google_webfonts;
}

// Get a list of all cufon fonts
function moongale_getdefault_cufonfonts()
{
	$cufon_fonts = 	array('Aubrey','Bebas','Blue Highway','Blue Highway D Type','Comfortaa','Diavlo Book','eurofurence','GeosansLight','Oregon LDO','Qlassik Medium','Sansation','Sniglet','Tertre Med','Waukegan LDO','Yorkville');
	return $cufon_fonts;
}


?>