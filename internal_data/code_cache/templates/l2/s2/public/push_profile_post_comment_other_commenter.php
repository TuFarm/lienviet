<?php
// FROM HASH: 45e71090cf998daca2d52cef911d4b8d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	if ($__vars['content']['ProfilePost']['ProfileUser']['user_id'] == $__vars['content']['ProfilePost']['user_id']) {
		$__finalCompiled .= '
	' . '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' cũng bình luận trên trạng thái của ' . $__templater->escape($__vars['content']['ProfilePost']['username']) . '.' . '
';
	} else {
		$__finalCompiled .= '
	' . '' . ($__templater->escape($__vars['user']['username']) ?: $__templater->escape($__vars['alert']['username'])) . ' cũng bình luận trên bài viết của ' . $__templater->escape($__vars['content']['ProfilePost']['username']) . '.' . '
';
	}
	$__finalCompiled .= '
<push:url>' . $__templater->func('link', array('canonical:profile-posts/comments', $__vars['content'], ), true) . '</push:url>';
	return $__finalCompiled;
}
);