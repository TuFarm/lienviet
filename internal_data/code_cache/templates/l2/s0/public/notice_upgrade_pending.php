<?php
// FROM HASH: 4bd860541b535cd7a22dd9483644ba31
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'An upgrade is pending. The forum is only accessible in debug mode.' . '<br />
<a href="' . $__templater->func('base_url', array('install/', ), true) . '">' . 'Complete Upgrade' . '</a>';
	return $__finalCompiled;
}
);