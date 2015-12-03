<?php

namespace Contao;

class fontAwesomeTags
{
	public function replaceAwesome($strTag)
	{
		$value = false;
		$arrExplode = explode("::", $strTag);

		if($arrExplode[0] == "fa")
		{
			$value = '<i class="' . implode(" ", $arrExplode) . '"></i>';
		}

		return $value;
	}
}