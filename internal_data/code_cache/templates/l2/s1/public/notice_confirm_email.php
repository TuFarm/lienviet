<?php
// FROM HASH: 83637995ac062d1d5553889cd03b5046
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'Tài khoản của bạn đang chờ xác nhận từ email. Xác nhận đã được gửi đến ' . $__templater->escape($__vars['xf']['visitor']['email']) . '.' . '
';
	if ($__vars['xf']['session']['hasPreRegActionPending']) {
		$__finalCompiled .= '
	' . 'Once your registration has been completed, your content will be posted automatically.' . '
';
	}
	$__finalCompiled .= '<br />
<a href="' . $__templater->func('link', array('account-confirmation/resend', ), true) . '" data-xf-click="overlay">' . 'Gửi lại email xác nhận' . '</a>';
	return $__finalCompiled;
}
);