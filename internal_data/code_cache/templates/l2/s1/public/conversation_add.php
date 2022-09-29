<?php
// FROM HASH: 912a892653dac3dcbe121635d88adfb6
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Bắt đầu đối thoại');
	$__finalCompiled .= '

';
	$__templater->breadcrumb($__templater->preEscaped('Đối thoại'), $__templater->func('link', array('conversations', ), false), array(
	));
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
			';
	if (!$__templater->test($__vars['errorUsernames'], 'empty', array())) {
		$__compilerTemp1 .= '
				<div>' . 'You can not start a conversation with the following users because of their privacy settings: ' . $__templater->filter($__vars['errorUsernames'], array(array('join', array(', ', )),), true) . '.' . '</div>
			';
	}
	$__compilerTemp1 .= '

			';
	if (!$__templater->test($__vars['notFoundUsernames'], 'empty', array())) {
		$__compilerTemp1 .= '
				<div>' . 'The following users could not be found: ' . $__templater->filter($__vars['notFoundUsernames'], array(array('join', array(', ', )),), true) . '.' . '</div>
			';
	}
	$__compilerTemp1 .= '

			';
	if ($__vars['recipientLimit']) {
		$__compilerTemp1 .= '
				<div>' . 'Bạn đã vượt quá số lượng người nhận được phép (' . $__templater->escape($__vars['recipientLimit']) . ') cho tin nhắn này.' . '</div>
			';
	}
	$__compilerTemp1 .= '
		';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--error blockMessage--iconic">
		' . $__compilerTemp1 . '
	</div>
';
	}
	$__finalCompiled .= '

';
	$__compilerTemp2 = '';
	if ($__vars['attachmentData']) {
		$__compilerTemp2 .= '
					' . $__templater->callMacro('helper_attach_upload', 'upload_block', array(
			'attachmentData' => $__vars['attachmentData'],
			'forceHash' => $__vars['draft']['attachment_hash'],
		), $__vars) . '
				';
	}
	$__compilerTemp3 = '';
	if ($__vars['xf']['options']['multiQuote']) {
		$__compilerTemp3 .= '
					' . $__templater->callMacro('multi_quote_macros', 'button', array(
			'href' => $__templater->func('link', array('conversations/multi-quote', $__vars['conversation'], ), false),
			'messageSelector' => '.js-message',
			'storageKey' => 'multiQuoteConversation',
		), $__vars) . '
				';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formTokenInputRow(array(
		'name' => 'recipients',
		'value' => $__vars['to'],
		'href' => $__templater->func('link', array('members/find', ), false),
		'min-length' => '1',
		'max-tokens' => (($__vars['maxRecipients'] > -1) ? $__vars['maxRecipients'] : null),
	), array(
		'rowtype' => 'fullWidth',
		'label' => ((($__vars['maxRecipients'] == -1) OR ($__vars['maxRecipients'] > 1)) ? 'Người nhận' : 'Recipient'),
		'explain' => ((($__vars['maxRecipients'] == -1) OR ($__vars['maxRecipients'] > 1)) ? 'Dãn cách tên bằng dấu phẩy(,).' : null),
	)) . '

			' . $__templater->formTextBoxRow(array(
		'name' => 'title',
		'value' => $__vars['title'],
		'class' => 'input--title',
		'maxlength' => $__templater->func('max_length', array('XF:ConversationMaster', 'title', ), false),
		'placeholder' => 'Tiêu đề' . $__vars['xf']['language']['ellipsis'],
	), array(
		'rowtype' => 'fullWidth noLabel',
		'label' => 'Tiêu đề',
	)) . '

			' . $__templater->formEditorRow(array(
		'name' => 'message',
		'value' => $__vars['message'],
		'attachments' => ($__vars['attachmentData'] ? $__vars['attachmentData']['attachments'] : array()),
		'data-preview-url' => $__templater->func('link', array('conversations/add-preview', ), false),
	), array(
		'rowtype' => 'fullWidth noLabel mergePrev',
	)) . '

			' . $__templater->formRow('
				' . $__compilerTemp2 . '

				' . $__compilerTemp3 . '
			', array(
	)) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'name' => 'open_invite',
		'checked' => (($__vars['draft']['open_invite'] OR $__vars['conversation']['open_invite']) ? 'checked' : ''),
		'label' => '
					' . 'Cho phép mọi người trong đối thoại mời người khác' . '
				',
		'_type' => 'option',
	),
	array(
		'name' => 'conversation_locked',
		'checked' => (($__vars['draft']['conversation_open'] OR $__vars['conversation']['conversation_open']) ? '' : 'checked'),
		'label' => '
					' . 'Khóa đối thoại (không cho phép trả lời)' . '
				',
		'_type' => 'option',
	)), array(
	)) . '
		</div>
		' . $__templater->formSubmitRow(array(
		'submit' => 'Bắt đầu đối thoại',
		'sticky' => 'true',
		'icon' => 'conversation',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('conversations/add', ), false),
		'ajax' => 'true',
		'draft' => $__templater->func('link', array('conversations/draft', ), false),
		'class' => 'block',
		'data-xf-init' => 'attachment-manager',
	));
	return $__finalCompiled;
}
);