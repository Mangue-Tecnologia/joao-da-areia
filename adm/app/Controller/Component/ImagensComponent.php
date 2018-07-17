<?php

App::uses('Component', 'Controller');
App::import('Vendor', 'WideImage/WideImage');

class ImagensComponent extends Component {

    public $components = array('Session');

    public $min_filesize = 5000;
    public $max_filesize = 20000000;

    public function tratamento($dir, $x, $y, $w, $h, $largura, $altura, $tmp_name, $path, $extensao){

        $img = WideImage::load($tmp_name);

        $img = $img->resize($largura);

        $img = $img->crop($x,$y,$w,$h);
        $img = $img->resize($largura,$altura,'fill');

        if ($extensao == 'png') {
            $img->saveToFile($dir.$path);
        } else {
            if ($largura <= 250) {
                $img->saveToFile($dir.$path, 90);
            } else {
                $img->saveToFile($dir.$path, 70);
            }
            
        }
    }

    public function tratamento_2($dir, $x, $y, $w, $h, $largura, $tmp_name, $path, $extensao){

        $img = WideImage::load($tmp_name);

        $img = $img->resize($largura);

        $img = $img->crop($x,$y,$w,$h);

        //$img = $img->resize($largura);

        if ($extensao == 'png') {
            $img->saveToFile($dir.$path);
        } else {
            if ($largura <= 250) {
                $img->saveToFile($dir.$path, 90);
            } else {
                $img->saveToFile($dir.$path, 70);
            }
            
        }
    }

    public function imagem_maior($dir, $x, $y, $w, $h, $largura, $altura, $tmp_name, $path, $extensao){

        $img = WideImage::load($tmp_name);

        $img = $img->resize($largura);

        $img = $img->crop($x,$y,$w,$h);
        $img = $img->resize($largura,$altura,'fill');

        if ($extensao == 'png') {
            
            $img->saveToFile($dir.$path);

        } else {
            if ($largura <= 250) {
                $img->saveToFile($dir.$path, 90);
            } else {
                $img->saveToFile($dir.$path, 90);
            }
            
        }

    }

}