<?php
namespace Ps\EntityBicycleMarket\Service;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Database\Connection;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class GenerateTokenService {


	/**
	 * @param string $status
	 * @param string $table
	 * @param string $uid
	 * @param array $fields
	 * @param DataHandler $dataHandler
	 */
	function processDatamap_afterDatabaseOperations(string $status, string $table, $uid, array $fields, DataHandler $dataHandler) {
		if($table == 'tx_entity_domain_model_entity') {

			if($status === 'new') {
				$uid = $dataHandler->substNEWwithIDs[$uid];
			}

			$bicycle = BackendUtility::getRecord('tx_entity_domain_model_entity', (int) $uid);

			if(empty($bicycle['tx_entitybicyclemarket_token']) === true) {
				$token = $this->generateToken();

				// Token und Slut aktualisieren
				/** @var QueryBuilder $queryBuilder */
				$queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_entity_domain_model_entity');
				$statement = $queryBuilder
					->update('tx_entity_domain_model_entity')
					->where(
						$queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($uid, \PDO::PARAM_INT))
					)
					->set('tx_entitybicyclemarket_token', $token, false)
					->set('slug', $token, false)
					->execute();
			}
		}
	}

	/**
	 * @return string
	 */
	protected function generateToken() {
		$token = mt_rand(100000, 999999);

		// Abfragen ob der Token bereits existiert
		$queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_entity_domain_model_entity');
		$statement = $queryBuilder
			->select('uid')
			->from('tx_entity_domain_model_entity')
			->where(
				$queryBuilder->expr()->eq('tx_entitybicyclemarket_token', $queryBuilder->createNamedParameter($token, \PDO::PARAM_STR))
			)
			->execute();

		$result = $statement->fetch();

		// Token existiert bereits -> wieder sich selber aufrufen um einen weiteren zu generieren
		if($result !== false) {
			return $this->generateToken();
		}

		return $token;
	}
}