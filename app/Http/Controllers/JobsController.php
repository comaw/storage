<?php
/**
 * Created by PhpStorm.
 * User: comaw
 * Date: 21.02.2019
 * Time: 13:16
 */

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * Class JobsController
 *
 * @package App\Http\Controllers
 */
class JobsController extends Controller
{
    use ValidatesRequests;

    /**
     * {@inheritdoc}
     */
    protected function formatValidationErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = Job::select("*")
            ->orderBy('status')
            ->orderBy('id')
            ->paginate(50);

        return view('jobs.index', [
            'data' => $data->appends(Input::except('page')),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        if ($request->method() == 'POST') {
            $this->validate($request, [
                'name' => 'sometimes|string|max:255',
                'url' => 'required|url|string|max:255',
                'status' => Rule::in(array_keys(Job::listOfStatus())),
            ]);

            if (Job::create($request->all())) {
                return redirect()->route('jobs.index');
            }
        }

        return view('jobs.create', [
            'name' => $request->post('name'),
            'url' => $request->post('url'),
        ]);
    }
}
