<?php
class UploadFieldUploadFolderSelectHandler extends UploadField_SelectHandler {
    
    protected function getListField($folderID) {
		$requestedFolderID = $this->parent->getRequest()->requestVar('ParentID');
		if (
		    $requestedFolderID === null 
		    && !$this->parent->getDisplayFolderName() 
		    && $this->parent->getFolderName() != Config::inst()->get('Upload', 'uploads_folder')
		) {
			$folder = Folder::find_or_make($this->parent->getFolderName());
			$folderID = $folder ? $folder->ID : 0;
		}
        return parent::getListField($folderID);
    }
}