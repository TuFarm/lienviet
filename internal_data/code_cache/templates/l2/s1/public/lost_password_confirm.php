<?php
// FROM HASH: 554d3158ae1ac4d3c51ac1cdb66c2c24
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Lấy lại mật khẩu');
	$__finalCompiled .= '

';
	$__templater->setPageParam('head.' . 'meta_referrer', $__templater->preEscaped('<meta name="referrer" content="origin" />'));
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formRow($__templater->escape($__vars['user']['username']), array(
		'label' => 'Tên bạn',
	)) . '

			' . $__templater->formPasswordBoxRow(array(
		'name' => 'password',
		'autocomplete' => 'new-password',
		'checkstrength' => 'true',
	), array(
		'label' => 'Mật khẩu mới',
	)) . '

			' . $__templater->formPasswordBoxRow(array(
		'name' => 'password_confirm',
		'autocomplete' => 'new-password',
	), array(
		'label' => 'Xác nhận mật khẩu mới',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('lost-password/confirm', $__vars['user'], array('c' => $__vars['c'], ), ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);