<?php

namespace App\Collections;

/**
 * ProjectCollection
 *
 * En esta clase se formatean desde ProjectController
 */
class ProjectCollection
{
    /**
     * renderProjects
     *
     * @param  mixed $projects
     * @return void
     */
    public function renderProjects($projects)
    {
        $data = [];
        foreach ($projects as $item) {
            $data = [
                'name' => $item->name,
                'description' => $item->description,
                "image" => $item->image,
                "address" => $item->address,
                "price" => $item->price,
                "specs" => json_decode($item->specs),
                "offer_id" => $item->description,
                "type_id" => $item->description,
                "place" => [
                    "lat" => $item->lat,
                    "long" => $item->long,
                    "region" => $item->region,
                    "provincia" => $item->provincia,
                    "comuna" => $item->comuna,
                    "route" => $item->route,
                    "number" => $item->number,
                    "placeid" => $item->placeid,
                    "country" => $item->country
                ]
            ];
        }
        return $data;
    }
}
