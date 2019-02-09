<?php

namespace slavkovrn\imagegalary;

use yii\base\Widget;
use yii\web\JqueryAsset;

class ImageGalaryWidget extends Widget {
    
    public $id = 'imagegalary';
    public $class = 'imagegalary';
    public $image_width = 0;
    public $image_height = 0;
    public $thumb_width = 0;
    public $thumb_height = 0;
    public $images = [];
    public $items = 3;
    public $css = '';
    private $div_width = 0;
    private $div_height = 0;
    private $left='';
    private $right='';
    private $loader='';

    public function init() {

        $this->div_width = $this->image_width+50;
        $this->div_height = $this->image_height+$this->thumb_height+20;

        parent::init();

    }

    public function run() {

        parent::run();

        $this->registryScript();

        return $this->render('imagegalary',[
            'id' =>$this->id,
            'class' =>$this->class,
            'div_width' =>$this->div_width,
            'div_height' =>$this->div_height,
            'image_width' =>$this->image_width,
            'image_height' =>$this->image_height,
            'thumb_width' =>$this->thumb_width,
            'thumb_height' =>$this->thumb_height,
            'left' =>$this->left,
            'right' =>$this->right,
            'images' =>$this->images,
        ]);
    }

    protected function registryScript()
    {
        $path = \Yii::$app->getAssetManager()->publish(__DIR__ . '/assets/');

        $this->left=$path[1].'/images/left.png';
        $this->right=$path[1].'/images/right.png';
        $this->loader=$path[1].'/img/loader.gif';

        $this->getView()->registerCssFile($path[1] . '/css/owl.carousel.css');
        $this->getView()->registerCssFile($path[1] . '/css/owl.theme.css');
        $this->getView()->registerCssFile($path[1] . '/css/imagegalary.css');
        $this->getView()->registerCssFile($path[1] . '/css/prettyPhoto.css');
        $this->getView()->registerCss('.'.$this->class.'{'.$this->css.'}');


        $this->getView()->registerJsFile($path[1] . '/js/jquery.js');
        $this->getView()->registerJsFile($path[1] . '/js/jquery.prettyPhoto.min.js');
        $this->getView()->registerJsFile($path[1] . '/js/jquery.prettyPhoto.init.min.js');

        $this->getView()->registerJsFile(
            $path[1] . '/js/owl.carousel.js',
            [
                'position' => \yii\web\View::POS_END,
                'depends'  => ['\yii\web\JqueryAsset'],
            ]
        );

        $script = '$(function() {
            var owl = $("#'.$this->id.'");
            owl.owlCarousel({
                "autoPlay":false,
                "items":'.$this->items.',
                "itemsDesktop":[100000,'.$this->items.'],
                "itemsDesktopSmall":[979,'.$this->items.'],
                "pagination":false
            });
            $("#'.$this->id .'-left").click(function(){
                owl.trigger("owl.prev");
            });
            $("#'.$this->id .'-right").click(function(){
                owl.trigger("owl.next");
            });
            $("#'.$this->id.' .owl-item > img").click(function(){
                $("#'.$this->id .'-main-image > a > img").attr("src",this.src);
                return false;
            });
        });
        ';

        $this->getView()->registerJs($script,\yii\web\View::POS_END);

    }

}