<?php
// FROM HASH: f292978b364327ffbeb7cb337bd0164c
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Hiện kết quả' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['poll']['question']));
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'metaNoindex', $__templater->preEscaped('<meta name="robots" content="noindex" />'));
	$__finalCompiled .= '

';
	$__templater->breadcrumbs($__vars['breadcrumbs']);
	$__finalCompiled .= '

<div class="block">
	<div class="block-container">
		' . $__templater->callMacro('poll_macros', 'result', array(
		'poll' => $__vars['poll'],
		'showFooter' => false,
	), $__vars) . '
	</div>
</div>';
	return $__finalCompiled;
}
);