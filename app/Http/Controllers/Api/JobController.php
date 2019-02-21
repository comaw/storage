<?php
/**
 * Created by PhpStorm.
 * User: comaw
 * Date: 21.02.2019
 * Time: 10:45
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * Class JobController
 *
 * @package App\Http\Controllers\Api
 */
class JobController extends Controller
{

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jobs = Job::select("*");
        if ($request->has('status')) {
            $jobs->where("status", '=', $request->get('status'));
        }
        $jobs->limit($request->get('limit', 100));
        $jobs->offset($request->get('offset', 0));
        $jobs->orderBy("status");
        $jobs->orderBy("id");
        $jobs = $jobs->get();

        return response(['data' => $jobs], 200);
    }

    /**
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function one(int $id)
    {
        $job = Job::findOrFail($id);

        return response(['data' => [$job]], 200);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function crete(Request $request)
    {
        $validator = $this->validateJob($request);
        if ($validator->fails()) {
            $errors = $validator->errors()->getMessages();

            return response([
                'errors' => $errors
            ], 400);
        }

        $job = Job::create($request->all());

        return response(['data' => [$job]], 201);
    }

    /**
     * @param Request $request
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $job = Job::findOrFail($id);

        $validator = $this->validateJobForUpdate($request);
        if ($validator->fails()) {
            $errors = $validator->errors()->getMessages();

            return response([
                'errors' => $errors
            ], 400);
        }

        $job->update($request->all());

        return response(['data' => [$job]], 201);
    }

    /**
     * @param int $id
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws \Exception
     */
    public function delete(int $id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return response([], 204);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Validation\Validator|\Illuminate\Validation\Validator
     */
    protected function validateJob(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'url' => 'required|url|string|max:255',
            'status' => Rule::in(array_keys(Job::listOfStatus())),
        ]);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Validation\Validator|\Illuminate\Validation\Validator
     */
    protected function validateJobForUpdate(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'url' => 'sometimes|required|url|string|max:255',
            'status' => Rule::in(array_keys(Job::listOfStatus())),
        ]);
    }
}
