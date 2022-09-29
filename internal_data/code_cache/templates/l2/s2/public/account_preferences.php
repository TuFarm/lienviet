<?php
// FROM HASH: 1a0258461d4eeab68db6a545ff3b87ec
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Tùy chọn');
	$__finalCompiled .= '
';
	$__templater->setPageParam('uix_myAccountLinks', 'settings');
	$__finalCompiled .= '

';
	$__templater->wrapTemplate('account_wrapper', $__vars);
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeStyle', array())) {
		$__compilerTemp1 .= '

				';
		$__compilerTemp2 = array(array(
			'value' => '0',
			'label' => 'Dùng giao diện mặc định' . $__vars['xf']['language']['label_separator'] . ' ' . $__templater->escape($__vars['defaultStyle']['title']),
			'_type' => 'option',
		));
		if ($__templater->isTraversable($__vars['styles'])) {
			foreach ($__vars['styles'] AS $__vars['style']) {
				$__compilerTemp2[] = array(
					'value' => $__vars['style']['style_id'],
					'label' => $__templater->escape($__vars['style']['title']) . ((!$__vars['style']['user_selectable']) ? ' *' : ''),
					'_type' => 'option',
				);
			}
		}
		$__compilerTemp1 .= $__templater->formSelectRow(array(
			'name' => 'user[style_id]',
			'value' => $__vars['xf']['visitor']['style_id'],
		), $__compilerTemp2, array(
			'label' => 'Giao diện',
		)) . '
			';
	} else {
		$__compilerTemp1 .= '
				' . $__templater->formHiddenVal('user[style_id]', $__vars['xf']['visitor']['style_id'], array(
		)) . '
			';
	}
	$__compilerTemp3 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeLanguage', array())) {
		$__compilerTemp3 .= '
				';
		$__compilerTemp4 = array();
		if ($__templater->isTraversable($__vars['languages'])) {
			foreach ($__vars['languages'] AS $__vars['language']) {
				$__compilerTemp4[] = array(
					'value' => $__vars['language']['language_id'],
					'label' => $__templater->escape($__vars['language']['title']) . ((!$__vars['language']['user_selectable']) ? ' *' : ''),
					'_type' => 'option',
				);
			}
		}
		$__compilerTemp3 .= $__templater->formSelectRow(array(
			'name' => 'user[language_id]',
			'value' => $__vars['xf']['visitor']['language_id'],
		), $__compilerTemp4, array(
			'label' => 'Ngôn ngữ',
		)) . '
			';
	} else {
		$__compilerTemp3 .= '
				' . $__templater->formHiddenVal('user[language_id]', ($__vars['xf']['visitor']['language_id'] ?: $__vars['xf']['options']['defaultLanguageId']), array(
		)) . '
			';
	}
	$__compilerTemp5 = $__templater->mergeChoiceOptions(array(), $__vars['timeZones']);
	$__compilerTemp6 = '';
	if ($__vars['xf']['options']['enableNotices'] AND ($__templater->func('count', array($__vars['xf']['session']['dismissedNotices'], ), false) > 0)) {
		$__compilerTemp6 .= '
				<hr class="formRowSep" />

				' . $__templater->formCheckBoxRow(array(
		), array(array(
			'name' => 'restore_notices',
			'label' => 'Khôi phục lưu ý đã bị bỏ qua',
			'hint' => 'Bất ký lưu ý nào bạn đã bỏ qua trước đây sẽ được khôi phục để xem nếu bạn đánh dấu vào mục này.',
			'_type' => 'option',
		)), array(
		)) . '
			';
	}
	$__compilerTemp7 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canUsePushNotifications', array())) {
		$__compilerTemp7 .= '
				' . $__templater->formRow('
					' . $__templater->button('
						' . 'Checking device capabilities' . $__vars['xf']['language']['ellipsis'] . '
					', array(
			'class' => 'is-disabled',
			'data-xf-init' => 'push-toggle',
		), '', array(
		)) . '
				', array(
			'label' => 'Thông báo',
			'rowtype' => 'button',
			'explain' => 'Cho phép các thông báo push yêu cầu thiết bị được hỗ trợ. Việc bật thông báo push sẽ cho phép họ chỉ cho thiết bị này. Nếu bạn đăng xuất khỏi thiết bị này, bạn sẽ cần kích hoạt lại thông báo đẩy.',
		)) . '

				' . $__templater->formCheckBoxRow(array(
		), array(array(
			'name' => 'option[push_on_conversation]',
			'checked' => $__vars['xf']['visitor']['Option']['push_on_conversation'],
			'label' => 'Nhận thông báo push khi tin nhắn hội thoại mới được nhận',
			'_type' => 'option',
		)), array(
			'label' => '',
		)) . '

				';
		$__templater->inlineJs('
					jQuery.extend(true, XF.config, {
						skipPushNotificationSubscription: true,
						skipPushNotificationCta: true
					});

					jQuery.extend(XF.phrases, {
						push_enable_label: "' . $__templater->filter('Bật thông báo push', array(array('escape', array('js', )),), false) . '",
						push_disable_label: "' . $__templater->filter('Tắt thông báo push', array(array('escape', array('js', )),), false) . '",
						push_not_supported_label: "' . $__templater->filter('Push notifications not supported', array(array('escape', array('js', )),), false) . '",
						push_blocked_label: "' . $__templater->filter('Push notifications blocked', array(array('escape', array('js', )),), false) . '"
					});
				');
		$__compilerTemp7 .= '
			';
	} else {
		$__compilerTemp7 .= '
				' . $__templater->formHiddenVal('option[push_on_conversation]', $__vars['xf']['visitor']['Option']['push_on_conversation'], array(
		)) . '
			';
	}
	$__compilerTemp8 = '';
	if (!$__templater->test($__vars['alertOptOuts'], 'empty', array())) {
		$__compilerTemp8 .= '
			';
		$__templater->includeCss('notification_opt_out.less');
		$__compilerTemp8 .= '
			<h2 class="block-formSectionHeader"><span class="block-formSectionHeader-aligner">' . 'Nhận được thông báo khi có người' . $__vars['xf']['language']['ellipsis'] . '</span></h2>
			<div class="block-body">
				';
		$__vars['canPush'] = $__templater->method($__vars['xf']['visitor'], 'canUsePushNotifications', array());
		$__compilerTemp8 .= '
				';
		if ($__templater->isTraversable($__vars['alertOptOuts'])) {
			foreach ($__vars['alertOptOuts'] AS $__vars['contentType'] => $__vars['options']) {
				$__compilerTemp8 .= '
					';
				if ($__templater->isTraversable($__vars['options'])) {
					foreach ($__vars['options'] AS $__vars['action'] => $__vars['label']) {
						$__compilerTemp8 .= '
						';
						$__compilerTemp9 = '';
						if ($__vars['canPush']) {
							$__compilerTemp9 .= '
									<li class="notificationChoices-choice notificationChoices-choice--push">
										' . $__templater->formCheckBox(array(
								'standalone' => 'true',
							), array(array(
								'name' => 'push[' . $__vars['contentType'] . '_' . $__vars['action'] . ']',
								'checked' => $__templater->method($__vars['xf']['visitor']['Option'], 'doesReceivePush', array($__vars['contentType'], $__vars['action'], )),
								'label' => 'Thông báo',
								'_type' => 'option',
							))) . '
										' . $__templater->formHiddenVal('push_shown[' . $__vars['contentType'] . '_' . $__vars['action'] . ']', '1', array(
							)) . '
									</li>
								';
						}
						$__compilerTemp8 .= $__templater->formRow('
							<ul class="notificationChoices">
								<li class="notificationChoices-choice notificationChoices-choice--alert">
									' . $__templater->formCheckBox(array(
							'standalone' => 'true',
						), array(array(
							'name' => 'alert[' . $__vars['contentType'] . '_' . $__vars['action'] . ']',
							'data-xf-init' => ($__vars['canPush'] ? 'disabler' : ''),
							'data-container' => '< .notificationChoices | .notificationChoices-choice--push',
							'checked' => $__templater->method($__vars['xf']['visitor']['Option'], 'doesReceiveAlert', array($__vars['contentType'], $__vars['action'], )),
							'label' => 'Cảnh báo',
							'_type' => 'option',
						))) . '
								</li>
								' . $__compilerTemp9 . '
							</ul>
						', array(
							'label' => $__templater->escape($__vars['label']),
							'data-content-type' => $__vars['contentType'],
							'data-action' => $__vars['action'],
						)) . '
					';
					}
				}
				$__compilerTemp8 .= '
					<hr class="formRowSep" />
				';
			}
		}
		$__compilerTemp8 .= '

			</div>
		';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__compilerTemp1 . '
			' . $__templater->includeTemplate('thuix_account_preferences_style_options', $__vars) . '

			' . $__compilerTemp3 . '

			' . $__templater->formSelectRow(array(
		'name' => 'user[timezone]',
		'value' => $__vars['xf']['visitor']['timezone'],
	), $__compilerTemp5, array(
		'label' => 'Múi giờ',
	)) . '

			' . $__templater->callMacro('helper_account', 'email_options_row', array(
		'showConversationOption' => true,
	), $__vars) . '

			' . $__templater->formCheckBoxRow(array(
	), array(array(
		'value' => 'watch_no_email',
		'name' => 'option[creation_watch_state]',
		'checked' => ($__vars['xf']['visitor']['Option']['creation_watch_state'] ? true : false),
		'label' => 'Tự động theo dõi nội dung bạn tạo' . $__vars['xf']['language']['ellipsis'],
		'_dependent' => array($__templater->formCheckBox(array(
	), array(array(
		'value' => 'watch_email',
		'name' => 'option[creation_watch_state]',
		'checked' => ($__vars['xf']['visitor']['Option']['creation_watch_state'] == 'watch_email'),
		'label' => 'và nhận email thông báo',
		'_type' => 'option',
	)))),
		'_type' => 'option',
	),
	array(
		'value' => 'watch_no_email',
		'name' => 'option[interaction_watch_state]',
		'checked' => ($__vars['xf']['visitor']['Option']['interaction_watch_state'] ? true : false),
		'label' => 'Tự động theo dõi nội dung bạn tương tác' . $__vars['xf']['language']['ellipsis'],
		'_dependent' => array($__templater->formCheckBox(array(
	), array(array(
		'value' => 'watch_email',
		'name' => 'option[interaction_watch_state]',
		'checked' => ($__vars['xf']['visitor']['Option']['interaction_watch_state'] == 'watch_email'),
		'label' => 'và nhận email thông báo',
		'_type' => 'option',
	)))),
		'_type' => 'option',
	),
	array(
		'name' => 'option[content_show_signature]',
		'checked' => $__vars['xf']['visitor']['Option']['content_show_signature'],
		'label' => 'Hiện chữ ký của mọi người bên dưới bài viết',
		'_type' => 'option',
	)), array(
		'label' => 'Tùy chọn nội dung',
	)) . '

			' . $__templater->callMacro('helper_account', 'activity_privacy_row', array(), $__vars) . '

			' . $__templater->callMacro('custom_fields_macros', 'custom_fields_edit', array(
		'type' => 'users',
		'group' => 'preferences',
		'set' => $__vars['xf']['visitor']['Profile']['custom_fields'],
	), $__vars) . '

			' . $__compilerTemp6 . '

			' . $__compilerTemp7 . '
		</div>

		' . $__compilerTemp8 . '

		' . $__templater->formSubmitRow(array(
		'icon' => 'save',
		'sticky' => 'true',
	), array(
	)) . '
	</div>
', array(
		'action' => $__templater->func('link', array('account/preferences', ), false),
		'ajax' => 'true',
		'class' => 'block',
		'data-force-flash-message' => 'true',
	));
	return $__finalCompiled;
}
);