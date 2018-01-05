<?php

namespace AdamDBurton\Destiny2ApiClient\Enum;

/**
 * Class CharacterClass
 * @package AdamDBurton\Destiny2ApiClient\Enum
 * @see https://bungie-net.github.io/multi/schema_Forum-ForumTopicsCategoryFiltersEnum.html
 */
class ForumTopicsCategoryFilters extends Enum
{
	const None = 0;
	const Links = 1;
	const Questions = 2;
	const AnsweredQuestions = 4;
	const Media = 8;
	const TextOnly = 16;
	const Announcement = 32;
	const BungieOfficial = 64;
	const Polls = 128;
}