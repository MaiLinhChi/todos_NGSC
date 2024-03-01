<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TodosController extends Controller
{
    private $todos;
    private $user;
    public function __construct(Todos $todos, User $user)
    {
        $this->todos = $todos;
        $this->user = $user;
    }

    public function index(Request $request)
    {
        $data = $this->user::find($request->user()->id)->todos;
        return view('dashboard', ['todos' => $data]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $dataInsert = [
                'description' => $request->description,
                'user_id' => $request->user()->id
            ];

            $this->todos::create($dataInsert);
            DB::commit();
            return redirect('/dashboard');
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    public function delete(Request $request)
    {
        $this->todos->find($request->id)->delete();
        return redirect('/dashboard');
    }
}
