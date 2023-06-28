<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController
{

    /**
     * getProjectsWithPlaces
     *
     * Consulta proyectos con Ubicación en el mapa
     *
     * @return void
     */
    public function getProjectsWithPlaces()
    {
        $projects = Project::select("name", "description", "image", "address", "price", "specs", "offer_id", "type_id")
            ->leftJoin('places', 'places.id', '=', 'projects.type_id');

        return $projects;
    }
}
