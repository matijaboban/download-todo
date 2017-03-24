<?php

namespace App\Traits;

trait HelperTrait
{
    /**
     * Format response into json.
     *
     * @todo write documentation
     *
     */
    public function helper_formatJsonResponse($response, $methodName = null)
    {
        if ($response && is_null($methodName)) {

            return response()->json(
                $response
            );

        } elseif ($response && !is_null($methodName)) {

            return response()->json(
                $response->{$methodName}()
            );

        } else {

            return response()->json(
                'Resource unavailable', 404
            );

        }
    }


    /**
     * Format object to array.
     *
     * @todo write documentation
     *
     */
    public function helper_objectToArray($data)
    {
        if (is_string($data) && is_array(json_decode($data))) {
            $data = array_first( json_decode($data) );
        }

        if (is_object($data)) {
            $data = get_object_vars($data);
        }

        if (is_array($data)) {
            return array_map(array(get_called_class(), __FUNCTION__), $data);
        }

        return $data;
    }

}
