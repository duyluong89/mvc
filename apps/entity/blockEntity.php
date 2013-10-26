<?php
class blockEntity extends entity{
	var $id, $name, $code, $puslish, $content, $controller, $useBlock, $title, $position, $provider, $blockClass;
	/**
	 * @return the $blockClass
	 */
	public function getBlockClass() {
		return $this->blockClass;
	}

	/**
	 * @param field_type $blockClass
	 */
	public function setBlockClass($blockClass) {
		$this->blockClass = $blockClass;
	}

	/**
	 * @return the $provider
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * @param field_type $provider
	 */
	public function setProvider($provider) {
		$this->provider = $provider;
	}

	/**
	 * @return the $useBlock
	 */
	public function getUseBlock() {
		return $this->useBlock;
	}

	/**
	 * @return the $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @return the $position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * @param field_type $useBlock
	 */
	public function setUseBlock($useBlock) {
		$this->useBlock = $useBlock;
	}

	/**
	 * @param field_type $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * @param field_type $position
	 */
	public function setPosition($position) {
		$this->position = $position;
	}

	/**
	 * @return the $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $code
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * @return the $puslish
	 */
	public function getPuslish() {
		return $this->puslish;
	}

	/**
	 * @return the $content
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @return the $controller
	 */
	public function getController() {
		return $this->controller;
	}

	/**
	 * @param field_type $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param field_type $code
	 */
	public function setCode($code) {
		$this->code = $code;
	}

	/**
	 * @param field_type $puslish
	 */
	public function setPuslish($puslish) {
		$this->puslish = $puslish;
	}

	/**
	 * @param field_type $content
	 */
	public function setContent($content) {
		$this->content = $content;
	}

	/**
	 * @param field_type $controller
	 */
	public function setController($controller) {
		$this->controller = $controller;
	}

}