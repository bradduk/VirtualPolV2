<?php
/* The source code packaged with this file is Free Software, Copyright (C) 2008 by
** Javier González González <desarrollo AT virtualpol.com> <gonzomail AT gmail.com>
** It's licensed under the GNU GENERAL PUBLIC LICENSE v3 unless stated otherwise.
** You can get copies of the licenses here: http://www.gnu.org/licenses/gpl.html
** The source: http://www.virtualpol.com/codigo - TOS: http://www.virtualpol.com/TOS
** VirtualPol, The first Democratic Social Network - http://www.virtualpol.com
*/

include('inc-login.php');
/*
pol_transacciones		(ID, pols, emisor_ID, receptor_ID, concepto, time)
pol_cuentas			(ID, nombre, user_ID, pols, nivel, time)
*/

$txt_title = 'Reiniciando la economía';
$txt_nav = array('/pols'=>'Economía', 'Crear cuenta bancaria');

$txt .= '<p>Estamos trabajando en ello</p>';



//THEME
$txt_menu = 'econ';
include('theme.php');
?>
