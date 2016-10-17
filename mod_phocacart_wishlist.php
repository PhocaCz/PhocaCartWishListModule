<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
 
defined('_JEXEC') or die;// no direct access

if (!JComponentHelper::isEnabled('com_phocacart', true)) {
	$app = JFactory::getApplication();
	$app->enqueueMessage(JText::_('Phoca Cart Error'), JText::_('Phoca Cart is not installed on your system'), 'error');
	return;
}
if (! class_exists('PhocaCartLoader')) {
    require_once( JPATH_ADMINISTRATOR.'/components/com_phocacart/libraries/loader.php');
}
phocacartimport('phocacart.path.route');
phocacartimport('phocacart.render.renderjs');
phocacartimport('phocacart.wishlist.wishlist');
phocacartimport('phocacart.category.categorymultiple');
$lang = JFactory::getLanguage();
//$lang->load('com_phocacart.sys');
$lang->load('com_phocacart');

JHTML::stylesheet('media/com_phocacart/css/main.css' );

PhocaCartRenderJs::renderAjaxRemoveFromWishList();

$wishlist	= new PhocaCartWishList();
echo '<div id="phItemWishListBox">';
echo $wishlist->renderList();
echo '</div>';
echo '<div id="phContainerModuleWishList"></div>';
require(JModuleHelper::getLayoutPath('mod_phocacart_wishlist'));
?>