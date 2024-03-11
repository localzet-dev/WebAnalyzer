<?php
/*
 * @package     Localzet WebAnalyzer library
 * @link        https://github.com/localzet/WebAnalyzer
 *
 * @author      Ivan Zorin <creator@localzet.com>
 * @copyright   Copyright (c) 2018-2024 Zorin Projects S.P.
 * @license     https://www.gnu.org/licenses/agpl-3.0 GNU Affero General Public License v3.0
 *
 *              This program is free software: you can redistribute it and/or modify
 *              it under the terms of the GNU Affero General Public License as published
 *              by the Free Software Foundation, either version 3 of the License, or
 *              (at your option) any later version.
 *
 *              This program is distributed in the hope that it will be useful,
 *              but WITHOUT ANY WARRANTY; without even the implied warranty of
 *              MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *              GNU Affero General Public License for more details.
 *
 *              You should have received a copy of the GNU Affero General Public License
 *              along with this program.  If not, see <https://www.gnu.org/licenses/>.
 *
 *              For any questions, please contact <creator@localzet.com>
 */

include_once __DIR__ . '/bootstrap.php';

echo "Updating browser ids...\n";

$ids = json_decode(file_get_contents("https://cloud.zorin.space/resources/browser-ids.json"));

$result = <<<PHP_INS
 <?php
 /*
  * @package     Localzet WebAnalyzer library
  * @link        https://github.com/localzet/WebAnalyzer
  *
  * @author      Ivan Zorin <creator@localzet.com>
  * @copyright   Copyright (c) 2018-2024 Zorin Projects S.P.
  * @license     https://www.gnu.org/licenses/agpl-3.0 GNU Affero General Public License v3.0
  *
  *              This program is free software: you can redistribute it and/or modify
  *              it under the terms of the GNU Affero General Public License as published
  *              by the Free Software Foundation, either version 3 of the License, or
  *              (at your option) any later version.
  *
  *              This program is distributed in the hope that it will be useful,
  *              but WITHOUT ANY WARRANTY; without even the implied warranty of
  *              MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *              GNU Affero General Public License for more details.
  *
  *              You should have received a copy of the GNU Affero General Public License
  *              along with this program.  If not, see <https://www.gnu.org/licenses/>.
  *
  *              For any questions, please contact <creator@localzet.com>
  */
 
 /* This file is automatically generated, do not edit manually! */
 
 namespace localzet\WebAnalyzer\Data;
 
 BrowserIds::\$ANDROID_BROWSERS = [
 
 PHP_INS;


foreach ($ids as $key => $id) {
    $result .= "    '" . addslashes(trim($id->browserId)) . "'" . str_repeat(" ", max(0, 100 - strlen($id->browserId)));
    $result .= "=> " . deviceString($id->browserName) . ",\n";
}

$result .= "];\n";

file_put_contents(__DIR__ . '/../data/id-android.php', $result);


function deviceString($s)
{
    if (is_null($s) || $s == '') {
        return 'null';
    }

    return "'" . addslashes(trim($s)) . "'";
}
