<?php
// FROM HASH: cb15ef0693f5a291c106f0f747c0db6d
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// #################################################### BADGES ###########################

.badge,
.badgeContainer:after
{
	display: inline-block;
	padding: 2px 4px;
	margin: -2px 0 -2px 4px;
	font-size: 80%;
	line-height: 1;
	font-weight: @xf-fontWeightNormal;
	.xf-badge();
}

.badgeContainer
{
	&:after
	{
		content: attr(data-badge);
		display: none;
	}

	&.badgeContainer--visible:after
	{
		display: inline-block;
	}
}

.badge.badge--highlighted,
.badgeContainer.badgeContainer--highlighted:after
{
	display: inline-block;
	.xf-badgeHighlighted();
}';
	return $__finalCompiled;
}
);