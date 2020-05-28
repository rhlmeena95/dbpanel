<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class ProjectHelper extends Helper 
{		
public function compress_image($destination_url, $quality) 
    {
        $sizeee = filesize($destination_url);
        if($sizeee>23){	
            $info = getimagesize($destination_url);
            if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($destination_url);
            elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($destination_url);
            elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($destination_url);
            imagejpeg($image, $destination_url, $quality);
        }
        return $destination_url;
    }
}
