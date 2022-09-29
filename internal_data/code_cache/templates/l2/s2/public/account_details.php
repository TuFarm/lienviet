<?php
// FROM HASH: a91e215135cbcd8a096b40486279f5cd
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Chi tiết tài khoản');
	$__finalCompiled .= '

';
	$__templater->wrapTemplate('account_wrapper', $__vars);
	$__finalCompiled .= '

';
	if (!$__templater->method($__vars['xf']['visitor'], 'canEditProfile', array())) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--important">' . 'Your full account details are not currently editable.' . '</div>
';
	}
	$__finalCompiled .= '

';
	if ($__vars['pendingUsernameChange']) {
		$__finalCompiled .= '
	<div class="blockMessage blockMessage--important">
		' . 'You recently requested to change your username to ' . $__templater->escape($__vars['pendingUsernameChange']['new_username']) . ' and this is currently awaiting approval by a moderator.' . '
	</div>
';
	}
	$__finalCompiled .= '

';
	$__compilerTemp1 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeUsername', array())) {
		$__compilerTemp1 .= '
					' . $__templater->button('Thay đổi', array(
			'href' => $__templater->func('link', array('account/username', ), false),
			'class' => 'button--link',
			'overlay' => 'true',
		), '', array(
		)) . '
				';
	}
	$__compilerTemp2 = '';
	$__compilerTemp3 = '';
	$__compilerTemp3 .= '
							';
	if ($__vars['xf']['visitor']['username_date']) {
		$__compilerTemp3 .= '
								' . 'Your username was last changed on ' . $__templater->func('date_time', array($__vars['xf']['visitor']['username_date'], ), true) . '.' . '
							';
	}
	$__compilerTemp3 .= '
							';
	if ($__vars['xf']['visitor']['next_allowed_username_change']) {
		$__compilerTemp3 .= '
								' . 'You may next change your username on or after ' . $__templater->func('date', array($__vars['xf']['visitor']['next_allowed_username_change'], ), true) . '.' . '
							';
	}
	$__compilerTemp3 .= '
						';
	if (strlen(trim($__compilerTemp3)) > 0) {
		$__compilerTemp2 .= '
					<div class="formRow-explain">
						' . $__compilerTemp3 . '
					</div>
				';
	}
	$__compilerTemp4 = '';
	if ($__vars['xf']['visitor']['email']) {
		$__compilerTemp4 .= '
					' . $__templater->escape($__vars['xf']['visitor']['email']) . '
				';
	} else {
		$__compilerTemp4 .= '
					<i>' . 'Không có' . '</i>
				';
	}
	$__compilerTemp5 = '';
	if ($__vars['canChangeEmail']) {
		$__compilerTemp5 .= '
					' . $__templater->button('Thay đổi', array(
			'href' => $__templater->func('link', array('account/email', ), false),
			'class' => 'button--link',
			'overlay' => 'true',
		), '', array(
		)) . '
				';
	}
	$__compilerTemp6 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canUploadAvatar', array())) {
		$__compilerTemp6 .= '
				' . $__templater->formRow('

					' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'm', false, array(
			'href' => $__templater->func('link', array('account/avatar', ), false),
			'data-xf-click' => 'overlay',
		))) . '
				', array(
			'label' => 'Avatar',
			'explain' => 'Click vào ảnh để thay đổi Avatar của bạn',
		)) . '
			';
	}
	$__compilerTemp7 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canUploadProfileBanner', array())) {
		$__compilerTemp7 .= '
				' . $__templater->formRow('

					' . $__templater->func('profile_banner', array($__vars['xf']['visitor'], 'l', false, array(
			'class' => 'memberProfileBanner--small',
			'href' => $__templater->func('link', array('account/banner', ), false),
			'overlay' => 'true',
			'hideempty' => 'true',
		), '')) . '
					' . $__templater->button('Edit profile banner', array(
			'href' => $__templater->func('link', array('account/banner', ), false),
			'data-xf-click' => 'overlay',
			'class' => 'button--link',
		), '', array(
		)) . '
				', array(
			'label' => 'Profile banner',
		)) . '
			';
	}
	$__compilerTemp8 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditProfile', array())) {
		$__compilerTemp8 .= '
				';
		if ($__templater->method($__vars['xf']['visitor'], 'hasPermission', array('general', 'editCustomTitle', ))) {
			$__compilerTemp8 .= '
					' . $__templater->formTextBoxRow(array(
				'name' => 'user[custom_title]',
				'value' => $__vars['xf']['visitor']['custom_title_'],
				'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor'], 'custom_title', ), false),
			), array(
				'label' => 'Tiêu đề riêng',
				'explain' => 'Nếu được đặt, nó sẽ thay thế tiêu đề hiển thị bên dưới tên trong bài viết của bạn.',
			)) . '
				';
		}
		$__compilerTemp8 .= '

				<hr class="formRowSep" />

				';
		if (($__vars['xf']['visitor']['Profile']['dob_day'] AND ($__vars['xf']['visitor']['Profile']['dob_month'] AND $__vars['xf']['visitor']['Profile']['dob_year']))) {
			$__compilerTemp8 .= '
					';
			$__vars['birthday'] = $__templater->method($__vars['xf']['visitor']['Profile'], 'getBirthday', array(true, ));
			$__compilerTemp8 .= $__templater->formRow('

						' . '' . '
						' . $__templater->func('date', array($__vars['birthday']['timeStamp'], $__vars['birthday']['format'], ), true) . '
					', array(
				'label' => 'Sinh ngày',
				'explain' => 'Một khi ngày sinh của bạn đã nhập vào thì không thể thay đổi. Hãy liên hệ với Ban Quản Trị nếu không đúng hoặc muốn sửa lại.',
			)) . '
				';
		} else {
			$__compilerTemp8 .= '
					' . $__templater->callMacro('helper_user_dob_edit', 'dob_edit', array(
				'dobData' => $__vars['xf']['visitor']['Profile'],
			), $__vars) . '
				';
		}
		$__compilerTemp8 .= '

				' . $__templater->callMacro('helper_account', 'dob_privacy_row', array(), $__vars) . '

				<hr class="formRowSep" />

				' . $__templater->formTextBoxRow(array(
			'name' => 'profile[location]',
			'value' => $__vars['xf']['visitor']['Profile']['location_'],
			'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor']['Profile'], 'location', ), false),
		), array(
			'hint' => ($__vars['xf']['options']['registrationSetup']['requireLocation'] ? 'Bắt buộc' : ''),
			'label' => 'Địa chỉ',
		)) . '
				' . $__templater->formTextBoxRow(array(
			'name' => 'profile[website]',
			'value' => $__vars['xf']['visitor']['Profile']['website_'],
			'type' => 'url',
			'maxlength' => $__templater->func('max_length', array($__vars['xf']['visitor']['Profile'], 'website', ), false),
		), array(
			'label' => 'Website',
		)) . '

				' . $__templater->callMacro('custom_fields_macros', 'custom_fields_edit', array(
			'type' => 'users',
			'group' => 'personal',
			'set' => $__vars['xf']['visitor']['Profile']['custom_fields'],
		), $__vars) . '

				<hr class="formRowSep" />

				' . $__templater->formEditorRow(array(
			'name' => 'about',
			'value' => $__vars['xf']['visitor']['Profile']['about_'],
			'previewable' => '0',
		), array(
			'label' => 'Giới thiệu về bạn',
		)) . '
			';
	}
	$__compilerTemp9 = '';
	if ($__templater->method($__vars['xf']['visitor'], 'canEditProfile', array())) {
		$__compilerTemp9 .= '
			';
		$__compilerTemp10 = '';
		$__compilerTemp10 .= '
						' . $__templater->callMacro('custom_fields_macros', 'custom_fields_edit', array(
			'type' => 'users',
			'group' => 'contact',
			'set' => $__vars['xf']['visitor']['Profile']['custom_fields'],
		), $__vars) . '
					';
		if (strlen(trim($__compilerTemp10)) > 0) {
			$__compilerTemp9 .= '
				<h2 class="block-formSectionHeader"><span class="block-formSectionHeader-aligner">' . 'Danh tính' . '</span></h2>
				<div class="block-body">
					' . $__compilerTemp10 . '
				</div>
			';
		}
		$__compilerTemp9 .= '
			' . $__templater->formSubmitRow(array(
			'icon' => 'save',
			'sticky' => 'true',
		), array(
		)) . '
		';
	}
	$__finalCompiled .= $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formRow('

				' . $__templater->escape($__vars['xf']['visitor']['username']) . '
				' . $__compilerTemp1 . '

				' . $__compilerTemp2 . '
			', array(
		'rowtype' => ($__templater->method($__vars['xf']['visitor'], 'canChangeUsername', array()) ? 'button' : ''),
		'label' => 'Tên tài khoản',
	)) . '

			' . $__templater->formRow('

				' . $__compilerTemp4 . '
				' . $__compilerTemp5 . '
			', array(
		'rowtype' => ($__vars['canChangeEmail'] ? 'button' : ''),
		'label' => 'Email',
	)) . '

			' . $__templater->callMacro('helper_account', 'email_options_row', array(
		'showExplain' => true,
	), $__vars) . '

			' . $__compilerTemp6 . '

			' . $__compilerTemp7 . '

			' . $__compilerTemp8 . '
		</div>
		' . $__compilerTemp9 . '
	</div>
', array(
		'action' => $__templater->func('link', array('account/account-details', ), false),
		'ajax' => 'true',
		'class' => 'block',
		'data-force-flash-message' => 'true',
	));
	return $__finalCompiled;
}
);