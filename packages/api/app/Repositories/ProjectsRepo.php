<?php

namespace App\Repositories;

use App\Models\Place;
use App\Models\Project;

class ProjectRepo
{

    /**
     * getProjectsWithPlaces
     *
     * Consulta proyectos con Ubicación en el mapa
     *
     * @return void
     */
    public function getProjectsWithPlaces($type, $pricemin, $pricemax, $comuna, $region)
    {
        $query = "select name, description, image, address, price, specs, offer_id, type_id,
        lat, places.long, region, provincia, comuna, route, number, placeid, country
        from projects inner join places on places.id = projects.place_id where 1 ";


        if (!empty($type)) {
            $query .= " and type_id = '$type'";
        }

        if (!empty($comuna)) {
            $query .= " and comuna = LOWER('$comuna')";
        }

        if (!empty($pricemin)) {
            $query .= " and (price BETWEEN $pricemin AND $pricemax)";
        }

        if (!empty($region)) {
            $query .= " and region = '$region'";
        }

        $projects = \DB::select($query);


        return $projects;
    }

    /**
     * store
     *
     * Inserta un nuevo proyecto en la base de datos
     *
     * @param  mixed $request
     * @return void
     */
    public function store($request, $places)
    {

        $id = \DB::table('places')->insertGetId($places);
        $request['place_id'] = $id;
        if ($id) {
            $project = Project::insert($request);
        }

        return $project;
    }


    /**
     * update
     *
     * Actualiza un proyecto de la bd por id
     *
     * @param  mixed $id
     * @param  mixed $description
     * @return void
     */
    public function update($id, $request)
    {
        $project =  Project::where('id', $id)->update([
            "name" => $request['name'],
            "description" => $request['description'],
            "image" => $request['image'],
            "address" => $request['address'],
            "price" => $request['price'],
            "specs" => json_encode($request['specs']),
            "offer_id" => $request['offer_id'],
            "type_id" => $request['type_id'],

        ]);

        return $project;
    }

    /**
     * delete
     *
     * Elimina un proyecto de la bd por id
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $project = Project::find($id);
        $project->delete();

        return $project;
    }
}
