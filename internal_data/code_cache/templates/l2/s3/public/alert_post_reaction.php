<?php
// FROM HASH: 90c9f5bd2539b5b55a7af60df016f4ad
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '' . $__templater->func('username_link', array($__vars['user'], false, array('defaultname' => $__vars['alert']['username'], ), ), true) . ' đã tương tác với bạn trong chủ đề ' . ($__templater->func('prefix', array('thread', $__vars['content']['Thread'], ), true) . $__templater->escape($__vars['content']['Thread']['title'])) . ' với biểu cảm ' . $__templater->filter($__templater->func('alert_reaction', array($__vars['extra']['reaction_id'], ), false), array(array('preescaped', array()),), true) . '.';
	return $__finalCompiled;
}
);