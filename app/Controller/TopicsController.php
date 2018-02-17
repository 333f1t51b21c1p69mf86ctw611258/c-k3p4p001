<?php
/**
 * Created by PhpStorm.
 * User: Henrik
 * Date: 2/17/2018
 * Time: 10:26 PM
 */

class TopicsController extends AppController {

	public function add() {
		if ($this->request->is('post')) {
			$this->Topic->create();
			$this->Topic->save($this->request->data);
		}
	}
}
