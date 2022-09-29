<?php
// FROM HASH: f0ffec761a56ddfd9eca1b22ee876d1b
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="u-alignCenter">
	' . 'Trang web này sử dụng cookie để giúp cá nhân hóa nội dung, điều chỉnh trải nghiệm của bạn và để giữ cho bạn đăng nhập nếu bạn đăng ký.<br />
Bằng cách tiếp tục sử dụng trang web này, bạn đồng ý với việc sử dụng cookie của chúng tôi.' . '
</div>

<div class="u-inputSpacer u-alignCenter">
	' . $__templater->button('Đồng ý', array(
		'icon' => 'confirm',
		'href' => $__templater->func('link', array('account/dismiss-notice', null, array('notice_id' => $__vars['notice']['notice_id'], ), ), false),
		'class' => 'js-noticeDismiss button--notice',
	), '', array(
	)) . '
	' . $__templater->button('Tìm hiểu thêm.' . $__vars['xf']['language']['ellipsis'], array(
		'href' => $__templater->func('link', array('help/cookies', ), false),
		'class' => 'button--notice',
	), '', array(
	)) . '
</div>';
	return $__finalCompiled;
}
);