<?php

namespace App\Http\Livewire\Site;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SeoAudit extends Component
{
    public  $result;

    public $url = "";

    public function analyse()
    {
        $this->result = [];

        $response = Http::withHeaders([
            "x-rapidapi-host" => "seo-fast-audit.p.rapidapi.com",
            "x-rapidapi-key" =>  "01debfc655msh2c1e47d1ee8d67fp19d343jsna9e0b4530a31"
        ])
            ->get("https://seo-fast-audit.p.rapidapi.com/?url={$this->url}");


        if ($response->ok())
        {
            $object = $response->object()->result;

            $this->result = [
                'wordCount'  => $object->wordsCounts,
                'googleAnalytics'  => $object->googleAnalytics,
                'facebookPixel'  => $object->facebookPixel,
                'wordpress'  => $object->wordpress,
                //'links'  => $object->links,
                'title'  => [
                    'text' => isset($object->title->data[0]) ?  $object->title->data[0]->text : null,
                    'word' => isset($object->title->data[0]) ? $object->title->data[0]->words : null,
                ],
                'h1'  => [
                    'text' =>  isset($object->h1->data[0]) ? $object->h1->data[0]->text : null,
                    'word' =>  isset($object->h1->data[0]) ? $object->h1->data[0]->words : null,
                ],
                'meta'  => [
                    'count' =>  $object->meta->counts,
                    'word' => $object->meta->data,
                ],
               // 'h1'  => $object->h1,
               // 'meta'  => $object->meta,
            ];

        }


    }
    public function render()
    {
        return view('livewire.site.seo-audit');
    }
}
