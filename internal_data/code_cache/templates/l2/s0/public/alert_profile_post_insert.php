<?php
// FROM HASH: 23689d946b012a262e8b9ba2f0d340b6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '' . $__templater->func('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' gửi một tin nhắn trong <a ' . (('href="' . $__templater->func('link', array('profile-posts', $__vars['content'], ), true)) . '" class="fauxBlockLink-blockLink"') . '>Hồ sơ của bạn</a>.';
	return $__finalCompiled;
}
);