<?php namespace H2akim\Backup\Contracts;

interface BackupFactoryInterface {

	/**
	 * Build a new Backup object and its dependencies.
	 *
	 * @param array  $options
	 * @param string $database
	 *
	 * @return \H2akim\Backup\Contracts\BackupInterface
	 */
	public function build(
		array $options = [],
		$database = null
	);

	/**
	 * Build the Backup object.
	 *
	 * @param BackupEngineInterface     $backupEngine
	 * @param BackupFilesystemInterface $backupFilesystem
	 * @param array                     $options
	 *
	 * @return \H2akim\Backup\Contracts\BackupInterface
	 */
	public function buildBackup(
		BackupEngineInterface $backupEngine,
		BackupFilesystemInterface $backupFilesystem,
		array $options = []
	);

	/**
	 * Build a new Backup Engine object.
	 *
	 * @param array  $options
	 * @param string $database
	 *
	 * @throws BackupException
	 *
	 * @return \H2akim\Backup\Contracts\BackupEngineInterface
	 */
	public function buildBackupEngine(
		array $options = [],
		$database = null
	);

}
