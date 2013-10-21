<?php
class menuEntity extends entity{
	
	var $id, $name,$url, $parent, $styleClass, $styleId, $icon, $order, $puslish;
	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @return the $parent
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * @return the $styleClass
	 */
	public function getStyleClass() {
		return $this->styleClass;
	}

	/**
	 * @return the $styleId
	 */
	public function getStyleId() {
		return $this->styleId;
	}

	/**
	 * @return the $icon
	 */
	public function getIcon() {
		return $this->icon;
	}

	/**
	 * @return the $order
	 */
	public function getOrder() {
		return $this->order;
	}

	/**
	 * @return the $puslish
	 */
	public function getPuslish() {
		return $this->puslish;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param field_type $url
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * @param field_type $parent
	 */
	public function setParent($parent) {
		$this->parent = $parent;
	}

	/**
	 * @param field_type $styleClass
	 */
	public function setStyleClass($styleClass) {
		$this->styleClass = $styleClass;
	}

	/**
	 * @param field_type $styleId
	 */
	public function setStyleId($styleId) {
		$this->styleId = $styleId;
	}

	/**
	 * @param field_type $icon
	 */
	public function setIcon($icon) {
		$this->icon = $icon;
	}

	/**
	 * @param field_type $order
	 */
	public function setOrder($order) {
		$this->order = $order;
	}

	/**
	 * @param field_type $puslish
	 */
	public function setPuslish($puslish) {
		$this->puslish = $puslish;
	}

	
}