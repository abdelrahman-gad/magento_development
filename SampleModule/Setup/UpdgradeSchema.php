<?php
// namespace Mastering\SampleModule\Setup;

// use Magento\Framework\Setup\SchemaSetupInterface;
// use Magento\Framework\Setup\UpgradeSchemaInterface;
// use Magento\Setup\Model\ModuleContext;


// class UpgradeSchema implements UpgradeSchemaInterface
// {
//     public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
//     {
//         $setup->startSetup();
//         if (version_compare($context->getVersion(), '1.0.1', '<')) {
//             $setup->getConnection()->addColumn(
//                 $setup->getTable('mastering_sample_table'),
//                 'description',
//                 [
//                     'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                     'length' => 255,
//                     'nullable' => false,
//                     'comment' => 'Description'
//                 ]
//             );
//         }
//  }

// }
