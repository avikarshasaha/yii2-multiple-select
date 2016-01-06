<?php

namespace avikarsha\multipleselect;

class MultipleSelectAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['multiple-select']);
        $this->setupAssets('js', ['multiple-select']);
        parent::init();
    }
}
