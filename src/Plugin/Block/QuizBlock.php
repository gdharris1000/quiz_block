<?php

namespace Drupal\quiz_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

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

    public function blockForm($form, FormStateInterface $form_state) {
        //Get all taxonomy terms
        $vocabularies = \Drupal::entityTypeManager()->getStorage('taxonomy_vocabulary')->loadMultiple();
        
        //Get the name and ID of each term
        $vocab_names = [];
        foreach($vocabularies as $vocab) {
            $name = $vocab->get('name');
            $vid = $vocab->get('vid');
            $vocab_names[] = [$name => $vid];
        }

        //List the available taxonomy terms
        $form['vocabs'] = [
            '#type' => 'select',
            '#title' => 'Select Term',
            '#options' => $vocab_names,
            ];
            
        return $form;
    }

}