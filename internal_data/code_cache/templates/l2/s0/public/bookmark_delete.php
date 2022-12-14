<?php
// FROM HASH: 97406a43ae1744667d6ece50a45ed219
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__templater->pageParams['pageTitle'] = $__templater->preEscaped('Xác nhận hành động');
	$__finalCompiled .= '

' . $__templater->form('
	<div class="block-container">
		<div class="block-body">
			' . $__templater->formInfoRow('
				' . 'Please confirm that you want to delete your bookmark for the following content' . $__vars['xf']['language']['label_separator'] . '
				<strong><a href="' . $__templater->escape($__vars['bookmark']['content_link']) . '">' . $__templater->escape($__vars['bookmark']['content_title']) . '</a></strong>
			', array(
		'rowtype' => 'confirm',
	)) . '
		</div>

		' . $__templater->formSubmitRow(array(
		'name' => 'delete',
		'icon' => 'delete',
	), array(
		'rowtype' => 'simple',
	)) . '
	</div>
', array(
		'action' => $__vars['confirmUrl'],
		'class' => 'block',
		'ajax' => 'true',
	));
	return $__finalCompiled;
}
);