<?php

namespace App\Http\Controllers;

use Voyager;
use Illuminate\Http\Request;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataDeleted;
use SebastiaanLuca\StubGenerator\StubGenerator;

class PaymentChannelController extends \App\Http\Controllers\Voyager\VoyagerBreadController
{
    /**
     * POST BRE(A)D - Store data.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        $request->validate([
            'front_name' => 'required',
            'back_name' => 'required',
            'prefix' => 'required',
            'namespace' => 'required',
            'channel_id' => 'required',
        ]);

        if (substr($request->namespace, 0, 1) == "\\") {
            $namespace = "App\Components\Payment\PaymentObject" . $request->namespace;
        } else {
            $namespace = "App\Components\Payment\PaymentObject\\" . $request->namespace;
        }

        $dir       = str_replace("\\", "/", $namespace);
        $exploded  = explode('/', $dir);
        $prefixDir = ucwords($exploded[count($exploded) - 2]);
        $className = $exploded[count($exploded) - 1];

        // create class.
        $stub = new StubGenerator(
            app_path('Components/Stubs/payment-channel.stub'),
            app_path('Components/Payment/PaymentObject/' . $prefixDir . '/' . $className . '.php')
        );

        try {
            $stub->render([
                ":CLASS_NAMESPACE:" => $prefixDir,
                ":CLASS_NAME:" => $className
            ]);
        } catch (\Exception $e) {
        }
        


        if (!$request->ajax()) {
            $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());

            event(new BreadDataAdded($dataType, $data));

            return redirect()
                ->route("voyager.{$dataType->slug}.index")
                ->with([
                        'message'    => __('voyager.generic.successfully_added_new')." {$dataType->display_name_singular}",
                        'alert-type' => 'success',
                    ]);
        }
    }

    //***************************************
    //                _____
    //               |  __ \
    //               | |  | |
    //               | |  | |
    //               | |__| |
    //               |_____/
    //
    //         Delete an item BREA(D)
    //
    //****************************************

    public function destroy(Request $request, $id)
    {
        $slug = $this->getSlug($request);

        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('delete', app($dataType->model_name));

        // Init array of IDs
        $ids = [];
        if (empty($id)) {
            // Bulk delete, get IDs from POST
            $ids = explode(',', $request->ids);
        } else {
            // Single item delete, get ID from URL or Model Binding
            $ids[] = $id instanceof Model ? $id->{$id->getKeyName()} : $id;
        }
        foreach ($ids as $id) {
            $data = call_user_func([$dataType->model_name, 'findOrFail'], $id);
            $this->cleanup($dataType, $data);
        }

        $displayName = count($ids) > 1 ? $dataType->display_name_plural : $dataType->display_name_singular;

        $res = $data->destroy($ids);
        $message = $res
            ? [
                'message'    => __('voyager.generic.successfully_deleted')." {$displayName}",
                'alert-type' => 'success',
            ]
            : [
                'message'    => __('voyager.generic.error_deleting')." {$displayName}",
                'alert-type' => 'error',
            ];

        if ($res) {
            if (substr($request->namespace, 0, 1) == "\\") {
                $namespace = "App\Components\Payment\PaymentObject" . $data->namespace;
            } else {
                $namespace = "App\Components\Payment\PaymentObject\\" . $data->namespace;
            }

            $dir       = str_replace("\\", "/", $namespace);
            $exploded  = explode('/', $dir);
            $prefixDir = ucwords($exploded[count($exploded) - 2]);
            $className = $exploded[count($exploded) - 1];
            $classFile = app_path('Components/Payment/PaymentObject/' . $prefixDir . '/' . $className . '.php');
            
            // remove class.
            if (file_exists($classFile)) {
                unlink($classFile);
            }
            
            event(new BreadDataDeleted($dataType, $data));
        }

        return redirect()->route("voyager.{$dataType->slug}.index")->with($message);
    }
}
