<?php

namespace App\Http\Resources;
use App\Http\Resources\Address as AddressResource;
use App\Http\Resources\Degree as DegreeResource;
use Illuminate\Http\Resources\Json\JsonResource;
class Institute extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'name'=>$this->name,
          'address'=>new AddressResource($this->address),
          'degrees'=> DegreeResource::collection($this->degrees),
        ];
    }
}
