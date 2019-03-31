<?php

namespace Huubl\Extensions\DataObjects;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Forms\FieldGroup;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Tab;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;


class SiteConfigQuickLinks extends DataExtension {
	
	private static $db = [
		'Link1link'  => 'Varchar',
		'Link2link'  => 'Varchar',
		'Link3link'  => 'Varchar',
		'Link4link'  => 'Varchar',
		'Link1title'  => 'Varchar',
		'Link2title'  => 'Varchar',
		'Link3title'  => 'Varchar',
		'Link4title'  => 'Varchar'
    ];


	public function updateCMSFields(FieldList $fields) {


		$fields->addFieldsToTab('Root.HandigeLinks', [
				TextField::create('Link1title', _t($this->owner->getClassName() . '.Link1title', 'Titel handige link 1')),
				UploadField::create('Link1image', _t($this->owner->getClassName() . '.Link1image', 'SVG handige link 1'))->setFolderName('Uploads/HandigeLinks/')->setAllowedMaxFileNumber(1)->setAllowedFileCategories('image'),
				TextField::create('Link1link', _t($this->owner->getClassName() . '.Link1link', 'URL handige link 1')),

				TextField::create('Link2title', _t($this->owner->getClassName() . '.Link2title', 'Titel handige link 2')),
				UploadField::create('Link2image', _t($this->owner->getClassName() . '.Link2image', 'SVG handige link 2'))->setFolderName('Uploads/HandigeLinks/'),
				TextField::create('Link2link', _t($this->owner->getClassName() . '.Link2link', 'URL handige link 2')),

				TextField::create('Link3title', _t($this->owner->getClassName() . '.Link3title', 'Titel handige link 3')),
				UploadField::create('Link3image', _t($this->owner->getClassName() . '.Link3image', 'SVG handige link 3'))->setFolderName('Uploads/HandigeLinks/'),
				TextField::create('Link3link', _t($this->owner->getClassName() . '.Link3link', 'URL handige link 3')),

				TextField::create('Link4title', _t($this->owner->getClassName() . '.Link4title', 'Titel handige link 4')),
				UploadField::create('Link4image', _t($this->owner->getClassName() . '.Link4image', 'SVG handige link 4'))->setFolderName('Uploads/HandigeLinks/'),
				TextField::create('Link4link', _t($this->owner->getClassName() . '.Link4link', 'URL handige link 4'))
			]
		);

	}
}
