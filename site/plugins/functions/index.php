<?php // globally available functions
  function convert_ratio ($file_ratio) {
    $ratio = str_replace(',', '.', ''.(1 / $file_ratio).''); // replace "," with "." to make ratio calcable in css
    return $ratio;
  };

  function setup_element_from_file ($file, $width, $classname, $title) {
    $element = NULL;
    if ($file) {
      $classname = ($classname) ? (' '.$classname) : '';
      if ($file->extension() == 'svg') {
        $svg_element = svg($file);
        $svg_html = <<<HTML
        <div class="svg-wr{$classname}">{$svg_element}</div>
        HTML;
        $element = $svg_html;
      } else {
        $image_ratio = convert_ratio($file->ratio());
        //$image_height = $image_ratio * 100;
        $image_height = $image_ratio * $width;
        $image_srcset = 'img_'.round($width);

        if (!$title) {
          $alt = $file->alt();
          $title = $file->caption();
        } else {
          $alt = $title;
          // $title = $title
        }
        $caption_html = ($file->caption()->isNotEmpty()) ? <<<HTML
        <figcaption>{$file->caption()->kti()}</figcaption>
        HTML : null;

        if ($file->extension() == 'gif') {
          $image_html = <<<HTML
          <figure class="image-wr{$classname}" style="max-width: {$width}vw; padding-top: {$image_height}%;">
            <img class="lazyload"
            src="{$file->thumb(['width' => 360, 'blur' => true, 'format' => 'webp'])->url()}"
            data-src="{$file->url()}"
            data-ratio="{$image_ratio}"
            alt="{$alt}"
            title="{$title}">
            {$caption_html}
          </figure>
          HTML;;
        } else {
          $image_html = <<<HTML
          <figure class="image-wr{$classname}" style="max-width: {$width}vw; padding-top: {$image_height}%;">
            <img class="lazyload"
            src="{$file->thumb(['width' => 360, 'blur' => true, 'format' => 'webp'])->url()}"
            data-srcset="{$file->srcset($image_srcset)}"
            data-sizes="{$width}vw"
            data-ratio="{$image_ratio}"
            alt="{$alt}"
            title="{$title}">
            {$caption_html}
          </figure>
          HTML;
        }
        $element = $image_html;
      }
    } else {
      $element = 'FILE NOT FOUND';
    }
    return $element;
  };