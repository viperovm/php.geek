<?php


class GaleryClass
{

    private $folder;
    private $width;

    function __construct($folder, $width)
    {
        $this->folder = $folder;
        $this->width = $width;
        $this->view();
    }

    public function view()
    {
        $files = scandir($this->folder);
        foreach($files as $file) :
            $filepath = $this->folder . '/' . $file;
            if(substr(mime_content_type($filepath), 0, 5) == 'image') : ?>

            <a href="<?=$filepath?>" data-lightbox="mygalery" data-title="Nature"><img src="<?=$filepath?>" alt="Img-<?=$file?>" width="<?=$this->width?>"></a>

<?php else : continue;
endif;
endforeach;
    }
}
