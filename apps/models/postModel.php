<?php
class postModel extends baseModels{
	public function getPost(){
		return $this->db->select('menu');
	}
}