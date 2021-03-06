<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2016 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

include('litefm.php');
define('curl_needed', "Ta strona wymaga modułu PHP Curl.");
define('no_access', "Potrzebujesz uprawnień administratora, aby uzyskać dostęp do tej strony.");
define('dwl_update', "Pobieranie Aktualizacji...");
define('dwl_complete', "Pobieranie zakończone.");
define('install_update', "Instalowanie aktualizacji...");
define('update_complete', "Aktualizacja zakonczona.");
define('ignored_files', "%s zignorowane pliki.");
define('not_updated_files_blacklisted', "Nie zaktualizowane pliki (Czarna Lista)<br>%s");
define('latest_version', "Najnowsza wersja");
define('panel_version', "Wersja panelu");
define('update_now', "Aktualizuj Teraz");
define('the_panel_is_up_to_date', "Panel jest Aktualny.");
define('files_overwritten', "%s nadpisane pliki");
define('files_not_overwritten', "%s pliki nienadpisane, znajdujące się czarnej liście");
define('can_not_update_non_writable_files', "Nie można zaktualizować, ponieważ następujące pliki/foldery nie mają praw do zapisu.");
define('dwl_failed', "Adres pobierania nie jest dostepny: \"%s\".<br> Spróbuj ponownie później.");
define('temp_folder_not_writable', "Pobieranie nie może zostać zakończone, ponieważ Apache nie ma uprawnień do zapisu w tymczasowym folderze (%s).");
define('base_dir_not_writable', "Panel nie może zostać zaktualizowany, ponieważ Apache nie ma uprawnień do zapisu w folderze %s.");
define('new_files', "%s nowych plików.");
define('updated_files', "Zaktualizowane pliki:<br>%s");
define('select_mirror', "Wybierz żródło");
define('view_changes', "Pokaż zmiany");
define('get_x_revison_messages_may_take_some_time', "Otrzymanie %s weryfikacji może zająć trochę czasu.");
define('updating_modules', "Aktualizacja modułów");
define('updating_finished', "Aktualizacja zakończona");
define('updated_module', "Zaktualizowany moduł: '%s'.");
define('blacklist_files', "<b>Czarna Lista</b>");
define('blacklist_files_info', "- wszystkie wybrane pliki nie zostaną zaktualizowane.");
define('save_to_blacklist', "Zapisz na czarnej liście");
define('no_new_updates', "Brak nowych aktualizacji");
?>
