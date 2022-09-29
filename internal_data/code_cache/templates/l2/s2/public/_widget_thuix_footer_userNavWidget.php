<?php
// FROM HASH: 5a7a0111c676415931a6c6577224b416
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="block" data-widget-definition="th_userNavigation">
    <div class="block-container block-container--noStripRadius">
        <h3 class="block-minorHeader">Người dùng</h3>
        <div class="block-body">
            ';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
                <a class="blockLink rippleButton" href="' . $__templater->func('link', array('members', $__vars['xf']['visitor'], ), true) . '">' . 'Profile' . '</a>
                <a class="blockLink rippleButton" href="' . $__templater->func('link', array('account/account-details', ), true) . '">' . 'Chi tiết tài khoản' . '</a>
                <a class="blockLink rippleButton" href="' . $__templater->func('link', array('whats-new/news-feed', ), true) . '">' . 'Dòng thời gian' . '</a>
                <a class="blockLink rippleButton" href="' . $__templater->func('link', array('logout', null, array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '">' . 'Thoát' . '</a>
            ';
	} else {
		$__finalCompiled .= '
                <a class="blockLink rippleButton" href="' . $__templater->func('link', array('login', ), true) . '">' . 'Login' . '</a>
            ';
	}
	$__finalCompiled .= '
        </div>
    </div>
</div>';
	return $__finalCompiled;
}
);