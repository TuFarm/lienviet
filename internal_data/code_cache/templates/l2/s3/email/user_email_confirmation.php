<?php
// FROM HASH: faa943c4749072dae44bb3f53a4c2b4f
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<mail:subject>
	' . 'Yêu cầu xác nhận tài khoản từ ' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '' . '
</mail:subject>

' . '' . $__templater->escape($__vars['user']['username']) . ', để hoàn thành việc đăng ký thành viên tại ' . (((('<a href="' . $__templater->func('link', array('canonical:index', ), true)) . '">') . $__templater->escape($__vars['xf']['options']['boardTitle'])) . '</a>') . ', bạn phải xác nhận tài khoản bằng liên kết dưới đây.' . '

<p><a href="' . $__templater->func('link', array('canonical:account-confirmation/email', $__vars['user'], array('c' => $__vars['confirmation']['confirmation_key'], ), ), true) . '" class="button">' . 'Xác nhận thư điện tử của bạn' . '</a></p>';
	return $__finalCompiled;
}
);