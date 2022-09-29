<?php
// FROM HASH: 27aede3ece3af8c82aca96635792249a
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Invite Members to Conversation');
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped('Đối thoại'), $__templater->func('link', array('conversations', ), false), array(
	));
	$__finalCompiled .= '
';
	$__templater->breadcrumb($__templater->preEscaped($__templater->escape($__vars['conversation']['title'])), $__templater->func('link', array('conversations', $__vars['conversation'], ), false), array(
	));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__vars['remainingRecipients'] > 1) {
		$__compilerTemp1 .= 'Dãn cách tên bằng dấu phẩy(,).';
	}
	$__compilerTemp2 = '';
	if ($__vars['remainingRecipients'] > 0) {
		$__compilerTemp2 .= 'You may invite up to ' . $__templater->filter($__vars['remainingRecipients'], array(array('number', array()),), true) . ' member(s).';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formTokenInputRow(array(
		'name' => 'recipients',
		'href' => $__templater->func('link', array('members/find', ), false),
		'min-length' => '1',
		'max-tokens' => (($__vars['remainingRecipients'] > -1) ? $__vars['remainingRecipients'] : null),
	), array(
		'label' => 'Invite Members',
		'explain' => '
					' . $__compilerTemp1 . ' ' . 'Invited members will be able to see the entire conversation from the beginning.' . '
					' . $__compilerTemp2 . '
				',
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Invite',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('conversations/invite', $__vars['conversation'], ), false),
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);