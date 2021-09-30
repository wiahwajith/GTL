<?php

namespace App\Http\Controllers\api\v1;

use App\Classes\Cache;
use App\Http\Controllers\Controller;
use App\Http\Resources\FormDataResource;
use App\Models\Runner;
use Illuminate\Http\Request;

class FormDataController extends Controller
{
    public function getFormData($runnerId)
    {
        $key = "get.{$runnerId}";

        try{
            $formData = cache()->remember( $key, 60*60*24 , function() use ($runnerId){
                return Runner::with(['formData','formLastRunrs'])->find($runnerId);
            });

            if($formData){
                return jsend_success( FormDataResource::make($formData) );
            }
            return jsend_fail('Not found');
        }
        catch(\Illuminate\Database\QueryException $ex){ 
            return jsend_error($ex->getMessage());
      }
      
    }
}
