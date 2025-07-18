<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Skill;

class OptionController extends Controller
{

    public static function middleware(): array
    {
        return [
            new Middleware('role:admin,employer,candidate'),
            new Middleware('role:admin,employer', only: ['locationStore','locationEdit','locationUpdate','locationDelete','skillStore','skillEdit','skillUpdate','skillDelete']),
        ];
    }

    /**
     * Get All Locations
     * @return [type]
     */
    public function locations()
    {
        $locations = Location::select('id', 'name')->orderBy('id', 'desc')->get();
        return response()->json([
            'message' => 'Location fetched successfully',
            'locations' => $locations
        ]);
    }

    /**
     * Store All Locations
     * @param Request $request
     *
     * @return [type]
     */
    public function locationStore(Request $request){
        $location = new Location();
        $location->name = $request->input('name','');
        $location->save();
        return response()->json([
            'message' => 'Location created successfully',
            'job' => $location
        ], 201);
    }

    /**
     * Edit  locations
     * @param Location $location
     *
     * @return [type]
     */
    public function locationEdit(Location $location)
    {
        return response()->json([
            'message' => 'Location fetched successfully',
            'location' => $location
        ]);
    }

    /**
     * Update  locations
     * @param Request $request
     * @param Location $location
     *
     * @return [type]
     */
    public function locationUpdate(Request $request,Location $location){

        $location->name = $request->input('name','');
        $location->save();
        return response()->json([
            'message' => 'Location updated successfully',
            'job' => $location
        ], 201);
    }

    /**
     * Delete  locations
     *
     * @param Location $location
     *
     * @return [type]
     */
    public function locationDelete(Location $location) {
        $location->delete();
        return response()->json(['message' => 'Location deleted successfully.']);
    }

    // ====================================================================

    /**
     * show all skills
     * @return [type]
     */
    public function skills()
    {
        $skills = Skill::select('id', 'name')->orderBy('id', 'desc')->get();
        return response()->json([
            'message' => 'Skill fetched successfully',
            'skills' => $skills
        ]);
    }

    /**
     * store skill
     * @param Request $request
     *
     * @return [type]
     */
    public function skillStore(Request $request){
        $skill = new Skill();
        $skill->name = $request->input('name','');
        $skill->save();
        return response()->json([
            'message' => 'Skill created successfully',
            'skill' => $skill
        ], 201);
    }

    /**
     * Edit skill
     * @param Skill $skill
     *
     * @return [type]
     */
    public function skillEdit(Skill $skill)
    {
        return response()->json([
            'message' => 'Skill fetched successfully',
            'skill' => $skill
        ]);
    }

    /**
     * Update Skill
     * @param Request $request
     * @param Skill $skill
     *
     * @return [type]
     */
    public function skillUpdate(Request $request,Skill $skill){

        $skill->name = $request->input('name','');
        $skill->save();
        return response()->json([
            'message' => 'Skill updated successfully',
            'job' => $skill
        ], 201);
    }

    /**
     * Delete Skill
     * @param Skill $skill
     *
     * @return [type]
     */
    public function skillDelete(Skill $skill) {
        $skill->delete();
        return response()->json(['message' => 'Skill deleted successfully.']);
    }
}
