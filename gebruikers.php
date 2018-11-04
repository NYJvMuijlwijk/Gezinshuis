<?php require 'requires/head.php'; ?>
<?php require 'requires/gebruikers_beheer.php';
//require 'requires/add_gebruiker.php';
require 'requires/sidenav.php';

$user = new User();

/**
 * zet de functies getAdmin, getDoctor, getParent en getChild in variabeles
 */
$admins = $user->getAdmin();
//die(var_dump($admins));
$invallers = $user->getDoctor();
$parents = $user->getParent();
$childs = $user->getChild();

require 'views/gebruikers.view.php';
require 'requires/foot.php';
?>