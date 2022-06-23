<?php
namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface

{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_table'),
            [
                'name' => 'Sample Item 1',
                'description' => 'This is a sample item'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_table'),
            [
                'name' => 'Sample Item 2',
                'description' => 'This is a sample item'
            ]
        );
        
        $setup->endSetup();
    }
}
