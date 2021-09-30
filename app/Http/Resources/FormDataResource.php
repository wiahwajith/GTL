<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class FormDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $formData = $this->whenLoaded('formData');
        $formLastRun = $this->whenLoaded('formLastRunrs');
       
        return [
            "runner_name" => $formData->runner_name,
            "age"         => $formData->age,
            "sex"         => $formData->sex,
            "colour"      => $formData->colour,
            "last_runs"   => FormLastRunsResource::make($formLastRun)
        ];
    }
}
