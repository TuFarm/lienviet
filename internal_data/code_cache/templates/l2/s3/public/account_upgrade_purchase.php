<?php
// FROM HASH: a1deabe2fc0be951f32f68089f0d152e
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Thanks for your purchase!');
	$__finalCompiled .= '

';
	$__templater->wrapTemplate('account_wrapper', $__vars);
	$__finalCompiled .= '

<div class="blockMessage">' . 'Thank you for purchasing this upgrade.' . '</div>';
	return $__finalCompiled;
}
);