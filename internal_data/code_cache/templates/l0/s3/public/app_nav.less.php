<?php
// FROM HASH: 0bbfdc69a7a5f3ce2613e212c9ea600b
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// navEl / Navigation Elements for header navigation

.p-navEl
{
	.m-clearFix();
	display: inline-flex;
	align-items: center;
}

.p-navEl-linkHolder
{
	float: left;
}

.p-navEl-link
{
	float: left;
	// .m-transition(opacity, background; @_nav-elTransitionSpeed);
	text-decoration: none !important;
	max-height: 100%;

	&.p-navEl-link--menuTrigger
	{
		cursor: pointer;

		&:after
		{
			.m-menuGadget(); // .58em
			opacity: .5;
			.m-transition(opacity; @_nav-elTransitionSpeed);
		}

		&:hover:after
		{
			opacity: 1;
		}
	}
}

.p-navEl-splitTrigger
{
	float: left;
	opacity: .5;
	cursor: pointer;
	text-decoration: none;
	.m-transition(all; @_nav-elTransitionSpeed);

	&:after
	{
		.m-menuGadget(); // .58em
		line-height: 1;
	}

	&:hover
	{
		opacity: 1;
		text-decoration: none;
	}
}

// HEADER NAV ROW

.p-nav
{
	.xf-publicNav();
	';
	if ($__templater->func('property', array('uix_pageStyle', ), false) == 'fixed') {
		$__finalCompiled .= '
		.m-pageWidth();
	';
	}
	$__finalCompiled .= '

	transition: ease-in .15s all;

	a:not(.button)
	{
		color: inherit;
	}

	.p-navSticky.is-sticky &
	{
		.p-nav-list .p-navEl.is-selected,
		.p-account
		{
			border-radius: 0;
		}
	}
}

a.uix_logo {
	text-decoration: none;
}

.p-nav-inner
{

	';
	if ($__templater->func('property', array('uix_pageStyle', ), false) == 'covered') {
		$__finalCompiled .= '
		.m-pageWidth();
                .m-pageInset(0px);
	';
	}
	$__finalCompiled .= '
	position: relative;
	';
	if ($__templater->func('property', array('uix_navigationBarHeight', ), false)) {
		$__finalCompiled .= '
		height: @xf-uix_navigationBarHeight;
	';
	}
	$__finalCompiled .= '

	.p-header-logo {
		display: inline-flex;
		align-items: center;
		margin-right: @xf-paddingLarge;
		
		.uix_logo {
			display: flex;
		}

		&.p-header-logo--image img {
			max-height: calc(@xf-uix_navigationBarHeight - (@xf-uix_navLogoVertSpacing * 2));

			.is-sticky & {
				max-height: calc(@xf-uix_stickyNavHeight - (@xf-uix_navLogoVertSpacing * 2));
			}
		}
	}

	.m-clearFix();
	display: flex;
	align-items: center;
}

.p-nav .uix_activeNavTitle {
	.xf-uix_activeNavTitleStyle();
	display: none;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;

	@media (max-width: @xf-publicNavCollapseWidth) and (min-width: @xf-responsiveNarrow) {
		display: inline-block;
	}
}

.p-nav .p-nav-menuTrigger
{
	display: none;
	vertical-align: middle;
	align-self: center;
	// margin-left: max(0px, @xf-pageEdgeSpacer - 6px);
	margin-right: 5px;

	color: inherit;
	padding: 0 8px;

	&:hover
	{
		text-decoration: none;
		cursor: pointer;
	}

	i:after
	{
		.m-faBase();
		font-size: @xf-fontSizeLargest;
		.m-faContent(@fa-var-bars);
		vertical-align: bottom;
		font-size: @xf-uix_iconSizeLarge;
	}

	.p-nav-menuText
	{
		display: none;
	}
}
';
	if ($__templater->func('property', array('uix_logoSmall', ), false)) {
		$__finalCompiled .= '
.uix_logoSmall
{
	';
		if ($__templater->func('property', array('uix_brandmarkImage__breakpoint', ), false) != '100%') {
			$__finalCompiled .= '
		display: none;
	';
		}
		$__finalCompiled .= '
	// max-width: 100px;
	align-self: center;

	img
	{
		display: block;
		max-height: @header-navHeight;

		&:not([src$=".svg"])
		{
			width: auto;
		}
	}
}

';
		if ($__templater->func('property', array('uix_brandmarkImage__breakpoint', ), false) == '100%') {
			$__finalCompiled .= '
	.p-header-logo.p-header-logo--image .uix_logo {display: none;}
';
		}
		$__finalCompiled .= '

@media (max-width: (@xf-uix_brandmarkImage__breakpoint - 1px)) {
	.uix_logoSmall {display: inline-block;}
	.p-header-logo.p-header-logo--image .uix_logo {display: none;}
}
';
	}
	$__finalCompiled .= '

.uix_logo--text {
	display: flex;
	align-items: center;
	white-space: nowrap;
	.xf-uix_logoText__style();
	
	&:hover {
		text-decoration: none;
	}
}

';
	if ($__templater->func('property', array('uix_logoTextBreakpoint', ), false)) {
		$__finalCompiled .= '
@media (max-width: @xf-uix_logoTextBreakpoint) {
	.uix_logo--text {font-size: @xf-uix_responsiveLogoFontSize;}
}
';
	}
	$__finalCompiled .= '

.p-nav-scroller
{
	margin-right: auto;
	max-width: 100%;

	.hScroller-scroll:not(.is-calculated)
	{
		// IE11 seems to want to flash a vertical scrollbar without this here
		overflow: hidden;
	}

	.hScroller-action
	{
		.m-hScrollerActionColorVariation(
			xf-default(@xf-publicNav--background-color, transparent),
			xf-default(@xf-publicNav--color, ~""),
			xf-intensify(@xf-publicNav--color, 10%)
		);
	}
}

.p-nav-list
{
	.m-listPlain();
	.m-clearFix();
	display: flex;
	align-items: center;

	font-size: 0;

	// this applies padding that will be contained within the scroller.
	// it needs font-size 0 to not create extra space though
	/*
	&:before,
	&:after
	{
		display: inline-block;
		width: @xf-pageEdgeSpacer;
		content: \'\';
	}
	*/

	> li
	{
		display: inline-block;
		vertical-align: bottom;
		font-size: @xf-fontSizeNormal;

		&:first-child
		{
			margin-left: 0;
		}
	}

	.badgeContainer:after {margin-left: 4px;}

	.m-navElHPadding(@xf-publicNavPaddingH);

	.p-navEl
	{
		.xf-publicNavTab();
		.m-transition(all; @_nav-elTransitionSpeed);

		&.is-selected
		{
			.xf-publicNavSelected();

			.p-navEl-link
			{

				';
	if ($__templater->func('property', array('uix_viewportWidthRemoveSubNav', ), false) != '100%') {
		$__finalCompiled .= '
				@media (min-width: (@xf-uix_viewportWidthRemoveSubNav + 1px) ) {
					padding-right: @xf-publicNavPaddingH; // since the split trigger is hidden
				}
				';
	}
	$__finalCompiled .= '

				&:hover
				{
					background: none;
					text-decoration: none;
					color: inherit;
				}
			}

			.p-navEl-splitTrigger
			{
				';
	if ($__templater->func('property', array('uix_viewportWidthRemoveSubNav', ), false) != '100%') {
		$__finalCompiled .= '
					@media (min-width: (@xf-uix_viewportWidthRemoveSubNav + 1px) ) {
						display: none;
					}
				';
	}
	$__finalCompiled .= '
			}
		}

		&:not(.is-selected):not(.is-menuOpen)
		{
			&:hover,
			// .p-navEl-link:hover,
			// .p-navEl-splitTrigger:hover
			{
				.xf-publicNavTabHover();
			}

			.p-navEl-link:hover,
			.p-navEl-splitTrigger:hover {
				text-decoration: none;
				color: inherit;
			}
		}

		&.is-menuOpen
		{
			.xf-publicNavTabMenuOpen();
			border-top-left-radius: xf-default(@xf-publicNavSelected--border-top-left-radius, 0);
			border-top-right-radius: xf-default(@xf-publicNavSelected--border-top-right-radius, 0);
			// .m-dropShadow(0, 5px, 10px, 0, .35);
			a
			{
				// text-decoration: none;
				// opacity: 1;
			}
		}

	}

	.p-navEl-link,
	.p-navEl-splitTrigger
	{
		padding-top: @xf-publicNavPaddingV;
		padding-bottom: @xf-publicNavPaddingV;
		display: inline-flex;
		align-items: center;

		&:hover {background: none !important;}
	}
}

.p-navSticky--primary.is-sticky
{
	.p-nav-list
	{
		.p-navEl-link.p-navEl-link--splitMenu
		{
			padding-right: ((@xf-publicNavPaddingH) / 4);
		}

		.p-navEl.is-selected .p-navEl-splitTrigger
		{
			display: inline;
			position: relative;

			&:before
			{
				content: \'\';
				position: absolute;
				left: 0;
				top: 5px;
				bottom: 5px;
				width: 0;
				border-left: @xf-borderSize solid fade(xf-default(@xf-publicNavSelected--color, transparent), 35%);
			}
		}
	}
}

@media (max-width: @xf-publicNavCollapseWidth)
{
	.has-js
	{
		.p-nav-inner
		{
			// min-height: 45px;
		}
		.p-nav .p-nav-menuTrigger
		{
			display: inline-flex;
		}
		.p-sectionLinks .p-sectionLinks--group {
			display: none;
		}
		.p-nav-scroller
		{
			display: none;
		}
	}
}

// ACCOUNT/VISITOR/SEARCH SECTION

.p-nav-opposite
{
	margin-left: auto;
	// margin-right: @xf-pageEdgeSpacer;
	text-align: right;
	flex-shrink: 0;
	display: inline-flex;
	align-items: center;
}

.p-navgroup
{
	float: left;
	.m-clearFix();
	// background: @xf-publicHeaderAdjustColor;
	border-top-left-radius: @xf-borderRadiusMedium;
	border-top-right-radius: @xf-borderRadiusMedium;
	display: inline-flex;

	&.p-discovery
	{
		// margin-left: .5em;

		&.p-discovery--noSearch
		{
			margin-left: 0;
		}
		// i {line-height: 1;}

	}

	.p-navgroup-linkText {
		padding-left: @xf-paddingSmall;
		
		&:empty {display: none;}
	}
}

';
	if ($__templater->func('property', array('uix_removeVisitorTabsText', ), false)) {
		$__finalCompiled .= '
@media (max-width: @xf-uix_viewportRemoveVisitorTabsText) {
	.p-navgroup.p-navgroup--member .p-navgroup-linkText, .p-discovery .p-navgroup-linkText {display: none;}
	
	.p-navgroup.p-navgroup--member .p-navgroup-link i,
	.p-navgroup.p-discovery .p-navgroup-link i {
		&:after, &:before {
			font-size: @xf-uix_iconSizeLarge;
		}
	}
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('uix_removeRegisterText', ), false)) {
		$__finalCompiled .= '
@media (max-width: @xf-uix_viewportRemoveRegisterText) {
	.p-navgroup--guest .p-navgroup-linkText {display: none;}
	
	.p-navgroup.p-navgroup--guest .p-navgroup-link i {
		&:after, &:before {
			font-size: @xf-uix_iconSizeLarge;
		}
	}	
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('uix_condenseVisitorTabs', ), false)) {
		$__finalCompiled .= '
@media (max-width: @xf-uix_viewportCondenseVisitorTabs) {
	.p-account.p-navgroup--member {
		.p-navgroup-link--conversations {display: none;}
		.p-navgroup-link--alerts {display: none;}
	}
}
';
	}
	$__finalCompiled .= '

.p-navgroup-link
{
	float: left;
	padding: (@xf-publicNavPaddingV / 2);
	// border-left: 1px solid @xf-publicHeaderAdjustColor;
	display: inline-flex;
	align-items: center;

	';
	if ($__templater->func('property', array('uix_removeVisitorTabsText', ), false)) {
		$__finalCompiled .= '
	@media (max-width: @xf-uix_viewportRemoveVisitorTabsText) {
		padding: @xf-paddingSmall calc(@xf-paddingSmall * 2);
	}
	';
	}
	$__finalCompiled .= '

	&:first-of-type
	{
		border-top-left-radius: @xf-borderRadiusMedium;
		border-left: none;
	}

	&:last-of-type
	{
		border-top-right-radius: @xf-borderRadiusMedium;
	}

	&:hover
	{
		text-decoration: none;
		// background: xf-intensify(@xf-publicHeaderAdjustColor, 5%);
	}

	&.p-navgroup-link--user
	{
		.m-overflowEllipsis();
		max-width: 150px;

		.p-navgroup-linkText {
			text-overflow: ellipsis;
			overflow: hidden;
		}

		.avatar
		{
			// .m-avatarSize((@xf-fontSizeNormal) * (@xf-lineHeightDefault));
			.m-avatarSize(@xf-uix_iconSizeLarge);
			margin: 1px 0;
			flex-shrink: 0;

			@media (min-width: @xf-uix_removeVisitorTabsText) {
				.m-avatarSize(@xf-uix_iconSize);
				font-size: 11px;
			}
		}
	}

	&.badgeContainer
	{
		// opacity: .6;
		position: relative;

		&:after
		{
			position: absolute;
			// left: (@_navAccount-hPadding - 6px);
			// top: (@xf-publicNavPaddingV - 2px);
			right: 2px;
			top: 3px;
			padding: 1px 3px;
			margin: 0;
			font-size: 10px;
			line-height: 11px;
		}

		&:hover,
		&.badgeContainer--highlighted
		{
			// opacity: 1;
		}
	}

	&.is-menuOpen
	{
		.xf-publicNavTabMenuOpen();
		// .m-dropShadow(0, 5px, 10px, 0, .35);
		opacity: 1;
	}

	/*
	&.p-navgroup-link--iconic
	{
		i:after
		{
			.m-faBase();
			display: inline-block;
			min-width: 1.2em;
			text-align: center;
		}
	}
	*/

	&.p-navgroup-link--conversations
	{
		i:after
		{
			.m-faBase();
			display: inline-block;
			min-width: 1em;
			.m-faContent(@fa-var-envelope, 1em);
		}
	}

	&.p-navgroup-link--alerts
	{
		i:after
		{
			.m-faBase();
			display: inline-block;
			min-width: 1em;
			.m-faContent(@fa-var-bell, 1em);
		}
	}

	&.p-navgroup-link--bookmarks i:after
	{
		.m-faContent(@fa-var-bookmark); //, .75em
	}

	&.p-navgroup-link--whatsnew i:after
	{
		.m-faBase();
		.m-faContent(@fa-var-bolt, .5em);
		width: auto;
	}

	&.p-navgroup-link--search i:after
	{
		.m-faBase();
		.m-faContent(@fa-var-search);
	}

	&.p-navgroup-link--logIn
	{
		i:after
		{
			.m-faBase();
			display: inline-block;
			min-width: 1em;
			.m-faContent(@fa-var-key);
		}
	}

	&.p-navgroup-link--register
	{
		i:after
		{
			.m-faBase();
			display: inline-block;
			min-width: 1em;
			.m-faContent(@fa-var-clipboard);
		}
	}
}

.p-navgroup-link--whatsnew
{
	display: none;

	.p-navgroup-link:first-of-type& + .p-navgroup-link
	{
		border-top-left-radius: @xf-borderRadiusMedium;
		border-left: none;
	}
}

';
	if ($__templater->func('property', array('uix_visitorTabsMobile', ), false) != 'initial') {
		$__finalCompiled .= '
	@media (max-width: @xf-responsiveNarrow) {
		.p-navgroup.p-account {
			.p-navgroup-link--user {display: none;}
			.p-navgroup-link--conversations {display: none;}
			.p-navgroup-link--alerts {display: none;}
		}
		';
		if ($__templater->func('property', array('uix_visitorTabsMobile', ), false) == 'tabbar') {
			$__finalCompiled .= '
			.p-navgroup.p-discovery {
				.p-navgroup-link--whatsnew {display: none;}
			}
		';
		}
		$__finalCompiled .= '
	}
';
	}
	$__finalCompiled .= '

@media (max-width: @xf-responsiveWide)
{
	/*
	.p-navgroup-link
	{
		&.p-navgroup-link--iconic .p-navgroup-linkText,
		&.p-navgroup-link--textual i
		{
			display: none;
		}
		&.p-navgroup-link--textual
		{
			.m-overflowEllipsis();
			max-width: 110px;
		}

		&.p-navgroup-link--iconic i:after
		{
			text-align: center;
		}
	}
	*/
}


@media (max-width: @xf-publicNavCollapseWidth)
{
	.p-navgroup-link--whatsnew
	{
		display: inline-flex;

		.p-navgroup-link:first-of-type& + .p-navgroup-link
		{
			// border-top-left-radius: 0;
			// border-left: 1px solid @xf-publicHeaderAdjustColor;
		}
	}

	.has-js
	{
		.p-nav-opposite
		{
			align-self: center;
			// margin-right: max(0px, @xf-pageEdgeSpacer - 6px);

			.p-navgroup
			{
				background: none;
			}

			.p-navgroup-link
			{
				border: none;
				border-radius: @xf-borderRadiusMedium;

				&.is-menuOpen
				{
					.m-borderBottomRadius(0);
				}

				&.badgeContainer
				{
					opacity: 1;
				}
			}
		}
	}
}

/*
@media (max-width: 359px)
{
	.p-navgroup-link&.p-navgroup-link--user
	{
		display: none;
	}
}

@media (max-width: 374px)
{
	.p-navgroup-link.p-navgroup-link--register
	{
		display: none;
	}
}
*/

.p-navgroup .p-navgroup-link i {
	&:after, &:before {
		@media (min-width: @xf-uix_viewportRemoveRegisterText) {
			font-size: @xf-uix_iconSize;
			// padding-right: @xf-paddingMedium;
		}
	}
}

';
	if ($__templater->func('property', array('uix_rightAlignNavigation', ), false)) {
		$__finalCompiled .= '
	@media (min-width: @xf-publicNavCollapseWidth) {
		.p-nav-inner .p-nav-opposite,
		.p-sectionLinks .p-nav-opposite {margin-left: 0;}

		.p-nav-inner .p-nav-scroller,
		.p-sectionLinks .p-sectionLinks-inner {margin-right: 0; margin-left: auto;}
	}
';
	}
	return $__finalCompiled;
}
);