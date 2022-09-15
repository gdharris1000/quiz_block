<?php

namespace Drupal\quiz_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/** 
 * Quiz Block
 * 
 * @Block(
 * id = "quiz_block",
 * admin_label = @Translation("Quiz Block"),
 * category = @Translation("Quiz Block")
 * )
 * 
*/

class QuizBlock extends BlockBase {
    public function build(){
        return [];
    }

}