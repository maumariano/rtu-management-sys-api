<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BrgyCertRepositoryInterface;
use App\Models\BrgyCert as Model;
use App\Repositories\ResidentRecordRepository;

use Carbon\Carbon;
use Mail;

class BrgyCertRepository implements BrgyCertRepositoryInterface
{
    protected $model;

    public function __construct(
        Model $model,
    )
    {
        $this->model = $model;
    }

    public function baseModel()
    {
        return $this->model;
    }

    public function getAll()
    {
        try
        {
            return $this->baseModel()
            ->orderBy('id', 'DESC')->get();
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function getById($id)
    {
        try
        {
            return $this->baseModel()->findOrFail($id);
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function updateById($id, $payload)
    {
        try
        {
            // $resident = $this->residentRecordRepository->getById($payload['resident_record_id']);
            // $residentName = $resident->first_name.' '.$resident->last_name;

            // Mail::raw("Good day, {$residentName} your certificate for {$payload['type']} been created and ready for pick-up", function($message) use($resident) {
            //     $message->from('pitogo-portal@no-reply.com', 'BRGY.PITOGO PORTAL SYSTEM');
            //     $message->subject('BRGY.PITOGO - CERTIFICATE READY FOR PICK-UP');
            //     $message->to($resident->email);
            // });

            return $this->baseModel()->findOrFail($id)->update($payload);
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function deleteById($id)
    {
        try
        {
            return $this->baseModel()->findOrFail($id)->delete();
        }
        catch (Exception $e)
        {
            return $e->getMessage();
        }
    }
}
