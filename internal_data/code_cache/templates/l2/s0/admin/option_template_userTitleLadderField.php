<?php
// FROM HASH: 1a3574f55d3c332083a5b462d2bc7b75
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->formRadioRow(array(
		'name' => $__vars['inputName'],
		'value' => $__vars['option']['option_value'],
	), array(array(
		'value' => 'trophy_points',
		'class' => 'js-trophy_points',
		'label' => 'Điểm thành tích',
		'_type' => 'option',
	),
	array(
		'value' => 'message_count',
		'class' => 'js-messages',
		'label' => 'Bài viết',
		'_type' => 'option',
	),
	array(
		'value' => 'reaction_score',
		'class' => 'js-reactionScore',
		'label' => 'Điểm tương tác',
		'_type' => 'option',
	)), array(
		'label' => $__templater->escape($__vars['option']['title']),
		'hint' => $__templater->escape($__vars['hintHtml']),
		'explain' => $__templater->escape($__vars['explainHtml']),
		'html' => $__templater->escape($__vars['listedHtml']),
		'rowclass' => $__vars['rowClass'],
	));
	return $__finalCompiled;
}
);