<?php
namespace App\Traits;
use RalphJSmit\Laravel\SEO\Support\SEOData;

trait SeoTrait
{
    public function generateSeoData($title="AceHospitality",$desc){
      $seo =  new SEOData(
                title: $title,
                description: $desc??"",
          );
          return $seo;
    }
}
