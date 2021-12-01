<?php

namespace Ubermanu\France\Setup\Patch\Data;

use Magento\Framework\File\Csv as CsvProcessor;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;

class InitializeDirectoryData implements DataPatchInterface, PatchVersionInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * @var CsvProcessor
     */
    private $csv;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param CsvProcessor $csv
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        CsvProcessor $csv
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->csv = $csv;
    }

    /**
     * @inheritdoc
     */
    public function apply()
    {
        $data = $this->csv->getData(__DIR__ . '/_files/cities.csv');

        $columns = ['code', 'postcode', 'name'];
        $this->moduleDataSetup->getConnection()->insertArray(
            $this->moduleDataSetup->getTable('directory_france_city'),
            $columns,
            $data
        );
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public static function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
}
