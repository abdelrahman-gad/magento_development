<?php

// namespace Mastering\SampleModule\Setup;

// use Magento\Framework\Setup\InstallSchemaInterface;
// use Magento\Framework\Setup\ModuleDataSetupInterface;
// use Magento\Framework\Setup\UpgradeDataInterface;
// use Magento\Framework\Setup\ModuleContextInterface;


// class UpgradeData implements UpgradeDataInterface
// {
//     /**
//      * {@inheritdoc}
// */
// public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
// {
//     $setup->startSetup();

//     if (version_compare($context->getVersion(), '1.0.1', '<')) {
//         $setup->getConnection()->addColumn(
//             $setup->getTable('mastering_sample_table'),
//             'description',
//             [
//                 'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                 'length' => 255,
//                 'nullable' => false,
//                 'comment' => 'Description'
//             ]
//         );
//     }

//     $setup->endSetup();

// }

// }
