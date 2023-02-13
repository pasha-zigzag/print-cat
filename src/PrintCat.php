<?php

declare(strict_types=1);

namespace PrintCat;

class PrintCat {
	private const CAT_1 = <<<EOL
┈┈╱▔▔▔▏┈┈▕╲┈╱▏┈┈
┈╱╱▔▔▔┈┈┈╱┳▔┳╲┈┈
┈▏▏┈┈┈┈┈┈▏┈▅┈▕┈┈
┈╲╲▂▂▂▂▂╱╲╱┻╲╱┈┈
┈┈▏▕▕▕▕▕▕┈╰━╯┃┈┈
┈┈▏▕╱▕╱▕╱┈╱▔╲┃┈┈
┈┈▏┏━┳┳━━┓┏━┓┃┈┈
EOL;

	private const CAT_2 = <<<EOL
╭╭━━━╮╮┈┈┈┈┈┈┈┈┈┈
┈┃╭━━╯┈┈┈┈▕╲▂▂╱▏┈
┈┃┃╱▔▔▔▔▔▔▔▏╱▋▋╮┈
┈┃╰▏┃╱╭╮┃╱╱▏╱╱▆┃┈
┈╰━▏┗━╰╯┗━╱╱╱╰┻┫┈
┈┈┈▏┏┳━━━━▏┏┳━━╯┈
┈┈┈▏┃┃┈┈┈┈▏┃┃┈┈┈┈
EOL;

	private const CAT_3 = <<<EOL
          ／＞　 フ
　　　　　| 　_　 _|
　 　　　／`ミ _x 彡
　　 　 /　　　 　 |
　　　 /　 ヽ　　 ﾉ
　／￣|　　 |　|　|
　| (￣ヽ＿_ヽ_)_)
　＼二つ
EOL;

	private const DEFAULT_CAT = <<<EOL
／ﾌﾌ 　　　　　 　　 　ム｀ヽ
/ ノ)　　 ∧　　∧　　　　）　ヽ
/ ｜　　(´・ω ・`）ノ⌒（ゝ._,ノ
/　ﾉ⌒＿⌒ゝーく　 ＼　　／
丶＿ ノ 　　 ノ､　　|　/
　　 `ヽ `ー-‘人`ーﾉ /
　　　 丶 ￣ _人’彡ﾉ
　　　／｀ヽ _/\__'
EOL;

	public function printRandom(): void
	{
		$number = rand(1, 4);
		$result = self::DEFAULT_CAT;

		switch ($number) {
			case 1:
				$result = self::CAT_1;
				break;
			case 2:
				$result = self::CAT_2;
				break;
			case 3:
				$result = self::CAT_3;
				break;
		}

		echo $result;
	}
}