<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined('_JEXEC') or die;

if ($p['module_description'] != '') {
	echo '<div class="ph-mod-desc">'.$p['module_description'].'</div>';
}
echo '<div id="phItemWishListBox" class="ph-wishlist-module-box'.$moduleclass_sfx .' phItemWishListBox">';
echo $wishlist->renderList();
echo '</div>';
echo '<div id="phContainerModuleWishList"></div>';


// Get count of items, count can be displayed e.g. in case the list is hidden
// Add it to DIV ID because it will be changed per AJAX
// $count = $wishlist->getWishListCountItems(); 
// echo '<div class="phItemWishListBoxCount" id="phItemWishListBoxCount">'. $wishlist->getWishListCountItems().'</div>';
?>


