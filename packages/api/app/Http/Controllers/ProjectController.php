<?php

namespace App\Http\Controllers;

use App\Classes\ApiGeo;
use App\Classes\ResponsesBody;
use App\Collections\ProjectCollection;
use App\Repositories\ProjectRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    /**
     * projectRepo
     *
     * @var mixed
     */
    private $projectRepo;

    /**
     * projectRepo
     *
     * @var mixed
     */
    private $projectCollection;

    /**
     * __construct
     *
     * @param  mixed $projectRepo
     * @return void
     */
    public function __construct(ProjectRepo $projectRepo, ProjectCollection $projectCollection)
    {
        $this->projectRepo = $projectRepo;
        $this->projectCollection = $projectCollection;
    }

    /**
     * getProjects
     *
     * Obtiene todos los proyectos filtrados
     *
     * @param  mixed $request
     * @return void
     */
    public function getProjects(Request $request)
    {
        $type = $request['type'];
        $pricemin = $request['pricemin'];
        $pricemax = $request['pricemax'];
        $comuna = $request['comuna'];
        $region = $request['region'];

        $projects = $this->projectRepo->getProjectsWithPlaces($type, $pricemin, $pricemax, $comuna, $region);
        $projects = $this->projectCollection->renderProjects($projects);

        return ResponsesBody::responseSuccess("Todos los proyectos", 200, $projects);
    }

    /**
     * create
     *
     * Metodo que guarda  un proyecto
     *
     * @param  mixed $request
     * @return void
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "image" => "required",
            "address" => "required",
            "price" => "required",
            "type_id" => "required",
        ], [
            "name.required" => "El nombre es requerido",
            "image.required" => "La imagen es requerida",
            "address.required" => "Direccion es requerida",
            "price.required" => "Precio es requerido",
            "type_id.required" => "El type es requerido",
        ]);
        if ($validator->fails()) {
            return ResponsesBody::responseError('Error de validación', 404, $validator->errors());
        }
        $requestData = $request->all();
        $requestData['specs'] = json_encode($request->specs);
        $places = ApiGeo::places($requestData['address']);
        if (!$places) {
            return ResponsesBody::responseError('Ocurrió un error con la dirección', 400);
        }
        $project = $this->projectRepo->store($requestData, $places);

        return ResponsesBody::responseSuccess("Guardaste un proyecto de forma exitosa", 201, $project);
    }

    /**
     * update
     *
     * Metodo que actualiza un proyecto
     *
     * @param  mixed $id
     * @param  mixed $request
     * @return void
     */
    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "image" => "required",
            "address" => "required",
            "price" => "required",
            "type_id" => "required",
        ], [
            "name.required" => "El nombre es requerido",
            "image.required" => "La imagen es requerida",
            "address.required" => "Direccion es requerida",
            "price.required" => "Precio es requerido",
            "type_id.required" => "El type es requerido",
        ]);

        if ($validator->fails()) {
            return ResponsesBody::responseError('Error de validación', 404, $validator->errors());
        }
        $project  = $this->projectRepo->update($id, $request->all());
        return ResponsesBody::responseSuccess("El proyecto ha sido actualizado", 200, []);
    }

    /**
     * delete
     *
     * Metodo que elimina un proyecto
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $project = $this->projectRepo->delete($id);
        return ResponsesBody::responseSuccess("El proyecto ha sido eliminado", 204, []);
    }
}
