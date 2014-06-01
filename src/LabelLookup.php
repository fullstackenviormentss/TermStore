<?php

namespace Queryr\TermStore;

use Wikibase\DataModel\Entity\EntityId;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface LabelLookup {

	/**
	 * @param EntityId $id
	 * @param string $languageCode
	 *
	 * @return string|null
	 * @throws TermStoreException
	 */
	public function getLabelByIdAndLanguage( EntityId $id, $languageCode );

}