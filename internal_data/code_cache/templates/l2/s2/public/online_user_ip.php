<?php
// FROM HASH: e4b98ed5e4a9933f4cad017eecdd874b
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Thông tin địa chỉ IP của ' . $__templater->escape($__vars['user']['username']) . '');
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped('Đang truy cập'), $__templater->func('link', array('online', ), false), array(
	));
	$__finalCompiled .= '

' . $__templater->callMacro('helper_ip', 'ip_block', array(
		'ip' => $__vars['activity']['ip'],
		'user' => $__vars['user'],
	), $__vars);
	return $__finalCompiled;
}
);