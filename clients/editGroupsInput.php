<?php
/**
 * 
 * 
 * @package	MoodleWS
 * @copyright	(c) P.Pollet 2007 under GPL
 */
class editGroupsInput {
	/** 
	* @var  (groupData) array of groupDatum
	*/
	public $groups;
	/* full constructor */
	 public function editGroupsInput($groups=array()){
		 $this->groups=$groups   ;
	}
	/* get accessors */
	public function getGroups(){
		 return $this->groups;
	}

	/*set accessors */
	public function setGroups($groups){
		$this->groups=$groups;
	}

}

?>
