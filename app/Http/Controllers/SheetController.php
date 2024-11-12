<?php

namespace App\Http\Controllers;

use App\Models\Sheet;
use Illuminate\Http\Request;

class SheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // SHEET
        $sheet = Sheet::where('id', $id)->first();

        if ($sheet) {
            echo "<p>{$sheet->name}</p>";
            echo "<p>{$sheet->archetype}</p>";
        }

        // ADVANTAGE
        $advantages = $sheet->advantages()->get();

        if ($advantages->count() != 0) {
            echo "<h3>Vantagens</h3>";

            foreach ($advantages as $advantage) {
                echo "<p>{$advantage->title}</p>";
                echo "<p>{$advantage->description}</p>";
            }
        }

        // DISADVANTAGE
        $disadvantages = $sheet->disadvantages()->get();

        if ($disadvantages->count() != 0) {
            echo "<h3>Desvantagens</h3>";

            foreach ($disadvantages as $disadvantage) {
                echo "<p>{$disadvantage->title}</p>";
                echo "<p>{$disadvantage->description}</p>";
            }
        }

        // TECHNIQUE
        $techniques = $sheet->techniques()->get();

        if ($techniques->count() != 0) {
            echo "<h3>Técnicas</h3>";

            foreach ($techniques as $technique) {
                echo "<p>{$technique->title}</p>";
                echo "<p>{$technique->description}</p>";
            }
        }

        // EQUIPMENTS
        $equipments = $sheet->equipments()->get();

        if ($equipments->count() != 0) {
            echo "<h3>Equipamentos</h3>";

            foreach ($equipments as $equipment) {
                echo "<p>{$equipment->title}</p>";
                echo "<p>{$equipment->description}</p>";
            }
        }

        // SKILLS
        $skills = $sheet->skills()->get();
        
        if ($skills->count() != 0) {
            echo "<h3>Perícias</h3>";

            foreach ($skills as $skill) {
                echo "<p>{$skill->id}: {$skill->name}</p>";
            }
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
