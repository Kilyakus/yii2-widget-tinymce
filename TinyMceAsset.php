<?php
namespace kilyakus\widget\tinymce;

use yii\web\AssetBundle;

class TinyMceAsset extends AssetBundle
{
	public $sourcePath = '@vendor/tinymce/tinymce';
	public $js = ['tinymce.min.js'];
	public $depends = ['yii\web\JqueryAsset'];
}
