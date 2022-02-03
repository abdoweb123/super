<?php

namespace App\Http\Controllers\Api;

trait Father
{

    public function returnData($message,$all,$value){

        return response()->json([

            'status'=> true,
            'message' => $message,
             $all => $value,

        ]);

    }


    public function returnDataError($message){

        return response()->json([

            'status'=> false,
            'message' => $message,

        ]);

    }

}
