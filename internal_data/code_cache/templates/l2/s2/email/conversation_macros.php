<?php
// FROM HASH: c0e48021b94c07bd5b869cf19e6e6720
return array(
'macros' => array('footer' => array(
'arguments' => function($__templater, array $__vars) { return array(
		'conversation' => '!',
	); },
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '
	' . '<p class="minorText">Vui lòng không trả lời thư này. Bạn phải ghé thăm diễn đàn để trả lời.</p>

<p class="minorText">Thư này đã được gửi cho bạn bởi vì tùy chọn của bạn được đặt để nhận email khi thư thoại mới được nhận. <a href="' . $__templater->func('link', array('canonical:email-stop/conversation', $__vars['xf']['toUser'], ), true) . '">Ngừng nhận các email này</a>.</p>' . '
';
	return $__finalCompiled;
}
)),
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';

	return $__finalCompiled;
}
);