<?php

/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Zanbytes
 * @package     Zanbytes_Cdokus
 * @copyright   Copyright (c) 2014 Zanbytes Inc. (http://www.zanbytes.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * @desc 	Catalog Product Documents
 * @author      Omar,Muhsin <info@zanbytes.com>
 * @version 	$Id: Document.php 1104 2014-02-18 00:33:21Z muhsin $ $LastChangedBy: muhsin $
 * @copyright 	Copyright (c) 2014 Zanbytes Inc. (http://www.zanbytes.com)
 * @license 	http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Zanbytes_Cdokus_Block_Adminhtml_Cdokus_Document extends Mage_Adminhtml_Block_Widget_Grid_Container {

    public function __construct() {
        parent::__construct();
        $this->_controller = 'adminhtml_cdokus';
        $this->_blockGroup = 'cdokus';
        $this->_headerText = Mage::helper('cdokus')->__('Manage Document Links');
        $this->_removeButton('add');
    }

}