<?php

namespace App\Http\Controllers\Admin\Subscription;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController;
use App\Models\Plan;

class SubscriptionController extends BaseController
{
    protected $status = false;
    protected $message;
    public function index(Request $request)
    {
        return view('admin.pages.subscription.list');
    }
    public function add(Request $request)
    {
        $this->message = config('custom.MSG_ERROR_TRY_AGAIN');
        $this->setPageTitle('Add Plans');

        if ($request->post()) {
            $request->validate([
                'name' => 'required|string|min:1',
            ]);
            DB::beginTransaction();
            try {
                $isPlanAdded = Plan::create([
                    'name' => $request->name,
                    'price' => $request->price,
                    'description' => $request->description,
                    'type' => $request->type
                ]);

                if (isset($isPlanAdded) && !empty($isPlanAdded)) {
                    $this->status = 'success';
                    $this->message = config('custom.MSG_RECORD_INSERT_SUCCESS');
                } else {
                    $this->status = 'error';
                    $this->message = config('custom.MSG_RECORD_INSERT_FAILED');
                }
            } catch (\Exception $e) {
                DB::rollBack();
                logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
                $this->message = (onProduction()) ?  $this->message : $e->getMessage();
            }
            DB::commit();
            return $this->responseRedirect('admin.subscriptions.list', $this->message, $this->status);
        }
        return view('admin.pages.subscription.add');
    }
}
