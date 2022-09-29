<?php
// FROM HASH: e2684fb09a9f9fbbb64eb603f4ffacfd
return array(
'macros' => array('altColumn' => array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	<div class="uix_megaMenu__col uix_megaMenu__col--alt">
		<div class="block-body">
			<a href="" class="uix_megaMenu__iconLink blockLink">
				<i class="mdi mdi-account-multiple"></i>
				<span>Support UI.X</span>
			</a>
			<a href="#" class="uix_megaMenu__iconLink blockLink">
				<i class="mdi mdi-account-multiple"></i>
				<span>Donate</span>
			</a>
			<a href="#" class="uix_megaMenu__iconLink blockLink">
				<i class="mdi mdi-account-multiple"></i>
				<span>Contact us</span>
			</a>
		</div>
		<div class="block-body">
			<div class="uix_megaMenu__listLabel blockLink">Main Links</div>
			<a href="' . $__templater->func('link', array('forums', ), true) . '" class="blockLink">' . 'Diễn đàn' . '</a>
			<a href="' . $__templater->func('link', array('articles', ), true) . '" class="blockLink">' . 'articles' . '</a>
		</div>
	</div>
';
	return $__finalCompiled;
}
),
'uix_megaMenu' => array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	';
	$__templater->includeCss('uix_megaMenu.less');
	$__finalCompiled .= '
	<div class="uix_megaMenu">
		<div class="pageContent">
			<div class="uix_megaMenu__content uix_megaMenu__content--thxlink_12">
				<div class="uix_megaMenu__row">
					<div class="uix_megaMenu__col">
						<h2 class="uix_megaMenu__title">Blog</h2>
					</div>
					<div class="uix_megaMenu__col">
						<div class="block-minorHeader">Categories</div>
						<div class="block-body">
							<a href="#" class="blockLink">Category 1</a>
							<a href="#" class="blockLink">Category 2</a>
							<a href="#" class="blockLink">Category 3</a>
							<a href="#" class="blockLink">Category 4</a>
						</div>
					</div>
					<div class="uix_megaMenu__col">
						<div class="block-minorHeader">Categories</div>
						<div class="block-body">
							<a href="#" class="blockLink">Category 1</a>
							<a href="#" class="blockLink">Category 2</a>
							<a href="#" class="blockLink">Category 3</a>
							<a href="#" class="blockLink">Category 4</a>
						</div>
					</div>
					' . $__templater->callMacro(null, 'altColumn', array(), $__vars) . '
				</div>
			</div>
		</div>
	</div>
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '

';
	return $__finalCompiled;
}
);