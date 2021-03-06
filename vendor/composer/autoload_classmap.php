<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Banque' => $baseDir . '/app/modules/tresorerie/models/Banque.php',
    'BanqueController' => $baseDir . '/app/modules/tresorerie/controllers/BanqueController.php',
    'BanqueDomaine' => $baseDir . '/app/modules/tresorerie/domaines/BanqueDomaine.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'Cartalyst\\Sentry\\Groups\\GroupExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\GroupNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\NameRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserBannedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserSuspendedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\LoginRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\PasswordRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserAlreadyActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\WrongPasswordException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Compte' => $baseDir . '/app/modules/tresorerie/models/Compte.php',
    'CompteController' => $baseDir . '/app/modules/tresorerie/controllers/CompteController.php',
    'CompteDomaine' => $baseDir . '/app/modules/tresorerie/domaines/CompteDomaine.php',
    'ComptesOld' => $baseDir . '/app/lib/divers/ComptesOld.php',
    'DashboardController' => $baseDir . '/app/lib/dashboard/DashboardController.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'Ecriture' => $baseDir . '/app/modules/tresorerie/models/Ecriture.php',
    'EcritureController' => $baseDir . '/app/modules/tresorerie/controllers/EcritureController.php',
    'EcritureDomaine' => $baseDir . '/app/modules/tresorerie/domaines/EcritureDomaine.php',
    'ExerciceDomaine' => $baseDir . '/app/modules/tresorerie/domaines/ExerciceDomaine.php',
    'ExportController' => $baseDir . '/app/modules/tresorerie/controllers/ExportController.php',
    'ExportDomaine' => $baseDir . '/app/modules/tresorerie/domaines/ExportDomaine.php',
    'Gab\\Domaines\\DomHelper' => $vendorDir . '/gab09/domaines/src/Gab/Domaines/DomHelper.php',
    'Gab\\Domaines\\DomainesFacade' => $vendorDir . '/gab09/domaines/src/Gab/Domaines/DomainesFacade.php',
    'Gab\\Domaines\\DomainesServiceProvider' => $vendorDir . '/gab09/domaines/src/Gab/Domaines/DomainesServiceProvider.php',
    'IdentificationController' => $baseDir . '/app/lib/identification/IdentificationController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'Import' => $baseDir . '/app/lib/divers/imports/Import.php',
    'ImportController' => $baseDir . '/app/lib/divers/imports/ImportController.php',
    'JournalController' => $baseDir . '/app/modules/tresorerie/controllers/JournalController.php',
    'JournalDomaine' => $baseDir . '/app/modules/tresorerie/domaines/JournalDomaine.php',
    'Lib\\Validations\\MenuValidation' => $baseDir . '/app/lib/menus/MenuValidation.php',
    'Lib\\Validations\\UtilisateurValidation' => $baseDir . '/app/lib/utilisateurs/UtilisateurValidation.php',
    'Lib\\Validations\\ValidationBase' => $baseDir . '/app/lib/shared/ValidationBase.php',
    'Lib\\Validations\\ValidationIdentification' => $baseDir . '/app/lib/identification/ValidationIdentification.php',
    'Lib\\Validations\\ValidationInterface' => $baseDir . '/app/lib/shared/ValidationInterface.php',
    'Menu' => $baseDir . '/app/lib/menus/Menu.php',
    'MenuController' => $baseDir . '/app/lib/menus/MenuController.php',
    'MenuDomaine' => $baseDir . '/app/lib/menus/MenuDomaine.php',
    'MenuRepository' => $baseDir . '/app/lib/menus/MenuRepository.php',
    'MigrationCartalystSentryInstallGroups' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225929_migration_cartalyst_sentry_install_groups.php',
    'MigrationCartalystSentryInstallThrottle' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225988_migration_cartalyst_sentry_install_throttle.php',
    'MigrationCartalystSentryInstallUsers' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225921_migration_cartalyst_sentry_install_users.php',
    'MigrationCartalystSentryInstallUsersGroupsPivot' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot.php',
    'PointageController' => $baseDir . '/app/modules/tresorerie/controllers/PointageController.php',
    'PointageDomaine' => $baseDir . '/app/modules/tresorerie/domaines/PointageDomaine.php',
    'PrevController' => $baseDir . '/app/modules/tresorerie/controllers/PrevController.php',
    'PrevDomaine' => $baseDir . '/app/modules/tresorerie/domaines/PrevDomaine.php',
    'Role' => $baseDir . '/app/lib/roles/role.php',
    'RoleDomaine' => $baseDir . '/app/lib/roles/RoleDomaine.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'Signe' => $baseDir . '/app/modules/tresorerie/models/Signe.php',
    'Statut' => $baseDir . '/app/modules/tresorerie/models/Statut.php',
    'StatutController' => $baseDir . '/app/modules/tresorerie/controllers/StatutController.php',
    'StatutDomaine' => $baseDir . '/app/modules/tresorerie/domaines/StatutDomaine.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'TransfertController' => $baseDir . '/app/modules/tresorerie/controllers/TransfertController.php',
    'TransfertDomaine' => $baseDir . '/app/modules/tresorerie/domaines/TransfertDomaine.php',
    'Tresorerie\\Domaines\\ModesTraitDomaine' => $baseDir . '/app/modules/tresorerie/domaines/ModesTraitDomaine.php',
    'Type' => $baseDir . '/app/modules/tresorerie/models/Type.php',
    'TypeController' => $baseDir . '/app/modules/tresorerie/controllers/TypeController.php',
    'TypeDomaine' => $baseDir . '/app/modules/tresorerie/domaines/TypeDomaine.php',
    'Utilisateur' => $baseDir . '/app/lib/utilisateurs/Utilisateur.php',
    'UtilisateurController' => $baseDir . '/app/lib/utilisateurs/UtilisateurController.php',
    'Way\\Generators\\Generators\\ControllerGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ControllerGenerator.php',
    'Way\\Generators\\Generators\\FormDumperGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/FormDumperGenerator.php',
    'Way\\Generators\\Generators\\Generator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/Generator.php',
    'Way\\Generators\\Generators\\MigrationGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/MigrationGenerator.php',
    'Way\\Generators\\Generators\\ModelGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ModelGenerator.php',
    'Way\\Generators\\Generators\\RequestedCacheNotFound' => $vendorDir . '/way/generators/src/Way/Generators/Generators/Generator.php',
    'Way\\Generators\\Generators\\ResourceGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ResourceGenerator.php',
    'Way\\Generators\\Generators\\ScaffoldGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ScaffoldGenerator.php',
    'Way\\Generators\\Generators\\SeedGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/SeedGenerator.php',
    'Way\\Generators\\Generators\\TestGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/TestGenerator.php',
    'Way\\Generators\\Generators\\ViewGenerator' => $vendorDir . '/way/generators/src/Way/Generators/Generators/ViewGenerator.php',
    'lib\\dashboard\\ValidationDashboard' => $baseDir . '/app/lib/dashboard/ValidationDashboard.php',
    'tresorerie\\Validations\\BanqueValidation' => $baseDir . '/app/modules/tresorerie/validations/BanqueValidation.php',
    'tresorerie\\Validations\\CompteValidation' => $baseDir . '/app/modules/tresorerie/validations/CompteValidation.php',
    'tresorerie\\Validations\\EcritureDoubleValidation' => $baseDir . '/app/modules/tresorerie/validations/EcritureDoubleValidation.php',
    'tresorerie\\Validations\\EcritureValidation' => $baseDir . '/app/modules/tresorerie/validations/EcritureValidation.php',
    'tresorerie\\Validations\\StatutValidation' => $baseDir . '/app/modules/tresorerie/validations/StatutValidation.php',
    'tresorerie\\Validations\\TypeValidation' => $baseDir . '/app/modules/tresorerie/validations/TypeValidation.php',
);
