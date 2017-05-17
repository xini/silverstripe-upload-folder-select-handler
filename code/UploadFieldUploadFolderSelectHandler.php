<?php
class UploadFieldUploadFolderSelectHandler extends UploadField_SelectHandler {
    
    protected function getListField($folderID) {
		// set folder to FolderName if no no DisplayFolder is set explicitly
        $folderID = $folderID ? $folderID : $this->parent->getRequest()->requestVar('ParentID');
		if (!$this->parent->getDisplayFolderName() || strlen($this->parent->getDisplayFolderName()) == 0) { 
			$folder = Folder::find_or_make($this->parent->getFolderName());
			$folderID = $folder ? $folder->ID : 0;
		}
        return parent::getListField($folderID);
    }
}