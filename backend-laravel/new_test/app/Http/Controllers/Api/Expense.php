<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Expense extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(\App\Models\Expense::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $expense = \App\Models\Expense::factory($request->input())->create();
            return response()->json([
                    'success' => true,
                    'notification' => [
                        'title' => 'Позиция добавлена',
                        "type" => "success"
                    ]
                ]
            );
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'notification' => [
                    'title' => 'Позиция не добавлена',
                    "type" => "error"
                ]
            ])->setStatusCode(400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            return response()->json(\App\Models\Expense::findOrFail($id));
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'notification' => [
                    'title' => 'Позиция не найдена',
                    "type" => "error"
                ]
            ])->setStatusCode(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $expense = \App\Models\Expense::findOrFail($id);
            $expense->update($request->json()->all());

            return response()->json([
                'success' => true,
                'notification' => [
                    'title' => 'Изменения сохранены',
                    "type" => "success"
                ]
            ]);
        } catch (NotFoundHttpException|\Exception $e) {
            return response()->json([
                'success' => false,
                'notification' => [
                    'title' => 'Позиция не обновлена',
                    "type" => "error"
                ]
            ])->setStatusCode(400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = \App\Models\Expense::destroy($id);
        if ($deleted) {
            return response()->json([
                'success' => true,
                'notification' => [
                    'title' => 'Позиция удалена',
                    "type" => "success"
                ]
            ]);
        }
        return response()->json([
            'success' => false,
            'notification' => [
                'title' => 'Позиция не найдена',
                "type" => "error"
            ]
        ])->setStatusCode(404);
    }
}
