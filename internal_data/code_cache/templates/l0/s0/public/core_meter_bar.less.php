<?php
// FROM HASH: ca4105463bce81b8792c2126ea744492
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= 'meter.meterBar
{
	margin: @xf-paddingSmall auto @xf-paddingSmall;
	width: 100%;
	height: 10px;

	&::-webkit-meter-bar
	{
		.m-meterVariantEmpty();
	}

	&::-webkit-meter-optimum-value
	{
		.m-meterVariantOptimum();
	}

	&::-webkit-meter-suboptimum-value
	{
		.m-meterVariantSubOptimum();
	}

	&::-webkit-meter-even-less-good-value
	{
		.m-meterVariantSubSubOptimum();
	}
}

:-moz-meter-optimum::-moz-meter-bar
{
	.m-meterVariantOptimum();
}

:-moz-meter-sub-optimum::-moz-meter-bar
{
	.m-meterVariantSubOptimum();
}

:-moz-meter-sub-sub-optimum::-moz-meter-bar
{
	.m-meterVariantSubSubOptimum();
}

@_emptyColor: xf-intensify(@xf-paletteNeutral1, 6%);
@_optimumColor: #63b265;
@_subOptimumColor: #dcda54;
@_subSubOptimumColor: #c84448;

.meterBarLabel
{
	font-size: @xf-fontSizeSmall;
}

.m-meterVariantEmpty()
{
	background: none;
	background-color: @_emptyColor;
}

.m-meterVariantOptimum()
{
	background: @_optimumColor;
}

.m-meterVariantSubOptimum()
{
	background: @_subOptimumColor;
}

.m-meterVariantSubSubOptimum()
{
	background: @_subSubOptimumColor;
}';
	return $__finalCompiled;
}
);