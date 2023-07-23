<?php

class WPML_Cornerstone_Update_Media_Factory implements IWPML_PB_Media_Update_Factory {

	/** @var WPML_Page_Builders_Media_Translate|null $media_translate */
	private $media_translate;

	public function create() {
		global $sitepress;
		return new WPML_Page_Builders_Update_Media(
			new WPML_Page_Builders_Update( new WPML_Cornerstone_Data_Settings() ),
			new WPML_Translation_Element_Factory( $sitepress ),
			new WPML_Cornerstone_Media_Nodes_Iterator(
				new WPML_Cornerstone_Media_Node_Provider( $this->get_media_translate() )
			),
			new WPML_Page_Builders_Media_Usage( $this->get_media_translate(), new WPML_Media_Usage_Factory() )
		);
	}

	/** @return WPML_Page_Builders_Media_Translate */
	private function get_media_translate() {
		global $sitepress;

		if ( ! $this->media_translate ) {
			$this->media_translate = new WPML_Page_Builders_Media_Translate(
				new WPML_Translation_Element_Factory( $sitepress ),
				new WPML_Media_Image_Translate( $sitepress, new WPML_Media_Attachment_By_URL_Factory(), new \WPML\Media\Factories\WPML_Media_Attachment_By_URL_Query_Factory() )
			);
		}

		return $this->media_translate;
	}
}
